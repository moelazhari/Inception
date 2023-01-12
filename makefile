all:
	sudo docker-compose -f ./srcs/docker-compose.yml up --build

clean:
	sudo docker-compose -f ./srcs/docker-compose.yml down --rmi all

clean_volumes:
	sudo rm -rf /home/mazhari/data/db/* 
	sudo rm -rf /home/mazhari/data/wp/* 

re: clean all