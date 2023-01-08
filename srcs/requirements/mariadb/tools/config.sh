#! /bin/bash

service mysql start

mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE $WORDPRESS_DB_NAME";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE USER '$WORDPRESS_DB_USER'@'%' IDENTIFIED BY '$WORDPRESS_DB_PASSWORD'";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "GRANT ALL ON $WORDPRESS_DB_NAME.* TO '$WORDPRESS_DB_USER'@'%'; FLUSH PRIVILEGES";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD'; FLUSH PRIVILEGES";

killall -9 mysqld

service mysql start

exec "$@"