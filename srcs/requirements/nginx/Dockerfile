FROM debian:buster

RUN apt update -y \
&& apt install nginx -y

COPY ./conf/nginx.conf /etc/nginx/

COPY ./tools/sslCert /home/sslCert

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]