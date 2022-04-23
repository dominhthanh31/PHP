<?php
    function getPost($key, $special = "'"){
        $value = '';
        if(isset($_POST[$key])){
            $value = $_POST[$key];

            $value = str_replace($special, "\\". $special, $value);
        }

        return $value;
    }