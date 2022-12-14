FROM	alpine:3.15

ARG FTP_USER

RUN apk update && apk upgrade &&  apk --update --no-cache add vsftpd

RUN echo "local_enable=YES" >> /etc/vsftpd/vsftpd.conf \
  && echo "chroot_local_user=YES" >> /etc/vsftpd/vsftpd.conf \
  && echo "allow_writeable_chroot=YES" >> /etc/vsftpd/vsftpd.conf \
  && echo "local_root=/home/$FTP_USER/" >> /etc/vsftpd/vsftpd.conf \
  && echo "background=NO" >> /etc/vsftpd/vsftpd.conf \
  && echo "ftpd_banner=Welcome to Inception FTP Server" >> /etc/vsftpd/vsftpd.conf \
  && echo "dirmessage_enable=YES" >> /etc/vsftpd/vsftpd.conf \
  && echo "max_clients=10" >> /etc/vsftpd/vsftpd.conf \
  && echo "max_per_ip=5" >> /etc/vsftpd/vsftpd.conf \
  && echo "write_enable=YES" >> /etc/vsftpd/vsftpd.conf \
  && echo "local_umask=022" >> /etc/vsftpd/vsftpd.conf \
  && echo "passwd_chroot_enable=yes" >> /etc/vsftpd/vsftpd.conf \
  && echo "pasv_enable=Yes" >> /etc/vsftpd/vsftpd.conf \
  && echo "listen_ipv6=NO" >> /etc/vsftpd/vsftpd.conf \
  && echo "seccomp_sandbox=NO" >> /etc/vsftpd/vsftpd.conf \
  && echo "anon_mkdir_write_enable=YES" >> /etc/vsftpd/vsftpd.conf \
  && sed -i "s/anonymous_enable=YES/anonymous_enable=NO/" /etc/vsftpd/vsftpd.conf

COPY tools/vsftpd.sh /usr/sbin/

RUN chmod +x /usr/sbin/vsftpd.sh

EXPOSE 20 21 21100-21110

CMD ["/usr/sbin/vsftpd.sh"]