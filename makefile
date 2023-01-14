all:
	sudo docker-compose -f ./srcs/docker-compose.yml up --build

clean:
	sudo docker-compose -f ./srcs/docker-compose.yml down --rmi all

re: clean all