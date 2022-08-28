FROM	alpine:3.15

ARG DB_PASSWORD
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_USER2
ARG MYSQL_PASSWORD
ARG MYSQL_ROOT_PASSWORD

RUN apk update --no-cache && \
	apk add mariadb mariadb-client

RUN	sed -i "7i user=mysql\ndatadir=/var/lib/mysql/" /etc/my.cnf.d/mariadb-server.cnf && \
	mariadb-install-db --user=mysql --datadir=/var/lib/mysql --auth-root-authentication-method=normal && \
	mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld

RUN echo "[mysqld]" > /etc/my.cnf.d/mariadb-server.cnf && \
	echo "user = mysql" >> /etc/my.cnf.d/mariadb-server.cnf && \
	echo "datadir = /var/lib/mysql/" >> /etc/my.cnf.d/mariadb-server.cnf && \
	echo "port = 3306" >> /etc/my.cnf.d/mariadb-server.cnf && \
	echo "bind-address = 0.0.0.0" >> /etc/my.cnf.d/mariadb-server.cnf && \
	echo "skip-networking = false" >> /etc/my.cnf.d/mariadb-server.cnf

RUN mysqld & \
	sleep 20 && \
	echo "CREATE DATABASE $MYSQL_DATABASE;" | mysql && \
	echo "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql && \
	echo "CREATE USER '$MYSQL_USER2'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql && \
	echo "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';" | mysql && \
	echo "FLUSH PRIVILEGES;" | mysql && \
	echo "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MYSQL_ROOT_PASSWORD');" | mysql

EXPOSE	3306

CMD ["mysqld"]