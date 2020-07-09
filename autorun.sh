#!/bin/bash
sudo chmod +x ./SQLTableCreate.sh;
./SQLTableCreate.sh;
echo -e "Insert your local DATABASE password: \c";
read PWD;
sed -i "/MYSQLDB_PWD=/c\MYSQLDB_PWD=$PWD" ./.env;
echo -e "Insert your local DATABASE username: \c";
read USERNAME;
sed -i "/MYSQLDB_USERNAME=/c\MYSQLDB_USERNAME=$USERNAME" ./.env;
~/composer/composer.phar install;
RESULT=$?

if [ $RESULT -eq 0 ]; then
  echo success
else
  echo -e "Sorry, did not find composer, please, type full path to 'composer.phar' file (/home/USER/composer/composer.phar): \c";
  read COMPOSER_PATH;
  $COMPOSER_PATH install;
fi

echo "configuring composer...";
sleep 1;
echo "running server...";

php -S localhost:8080;

exit 0
