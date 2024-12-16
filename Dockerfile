# Use a PHP base image
FROM php:8.1-cli

# Set the working directory
WORKDIR /app

# Copy project files to the container
COPY . /app

# Install any PHP extensions if needed (optional)
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 8080 for Render
EXPOSE 8080

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]
