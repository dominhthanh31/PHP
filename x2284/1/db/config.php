<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'gift_db');

const SQL_CREATE_DB = "create database if not exists ".DATABASE;
const SQL_CREATE_TABLE_USER = 'create table if not exists users (
			id int primary key auto_increment,
			fullname varchar(50),
			email varchar(150),
			password varchar(32),
			token varchar(64)
		)';
const SQL_CREATE_TABLE_GIFT = 'create table if not exists gift (
			id int primary key auto_increment,
			title varchar(150),
			thumbnail varchar(500),
			content text,
			price float,
			created_at datetime,
			updated_at datetime,
			user_id int references users (id)
		)';