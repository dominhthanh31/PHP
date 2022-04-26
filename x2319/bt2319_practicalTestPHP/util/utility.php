<?php

    function getGet($key, $specical = "'"){
        $value = '';
        if(!empty($_GET[$key])){
            $value = $_GET[$key];

            $value = str_replace($specical, "\\".$specical, $value);
        }

        return $value;
    }