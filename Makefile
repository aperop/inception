NAME = inception

SRCS = srcs/requirements/nginx/Dockerfile \
		srcs/requirements/nginx/conf/nginx.conf \
		srcs/requirements/mariadb/Dockerfile \
		srcs/requirements/wordpress/Dockerfile \
		srcs/requirements/wordpress/tools/wp-config.php \
		srcs/requirements/wordpress/tools/wp_config.sh \
		srcs/requirements/redis/Dockerfile \
		srcs/requirements/redis/tools/redis.conf \
		srcs/requirements/adminer/Dockerfile \
		srcs/requirements/adminer/tools/adminer-4.8.1.php \
		srcs/requirements/duplicator/Dockerfile \
		srcs/requirements/duplicator/tools/backup_creator.sh \
		srcs/requirements/ftp/Dockerfile \
		srcs/requirements/ftp/tools/vsftpd.sh \
		srcs/requirements/static-website/Dockerfile \
		srcs/requirements/static-website/conf/httpd.conf \
		srcs/requirements/static-website/page/index.html \

all: $(NAME)

$(NAME): $(SRCS)
	mkdir -p "/home/dhawkgir/data/website"
	mkdir -p "/home/dhawkgir/data/database"
	mkdir -p "/home/dhawkgir/data/backup"
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml build
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml up -d
	bash ./srcs/requirements/wordpress/tools/check_install.sh

linux:
	echo "127.0.0.1 dhawkgir.42.fr" >> /etc/hosts
	echo "127.0.0.1 www.dhawkgir.42.fr" >> /etc/hosts

clean:
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml stop
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml down

fclean: clean
	sudo rm -rf /home/dhawkgir/data/website/
	sudo rm -rf /home/dhawkgir/data/database/
	sudo rm -rf /home/dhawkgir/data/backup/
	docker system prune -f --all --volumes
	docker volume rm -f inception_website
	docker volume rm -f inception_database
	docker volume rm -f inception_backup
	docker system prune -f
	docker image prune -f --filter 'label=inception'

rm:
	@docker stop $(docker ps -qa) 
	@docker rm $(docker ps -qa) 
	@docker rmi -f $(docker images -qa)
	@docker volume rm $(docker volume ls -q) 
	@docker network rm $(docker network ls -q)


re: fclean all

.PHONY: linux all clean fclean re