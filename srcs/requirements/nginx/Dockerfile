FROM	alpine:3.15

RUN		apk update && apk upgrade && apk add --no-cache nginx openssl

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/dhawkgir.pem \
        -keyout /etc/nginx/ssl/dhawkgir.key \
		-subj "/C=RU/ST=Kazan/L=Kazan/O=42/OU=RU/CN=dhawkgir.42.fr"


COPY ./conf/ /conf/

RUN adduser -D -g 'www' www && \
	mkdir -p /run/nginx && \
	mv /conf/nginx.conf /etc/nginx/nginx.conf

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]