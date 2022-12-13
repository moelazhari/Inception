CREATE DATABASE wp;
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('123');
UPDATE mysql.user SET Host='%' WHERE Host='localhost' AND User='root';

FLUSH PRIVILEGES;