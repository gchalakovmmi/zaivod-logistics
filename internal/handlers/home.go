package handlers

import (
	"net/http"
	"github.com/a-h/templ"
	"zaivod-logistics/web/templates/pages/home"
)

func Home(route, title, icon string) http.Handler {
	return templ.Handler(home.Handler(route, title, icon))
}
