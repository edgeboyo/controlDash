sudo apt update
sudo apt install apache2 -y
cd /tmp/
git clone https://github.com/edgeboyo/controlDash
sudo mv controlDash/* /var/www/html/

sudo sh -c "echo 'www-data     ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers"
