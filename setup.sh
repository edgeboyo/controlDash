sudo apt update
sudo apt install apache2 git net-tools php curl ifupdown openssl -y
cd /tmp/
rm -rf controlDash
sudo rm -rf /var/www/html/*
git clone https://github.com/edgeboyo/controlDash
sudo mv controlDash/* /var/www/html/ -f

sudo sh -c "echo 'www-data     ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers"



clear
echo "Server set up!"
sudo ufw allow from any to any port 80
sudo ufw enable
echo "Firewall rules set up"
echo "To enter the dashboard use a browser!"
echo "To go from this computer enter 127.0.0.1:80"
echo "To go from local machine enter "$(hostname -I | awk '{print $1}'):80
echo "To enter fron external machin enter "$(curl -s ifconfig.me):80
echo "For the last use ensure your 80 port is open and forwars to this machine"
