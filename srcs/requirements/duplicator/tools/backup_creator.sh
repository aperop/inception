#!/bin/sh

echo "starting backup service every 5 minutes for the database..." >> backup.log

while true;
do
	time=$(date '+%Y-%m-%d %H:%M:%S')
	
	backup_folder="backup_${time}"
	mkdir "/backup/$backup_folder"
	
	echo "backup mariadb server at $time in $backup_folder" >> backup.log
	cp -Rf /db-data/* /backup/"${backup_folder}"
	
	# sleep for 5 minutes
	sleep 5m
done

exit 0