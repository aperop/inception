**DOCKER**

docker images # shows images saved within docker
docker ps # shows running dockers (flag -a for all dockers)

docker run -it DockerImage	#the -it flag launches a new terminal within the docker
docker start # starts a stopped docker
docker stop
docker pause
docker unpause

docker attach # re-enters a running docker

docker rm # deletes a docker
docker rmi # deletes a docker image

docker volume create # create new unit of storage for new containers to plug into
docker run -it DockerImage -v VolumeName:/var/docker_name -p 8080:8080
				# the -v flag maps docker storage to a 'local' storage, allowing
				# to save changes from a docker to a new one.
				# the -p flag maps ports (local port:docker port)


**DOCKER-COMPOSE**

docker-compose config # checks validity of docker-compose.yml file
docker-compose up -d # run all dockers, in detached mode (-d)
docker-compose down # stop all dockers

==== DOCKER IMAGES ====

docker build -t ImageName:Tag "PATH OF THE DIRECTORY WITH THE DOCKERFILE" 
				# build a docker image from a docker file