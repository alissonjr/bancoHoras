args = `arg="$(filter-out $@,$(MAKECMDGOALS))" && echo $${arg:-${1}}`

run:
	@docker-compose up -d

artisan.key:
	@docker-compose exec app php artisan key:generate

db.bash:
	@docker-compose exec db bash

artisan.make:
	@docker-compose exec app php artisan make:$(call args)