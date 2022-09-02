#!/bin/bash

up: ## Start the containers
	docker-compose up -d

stop: ## Stop the containers
	docker-compose stop

composer-install: ## Install composer dependencies
	docker-compose exec app composer install
