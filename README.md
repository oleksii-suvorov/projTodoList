# projTodoList
start2imp third project

1. You may want to use files SQLTableCreate.sh and tables.sql to create tables on your local machine, just install mySQL locally and type commands:

sudo chmod +x ./SQLTableCreate.sh;

./SQLTableCreate.sh

Insert your user password and here we are, table should be created.


2. Also you need to fill .env file like this example to establish connection with your db:


MYSQLDB_HOST=mysql:host=sql7.blablabla.com

MYSQLDB_PORT=8080 (by default port=3306)

MYSQLDB_DBNAME=todo_list

MYSQLDB_USERNAME=$USER

MYSQLDB_PWD=yourPassword
