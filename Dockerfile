 # Use a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instale as dependências do Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Copie os arquivos do Laravel para o contêiner
COPY . /var/www/html

# Configure as permissões e crie o arquivo de ambiente
RUN chown -R www-data:www-data /var/www/html \
    && cp .env.example .env \
    && php artisan key:generate

# Exponha a porta 80
EXPOSE 80

# Comando para iniciar o servidor Apache
CMD ["apache2-foreground"]


