package server

import (
	"net/http"

	"zaivod-logistics/internal/config"
	"zaivod-logistics/internal/handlers"
)

type Server struct {
	cfg	*config.Config
}

func New(cfg *config.Config) *Server {
	return &Server{ cfg: cfg }
}

func (s *Server) CreateHandlers() http.Handler {
	mux := http.NewServeMux()

	mux.Handle("/web/static/",	http.StripPrefix("/web/static/", http.FileServer(http.Dir("./web/static"))))

	mux.Handle("/health",		handlers.Health())
	mux.Handle("/{language}/home",	handlers.Home("/home", "/web/static/icons/favicon.ico"))

	mux.Handle("/", http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		http.Redirect(w, r, "/bg/home", http.StatusSeeOther)
	}))

	return mux
}
