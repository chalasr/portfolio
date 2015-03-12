#!/bin/sh

echo '[git] Downloading the project'
git clone https://github.com/chalasr/Symfony2_Portfolio.git
sudo chmod -R 777 Symfony2_Portfolio
cd Symfony2_Portfolio

echo '[curl] Getting Composer, the PHP dependency manager'
curl -sS https://getcomposer.org/installer | php
sudo chmod -R 777 *

echo '[composer] Downloading the dependencies'
php composer.phar install 

sudo chmod -R 777 *
php app/console doctrine:database:create 
php app/console doctrine:schema:update 

sudo echo 'Finished !'
