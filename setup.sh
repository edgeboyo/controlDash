sudo apt update
sudo apt install apache2 -y
cd /tmp/
git clone https://github.com/edgeboyo/controlDash
sudo mv controlDash/* /var/www/html/

#add www-date to sudo'ers
