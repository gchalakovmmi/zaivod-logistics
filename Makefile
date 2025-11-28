NAME := zaivod-logistics
APP_IMAGE := zaivod-logistics-app
DREG := dreg.pulpudev.com
DOMAIN := logistics.zaivod.com
BINARY_NAME := app
LINUX_USER := root

.PHONY: clear build clean run app app-logs app-connect all up down restart

clear:
	@clear

build:
	@echo "=== Build ==="
	@templ generate && go build -o cmd/app/$(BINARY_NAME) cmd/app/main.go

clean:
		@echo "Cleaning binaries and generated files..."
		rm cmd/app/app
		find . -name "*_templ.go" -delete

run:
	@echo "Running Binary"
	export $$(grep -v '^#' .env | xargs) && ./cmd/app/$(BINARY_NAME)

app:
	@echo "=== App ==="
	@docker compose up -d --build app

app-logs:
	@echo "=== AppLogs ==="
	@docker logs --follow $(NAME)-app-1

app-connect:
	@docker exec -it $(NAME)-app-1 sh

all: app

push: all
	@echo "=== Push ==="
	@docker tag $(IMAGE) $(DREG)/$(IMAGE):latest
	@docker push $(DREG)/$(APP_IMAGE):latest
	@docker push $(DREG)/$(DATABASE_IMAGE):latest
	@ssh $(LINUX_USER)@$(DOMAIN)

up:
	docker compose up -d

down:
	docker compose down

restart: down up
