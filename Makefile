NAME = inception

SRCS = 	srcs/requirements/nginx/Dockerfile 				\
		srcs/requirements/nginx/tools/nginx.conf 		\
		srcs/requirements/mariadb/Dockerfile 			\
		srcs/requirements/wordpress/Dockerfile 			\
		srcs/requirements/wordpress/tools/wp-config.php \
		srcs/requirements/wordpress/tools/wp_config.sh 	\

create_dir: 
			mkdir -p /home/${USER}/data/db
			mkdir -p /home/${USER}/data/wp

