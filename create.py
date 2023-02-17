import os
import subprocess

os.system('git pull')

os.system('docker build -t php-app .')

os.system('docker run -d -p 2999:80 --name bok-php php-app')

