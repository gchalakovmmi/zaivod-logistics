name="zaivod-logistics"
docker rm -f $name
docker rmi $name
docker build -t $name .
docker run -d --network net -e VIRTUAL_HOST="logistics.zaivod.com" -e LETSENCRYPT_HOST="logistics.zaivod.com" --name $name $name
