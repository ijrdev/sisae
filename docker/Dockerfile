FROM ubuntu:18.04

LABEL description="Ambiente local de desenvolvimento do SISAE." maintainer="Ivanildo Junior<ivanildo.junior.dev@gmail.com>"

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
 && apt-get install -y apache2 \
 && apt-get install -y php libapache2-mod-php php-cli php-common php-mbstring php-gd php-xml php-mysql php-zip php-curl php-soap php-bcmath \
 && apt-get install -y vim \
 && apt-get install -y curl \
 && a2enmod rewrite \
 && a2enmod headers \
 && apt-get autoremove \
 && apt-get autoclean \
 && apt-get clean \
 && apt-get -f install \
 && ln -s /var/www/html /html

COPY 000-default.conf /etc/apache2/sites-available/

