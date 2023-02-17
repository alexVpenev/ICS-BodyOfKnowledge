import os
import subprocess

os.system('sudo docker rm -f $(sudo docker ps | grep "bok-php" | cut -d " " -f 1)')

os.system('sudo docker image rm php-app')