package main

import (
	"log"
	"log/slog"
	"net/http"
	"os"

	"zaivod-logistics/internal/config"
	"zaivod-logistics/internal/server"
)

func main() {
	cfg := config.New()

	logger := slog.New(slog.NewJSONHandler(os.Stdout, &slog.HandlerOptions{Level: cfg.GetLogLevel()}))
	slog.SetDefault(logger)

	srv := server.New(cfg)
	mux := srv.CreateHandlers()

	slog.Info("cmd/app/main.go", "Message", "Starting server", "port", cfg.GetPort(), "instance", cfg.GetInstanceName())
	log.Fatal(http.ListenAndServe(":"+cfg.GetPort(), mux))
}
