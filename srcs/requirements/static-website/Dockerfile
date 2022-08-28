FROM	alpine:3.15

# install nginx 
RUN		apk update && apk upgrade && apk add --no-cache apache2 

# nginx config
COPY ./page/index.html /var/www/localhost/htdocs/
COPY ./conf/httpd.conf /etc/apache2/

RUN chmod -R 775 /var/www/localhost/htdocs/

CMD ["httpd", "-D", "FOREGROUND"]

EXPOSE 80