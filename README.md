# projTodoList
start2imp third project

1. Works on Linux, just type commands: 

git clone https://github.com/oleksii-suvorov/projTodoList.git;
cd projTodoList/;
sudo chmod +x autorun.sh;
./autorun.sh;

insert few passwords, including db password and username, then open browser: localhost:8080


2. Or you may want separately use files SQLTableCreate.sh and tables.sql to create tables on your local machine (already made in autorun.sh script), so just install mySQL locally and type commands:

sudo chmod +x ./SQLTableCreate.sh;
./SQLTableCreate.sh

Insert your user password and here we are, table should be created.


2. Also you optionally can fill .env file like this example to establish connection with your db (already made in autorun.sh script):


MYSQLDB_HOST=mysql:localhost or MYSQLDB_HOST=mysql:host=sql7.blablabla.com (in case if DB is remote)

MYSQLDB_PORT=3306 (by default local port usually is 3306, in case you use remote db you should check it's port number)

MYSQLDB_DBNAME=todos (in table.sql it will be named todos)

MYSQLDB_USERNAME=$USER (your user local or remote)

MYSQLDB_PWD=yourPassword (database password)
