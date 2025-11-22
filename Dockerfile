# ใช้ PHP 8.3-FPM (latest FPM) เป็นเบส
FROM php:8.3.8-fpm

# ตั้งค่า working directory
WORKDIR /var/www/html

# ติดตั้งเครื่องมือเสริมที่ Laravel ต้องใช้
# (นี่คือส่วนที่ M1 (ARM64) ต้องใช้คำสั่งเฉพาะ)
RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    locales zip jpegoptim optipng pngquant gifsicle vim unzip git curl \
    libzip-dev libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# ติดตั้ง Composer (เครื่องมือสำหรับจัดการ Laravel)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# รันทุกอย่างในนาม user 'www-data' (เพื่อความปลอดภัย)
USER www-data

# เปิด port 9000 ให้ Nginx คุยด้วย
EXPOSE 9000