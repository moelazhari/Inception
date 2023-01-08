#! /bin/bash

if [[ ! -f /var/www/html/wp-config.php ]]
then
    wp config create --path=/var/www/html/ --dbhost=$WORDPRESS_DB_HOST --dbname=$WORDPRESS_DB_NAME --dbuser=$WORDPRESS_DB_USER --dbpass=$WORDPRESS_DB_PASSWORD --allow-root

    chmod 600 /var/www/html/wp-config.php

    wp core install --path=/var/www/html/ --url=$URL --title="Your Blog Title" --admin_name=$WORDPRESS_ADMIN --admin_password=$WORDPRESS_ADMIN_PASSWORD --allow-root

    wp user create --path=/var/www/html/ --user-login=$WORDPRESS_USER --user_pass=$WORDPRESS_USER_PASSWORD --role=editor --allow-root
fi

exec "$@"