version: '3.8'
services:

  back_nikita:
    image: yiisoftware/yii2-php:8.1-fpm
    container_name: back_nikita_1
    volumes:
      - ./my_php_nikita:/var/www/my_php_nikita
      
  nginx_nikita:
    image: nginx:latest
    container_name: nginx_nikita
    ports:
      - 80:80
    volumes:
      - ./.logs/nginx:/var/log/nginx
      - ./.docker/nginx/conf.d:/etc/nginx/conf.d
    depends_on:
      - back_nikita