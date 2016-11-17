# Natnael Mengistu Gary Coltrane Brian Parker
# Version 1.0
# Database for Limbo Web Application

drop database  if exists limbo_db;
CREATE DATABASE IF NOT EXISTS limbo_db;
use limbo_db;
CREATE TABLE IF NOT EXISTS users(
user_id int not null auto_increment primary key,
first_name varchar(20) not null,
last_name varchar(40) not null,
email varchar(60) unique not null,
pass char(40) not null,
reg_date TIMESTAMP not null default CURRENT_TIMESTAMP    
);
INSERT INTO users( first_name, last_name, email, pass)
VALUES ("admin", "admin", "admin", SHA("admin"));
create table if not exists stuff(
id int auto_increment primary key,
location_id int not null,
description text,
create_date datetime not null,
update_date datetime not null,
room text,
owner text,
finder text,
status set("found", "lost", "claimed")
);

create table if not exists locations(
id int primary key auto_increment,
    create_date TIMESTAMP not null default CURRENT_TIMESTAMP,
    update_date TIMESTAMP not null,
    name text not null

);

INSERT into locations(name)
values("Lowell Thomas"),
	  ("Hancock"),
	  ("Donelly"),
	  ("Champagnat Hall");
INSERT INTO stuff(location_id, description, room, owner, finder, create_date, update_date, status)
VALUES(1,"iPhone 8", "Lobby", "", "Luke Smitts", "16:10:10 12:16:40", "00:00:00", "found"),
	  (2,"Cubs hat", "310",  "Duke Charles", "", "16:10:10 12:16:30", "00:00:00", "lost"),
	  (3,"Marist Id", "105",  "Muhammad Kanaaf", "", "16:9:8 09:12:26", "00:00:00", "lost"),
	  (4,"Boxing Gloves", "777",  "Tyson Jones", "", "16:10:05 02:16:50", "00:00:00", "lost"),
	  (5,"Mac Laptop", "Lobby",  "Duke Charles", "Luke Smitts", "16:10:11 13:19:02", "00:00:00", "found"),
	 (6,"Boxing Gloves", "777",  "Tyson Jones", "Gary Coltrane ", "16:10:02 12:16:20", "00:00:00", "found");


