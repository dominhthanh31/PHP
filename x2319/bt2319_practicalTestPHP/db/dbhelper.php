<?php
    require_once('config.php');

    function execute($sql){
        $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_set_charset($connect, 'utf8');

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }

    function executeResult($sql, $isSingle = false){
        $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_set_charset($connect, 'utf8');

        $result = mysqli_query($connect, $sql);

        $data = [];
        if($isSingle){
            $data = mysqli_fetch_array($result, 1);
        }else{
            while(($row = mysqli_fetch_array($result, 1)) != null){
                $data[] = $row;
            }
        }

        mysqli_close($connect);

        return $data;
    }