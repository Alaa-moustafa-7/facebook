<?php
// connection to database
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "facebook";

    $connection = mysqli_connect($servername, $username, $password, $database);

// check if connected or not
    function confirm(){
        global $connection;
        if(!$connection){
            die("ERROR CONNECTION");
        }
    }

// query excution
    function query($sql){
        global $connection;
        return mysqli_query($connection, $sql);
    }

// fetching data from db
    function fetching($result){
        global $connection;
        return mysqli_fetch_array($result);
    }



?>