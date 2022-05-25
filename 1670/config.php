<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'bt1670');

const SQL_CREATE_DATABASE = 'create database if not exists '.DATABASE;

const SQL_CREATE_TABLE_USER = 'create table if not exists users (
	id int primary key auto_increment,
	username varchar(50),
	email varchar(150),
	fullname varchar(50),
	phone_number varchar(20),
	password varchar(32)
)';

const SQL_CREATE_TABLE_BOOK = 'create table if not exists book (
	id int primary key auto_increment,
	title varchar(250),
	author varchar(50),
	price float,
	nsx varchar(50)
)';