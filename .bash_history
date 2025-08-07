ls
ls /var/www/html
cat /var/www/html/index.php
cat /etc/os-release
which httpd
ls /var/www/html
sudo mkdir -p /var/www/html
sudo yum update -y
sudo yum install -y httpd php git
sudo systemctl enable httpd
sudo systemctl start httpd
cd /var/www/html
sudo git clone https://github.com/bar-devops/breached-php.git
sudo cp breached-php/index.php index.php

sudo cp bar_test/index.php index.php
cd /var/www/html
sudo git pull
cd /var/www/html
sudo git pull
git init
git add .
cd~
./
../
/.
~
~/
pwd
cd mohe
exit
