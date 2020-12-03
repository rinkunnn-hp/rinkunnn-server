mkdir minecraft-server
cd minecraft-server
wget 
mv   server.jar
java -jar server.jar
sed -i -e "s/false/true/" eula.txt
java -jar server.jar
