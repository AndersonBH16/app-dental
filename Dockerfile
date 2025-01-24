# Utilizar la imagen base oficial de PHP 8.2 con FPM
FROM php:8.2-fpm

# Establecer las variables de entorno para configuración no interactiva
ENV DEBIAN_FRONTEND=noninteractive

# Instalar dependencias y extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libicu-dev \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libonig-dev \
    pkg-config \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        intl \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        mbstring \
        bcmath \
        gd \
        zip \
        opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer el directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto al contenedor
COPY . /var/www

# Asignar permisos necesarios
RUN mkdir -p /var/www/storage \
    && mkdir -p /var/www/bootstrap/cache \
    && chmod -R 777 /var/www/storage \
    && chmod -R 777 /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www

# Configuración de producción (por ejemplo, OPCache)
RUN echo "opcache.enable=1\nopcache.enable_cli=1\nopcache.memory_consumption=128\nopcache.interned_strings_buffer=8\nopcache.max_accelerated_files=10000\nopcache.revalidate_freq=2" > /usr/local/etc/php/conf.d/opcache.ini

# Exponer el puerto para PHP-FPM
EXPOSE 8000

# Comando por defecto para ejecutar PHP-FPM
CMD ["php-fpm"]
