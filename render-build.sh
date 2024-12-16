#!/bin/bash

# Update the package list to install software
apt-get update

# Install PHP (you can change the version if needed)
apt-get install -y php-cli

# Print PHP version to confirm installation
php --version

# Start the PHP built-in server on port 8080
php -S 0.0.0.0:8080 -t .
