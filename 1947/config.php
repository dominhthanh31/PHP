<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', '1947');

const SQL_CREATE_DATABASE = 'create database if not exists'.DATABASE;

const SQL_CREATE_TABLE_ProductList = 'create table if not exists productlist(
    id int primary key auto_increment,
    namelist varchar(50)
)';

const SQL_CREATE_TABLE_Product = 'create table if not exists product(
    id int primary key auto_increment,
    title varchar(100),
    price float,
    picture varchar(500),
    content varchar(100),
    created_at datetime,
    updated_at datetime,
    id_productlist references productlist(id)
)';