


up:
	docker compose up -d

stop:
	docker compose down

rebuild:
	docker compose up apache82 -d --build

init:
	docker compose up -d
	docker compose exec -i apache82 bash -c 'composer install'
	docker compose exec -i apache82 bash -c 'php flarum cache:clear && php flarum assets:publish'

sh:
	docker compose exec -it apache82 bash

clear:
	docker compose exec -i apache82 bash -c 'php flarum cache:clear && php flarum assets:publish'

