#!/bin/bash
# Install PHP manually

# Download and install PHP
curl -sL https://deb.nodesource.com/setup_16.x | bash -
sudo apt-get update -y
sudo apt-get install -y php-cli php-mbstring php-xml

# Start PHP server
php -v
