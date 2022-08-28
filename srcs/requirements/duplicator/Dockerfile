FROM	alpine:3.15

RUN apk update && apk upgrade

RUN mkdir /backup

COPY	tools/backup_creator.sh /usr/bin/backup_creator.sh
RUN		chmod +x /usr/bin/backup_creator.sh

ENTRYPOINT ["/usr/bin/backup_creator.sh"]