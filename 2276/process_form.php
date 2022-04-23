<?php
    $fullname = $email = $pwd = "";

    if(!empty($_POST)){
        $fullname = getPost('fullname');
        $email = getPost('email');
        $pwd = getPost('pwd');

        $sql = "insert into student (fullname, email, pwd) values ('$fullname', '$email', '$pwd')";
        execute($sql);

    }
?>