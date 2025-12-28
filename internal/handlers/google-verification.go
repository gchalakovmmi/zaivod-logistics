package handlers

import (
	"net/http"
)

func GoogleVerification() http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "text/plain")
		w.WriteHeader(http.StatusOK)
		w.Write([]byte("google-site-verification: google3d4b8e47f66457f9.html"))
	})
}
