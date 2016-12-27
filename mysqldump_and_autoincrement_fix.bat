@ECHO OFF
SET hr=%time:~0,2%
IF %hr% lss 10 SET hr=0%hr:~1,1%
 
Set TODAY=%date:~4,2%-%date:~7,2%-%date:~10,4%-%hr%%time:~3,2%%time:~6,2%%time:~9,2%

ECHO.
 
rem http://www.wikihow.com/Send-Sql-Queries-to-Mysql-from-the-Command-Line
rem utf sorunu http://makandracards.com/makandra/595-dumping-and-importing-from-to-mysql-in-an-utf-8-safe-way
rem backup icin http://webcheatsheet.com/sql/mysql_backup_restore.php
color 2
ECHO -----------------------mysql database delete and create database ---------------------------
ECHO.
"D:\EasyPHP-DevServer\binaries\mysql\bin\mysql.exe" --user=root --password= --default-character-set=utf8  application -e "DROP DATABASE application;CREATE DATABASE `application` /*!40100 COLLATE 'utf8_general_ci' */;"

color 3
ECHO ---------------------- database restore ------------------------- 
"D:\EasyPHP-DevServer\binaries\mysql\bin\mysql.exe" --user=root --password= --default-character-set=utf8  application  < app.sql

rem "D:\EasyPHP-DevServer-14.1VC11\binaries\mysql\bin\mysqldump.exe" --user=root --password=123456 --skip-opt application > diger/%TODAY%.sql"

color 5
ECHO ----------------------auto increment fix------------------------- 
php -f autoincrement/index.php -- -s run
rem D:\xampp\php\php.exe -f index.php -- -d run


color 4
echo -------------will done, happy coding-------------------------------
PAUSE
