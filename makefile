#!/usr/bin/make

.PHONY: help
.DEFAULT_GOAL := help

help:  ## Display this help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

##@ Docker actions

start: ## Start and create containers desatached
	docker-compose up -d

stop: ## Stop and destroy desatached containers
	docker-compose down

restart: ## Restart the app container
	docker-compose down
	docker-compose up -d

logs: ## Show the output logs
	docker-compose logs

log: ## Open the logs and follow the news
	docker-compose logs --follow

##@ Program actions

run: ## Run the program
	docker exec -it linio-php-test php app/index.php

unit: ## Test the program
	docker exec -it linio-php-test ./vendor/bin/phpunit

bash: ## Test the program
	docker exec -it linio-php-test bash

dump: ## Execute a composer dump autoload
	docker exec -it linio-php-test composer dump
