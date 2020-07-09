# projTodoList
start2imp third project

1. You may want to use files SQLTableCreate.sh and tables.sql to create tables on your local machine, just install mySQL locally and type commands:

sudo chmod +x ./SQLTableCreate.sh;

./SQLTableCreate.sh

Insert your user password and here we are, table should be created.


2. Also you need to fill .env file like this example to establish connection with your db:


MYSQLDB_HOST=mysql:localhost or MYSQLDB_HOST=mysql:host=sql7.blablabla.com (in case if DB is remote)

MYSQLDB_PORT=3306 (by default local port usually is 3306, in case you use remote db you should check it's port number)

MYSQLDB_DBNAME=todos (in table.sql it will be named todos)

MYSQLDB_USERNAME=$USER (your user local or remote)

MYSQLDB_PWD=yourPassword (database password)
