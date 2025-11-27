package config

import (
	"log/slog"
	"os"
	"time"
	"strings"
)

type Config struct {
	Port		string
	InstanceName	string
	LogLevel	slog.Level
}

func (c *Config) Set(key string, dest *string) {
	val := os.Getenv(key)
	if val == "" {
		slog.Error("internal/config/config.go", "Message", "Required env var missing", "var", key)
		os.Exit(1)
	}
	*dest = val
}

func (c *Config) SetDuration(key string, dest *time.Duration) {
	str := os.Getenv(key)
	if str == "" {
		slog.Error("internal/config/config.go", "Message", "Required env var missing", "var", key)
		os.Exit(1)
	}
	d, err := time.ParseDuration(str)
	if err != nil {
		slog.Error("internal/config/config.go", "Message", "Invalid duration", "var", key, "error", err)
		os.Exit(1)
	}
	*dest = d
}

func (c *Config) SetLogLevel() {
	level := os.Getenv("LOG_LEVEL")
	if level == "" {
		slog.Error("internal/config/config.go", "Message", "Environment variable 'LogLevel' is not set! Exiting...")
		os.Exit(1)
	}
	switch level {
		case "DEBUG":
			c.LogLevel = slog.LevelDebug
		case "INFO":
			c.LogLevel = slog.LevelInfo
		case "WARN":
			c.LogLevel = slog.LevelWarn
		case "ERROR":
			c.LogLevel = slog.LevelError
		default:
			c.LogLevel = slog.LevelInfo
	}
}

func (c *Config) SetBool(key string, dest *bool) {
	val := strings.TrimSpace(os.Getenv(key))
	switch strings.ToLower(val) {
	case "true":
		*dest = true
	case "false":
		*dest = false
	default:
		slog.Error("internal/config/config.go", "Message", "env var must be set to either true or false", "var", key)
		os.Exit(1)
	}
}

func (c *Config) GetPort()				string		{ return c.Port }
func (c *Config) GetInstanceName()			string		{ return c.InstanceName }
func (c *Config) GetLogLevel()				slog.Level	{ return c.LogLevel }

func New() *Config {
	c := &Config{}

	c.Set("PORT", &c.Port)
	c.Set("INSTANCE_NAME", &c.InstanceName)
	c.SetLogLevel()

	return c
}
