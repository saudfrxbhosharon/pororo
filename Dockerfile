# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Salin file aplikasi ke container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
