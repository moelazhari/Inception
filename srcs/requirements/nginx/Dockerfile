FROM debian

RUN apt-get -y update \
&& apt-get -y install nginx

COPY  ./conf/nginx.conf /etc/nginx

COPY ./test /home/test

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
# CMD ["bash"]