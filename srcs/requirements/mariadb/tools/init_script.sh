#! /bin/bash

service mysql start

mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE $WORDPRESS_DB_NAME";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE USER 'root'@'%' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD'";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE USER '$WORDPRESS_DB_USER'@'%' IDENTIFIED BY '$WORDPRESS_DB_PASSWORD'";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "GRANT ALL ON $WORDPRESS_DB_NAME.* TO '$WORDPRESS_DB_USER'@'%'";
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "GRANT ALL ON *.* TO 'root'@'%'; FLUSH PRIVILEGES";

killall mysqld

exec "$@"