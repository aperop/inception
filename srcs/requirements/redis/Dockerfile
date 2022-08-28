FROM	alpine:3.15

RUN		apk update && apk upgrade && apk add --no-cache redis

COPY	tools/redis.conf /etc/redis.conf

EXPOSE	6379

CMD ["redis-server", "/etc/redis.conf"]