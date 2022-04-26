database: bt2319

table: 
    - books (
        id int primary key auto_increment,
        authorid int default 0,
        title varchar(55),
        ISBN varchar(25),
        pub_year smallint(6) default 0,
        available tinyint(4)
    )