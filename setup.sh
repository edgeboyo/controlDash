sudo apt update
sudo apt install apache2 -y
cd /tmp/
rm -rf controlDash
sudo rm -rf /var/www/html/*
git clone https://github.com/edgeboyo/controlDash
sudo mv controlDash/* /var/www/html/ -f

sudo sh -c "echo 'www-data     ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers"
