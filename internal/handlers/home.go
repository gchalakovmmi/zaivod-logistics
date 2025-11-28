package handlers

import (
	"net/http"
	"github.com/a-h/templ"
	"zaivod-logistics/web/templates/pages/home"
)

func Home(route, icon string) http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		templ.Handler(home.Handler(route, icon, r.PathValue("language"))).ServeHTTP(w, r)
	})
}
