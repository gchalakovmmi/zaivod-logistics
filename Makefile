NAME := zaivod-logistics
APP_IMAGE := zaivod-logistics-app
DREG := dreg.buldev.com
DOMAIN := logistics.zaivod.com
BINARY_NAME := app
LINUX_USER := gchalakov
LINUX_SSH_KEY := ~/.ssh/chalusrv_rsa

.PHONY: clear build clean run app app-logs app-connect all up down restart

clear:
	@clear

build:
	@echo "=== Building Binary ==="
	@templ generate && go build -o cmd/app/$(BINARY_NAME) cmd/app/main.go

clean:
	@echo "Cleaning binaries and generated files..."
	rm cmd/app/app
	find . -name "*_templ.go" -delete

run:
	@echo "=== Running Binary ==="
	# export $$(grep -v '^#' .env | xargs) && ./cmd/app/$(BINARY_NAME)
	@eval "$$(sed -n '/^[^#]/ s/^/export /p' .env)" && ./cmd/app/$(BINARY_NAME)

app:
	@echo "=== Building and Running App ==="
	@docker compose up -d --build app

app-logs:
	@echo "=== AppLogs ==="
	@docker logs --follow $(NAME)-app-1

app-connect:
	@docker exec -it $(NAME)-app-1 sh

all: app

push: app
	@echo "=== Push App Docker Image ==="
	@docker tag $(IMAGE) $(DREG)/$(IMAGE):latest
	@docker push $(DREG)/$(APP_IMAGE):latest
	@docker push $(DREG)/$(DATABASE_IMAGE):latest
	@ssh -i $(LINUX_SSH_KEY) $(LINUX_USER)@$(DOMAIN)

up:
	docker compose up -d

down:
	docker compose down

restart: down up
