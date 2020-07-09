# projTodoList
start2imp third project

# Works on Linux: 

git clone https://github.com/oleksii-suvorov/projTodoList.git;

cd projTodoList/;

sudo chmod +x autorun.sh;

./autorun.sh;

insert a couple of times your local password, then db password and db username, then open browser: localhost:8080


1. Or you may want separately only create tables using files SQLTableCreate.sh and tables.sql on your local machine (already made in autorun.sh script), so just install mySQL locally and type commands:

sudo chmod +x ./SQLTableCreate.sh;
./SQLTableCreate.sh

Insert your user password and here we are, table should be created.


2. Also optionally you may want fill out .env file to establish connection with your remote db (local db has been already established by autorun.sh script) like here:


MYSQLDB_HOST=mysql:localhost or MYSQLDB_HOST=mysql:host=sql7.blablabla.com (in case if DB is remote)

MYSQLDB_PORT=3306 (by default local port usually is 3306, in case you use remote db you should check it's port number)

MYSQLDB_DBNAME=todos (in table.sql it will be named todos)

MYSQLDB_USERNAME=$USER (your user local or remote)

MYSQLDB_PWD=yourPassword (database password)
