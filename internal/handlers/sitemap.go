package handlers

import (
	"net/http"
)

func Sitemap() http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/xml")
		w.WriteHeader(http.StatusOK)
		w.Write([]byte(`<?xml version="1.0" encoding="UTF-8"?> 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
<url>
  <loc>https://logistics.zaivod.com/home/bg/light</loc>
</url>
<url>
  <loc>https://logistics.zaivod.com/home/en/light</loc>
</url>
<url>
  <loc>https://logistics.zaivod.com/home/ps/light</loc>
</url>
<url>
  <loc>https://logistics.zaivod.com/home/bg/dark</loc>
</url>
<url>
  <loc>https://logistics.zaivod.com/home/en/dark</loc>
</url>
<url>
  <loc>https://logistics.zaivod.com/home/ps/dark</loc>
</url>
</urlset>`))
	})
}
