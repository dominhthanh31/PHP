<?php
require_once('dbhelper.php');

$id = $_GET['id'];

$sql = "delete from book where id = $id";
execute($sql);

header('Location: books.php');