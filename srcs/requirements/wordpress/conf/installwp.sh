cd /tmp && wget https://wordpress.org/latest.tar.gz;
tar -xvf latest.tar.gz;
mkdir -p /var/www/html && cp wordpress/* /var/www/html;
chmod -R 755 /var/www/html;