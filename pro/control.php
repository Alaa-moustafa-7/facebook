<?php

    session_start();
    if($_SESSION['username']){
        echo "Welcom " . $_SESSION['username'] . 'Admin And Be Have';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';


    }else{

        echo "not can redircted ";

    }