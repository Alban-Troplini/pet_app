<?php

    $db = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'pet_app';

    $connect = mysqli_connect($db, $user, $password, $db_name);

    if (!$connect) {
        die('Could not connect: ' . mysqli_errno($connect));
    }

    function escape($string){

        global $connect;
        return mysqli_real_escape_string($connect, $string);
    }

    function query($query) {

        global $connect;

        return mysqli_query($connect, $query);

    }

    function fetch_array($result){

        global $connect;

        return mysqli_fetch_array($result);
    }


    function confirm($result){

        global $connect;

        if(!$result) {

        die( mysqli_error($connect));

         }
    }
?>