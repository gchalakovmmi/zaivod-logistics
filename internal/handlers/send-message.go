package handlers

import (
	"net/http"
	"log/slog"
	"os"
	"log"
	"net/smtp"
)

func SendMessage() http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		company := r.FormValue("company")
		first_name := r.FormValue("first_name")
		last_name := r.FormValue("last_name")
		email := r.FormValue("email")
		phone := r.FormValue("phone")
		message := r.FormValue("message")
		slog.Debug("internal/handlers/send-message.go", "Message", "A message has been submitted for sending", 
			"Company", company,
			"First Name", first_name,
			"Last Name", last_name,
			"Email", email,
			"Phone", phone,
			"Message", message)


		auth := smtp.PlainAuth("", os.Getenv("SENDER_EMAIL"), os.Getenv("PASSWORD"), os.Getenv("SMTP_HOST"))

		msg := []byte("To: "+os.Getenv("RECIPIENT_EMAIL")+"\r\n" +
			"Subject: Message from "+first_name+" "+last_name+"\r\n" +
			"\r\n" +
			"From: "+first_name+" "+last_name+"\r\n" +
			"Company: "+company+"\r\n" +
			"Email: "+email+"\r\n" +
			"Phone: "+phone+"\r\n" +
			"Message:\r\n"+message+"\r\n")

		err := smtp.SendMail(
			os.Getenv("SMTP_HOST")+":"+os.Getenv("SMTP_PORT"), 
			auth, 
			"api", 
			[]string{os.Getenv("RECIPIENT_EMAIL")}, 
			msg)

		if err != nil {
			log.Fatal(err)
		}

		http.Redirect(w, r, "/home/"+r.PathValue("language")+"/"+r.PathValue("theme"), http.StatusSeeOther)
	})
}
