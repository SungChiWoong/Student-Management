DROP DATABASE IF EXISTS classDB;
DROP USER IF EXISTS id201800268@localhost;
create user id201800268@localhost identified WITH mysql_native_password by 'pw201800268';
create database classDB;
grant all privileges on classDB.* to id201800268@localhost with grant option;
commit;