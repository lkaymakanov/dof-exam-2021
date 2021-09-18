FROM php:apache-buster

RUN apt-get update
RUN pear channel-discover pear.nrk.io
RUN pear install nrk/Predis

COPY app/ /var/www/html