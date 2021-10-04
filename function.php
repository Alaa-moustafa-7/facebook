<?php

    function redirect($location){
        return header("url=${location}");
}

// function for login user
//include("conn.php");
function login_user(){
             
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log']) ){
        $error = [];   // array for checken error
        $email1     = $_POST["email"];
        $password1  = $_POST["password"];

        // if empty email
        if(empty($email1)){
            $error[] = "<h4 style='color:red'> Sory Email Is Empty && Sory Password Is Empty</h4>";
        }

        if(empty($password1)){
            $error[] = "";
        }

        // if empty exist
        if(!empty($error)){
            foreach($error as $err){
                echo $err;
            }
        }else{
            // query for email and password checken
            $sql = "SELECT * FROM face WHERE email = '".$email1."' AND  '".$password1."' ";

            // confirm function that exsit in db.php for checking connection
            confirm($sql);

            // confirm function exist in db.php
            $result = query($sql);
            $rows = fetching($result);

            //check if password equal to column password
            $db_password = $rows['password'];
            if($password1 == $db_password){
                // redirect to index1.php page
                $_SESSION = $_POST['password'];
                header("location: http://localhost/project/pro/index1.php");
            }else{
                
                echo "<h4 style='color:red; font-weight:bold'>Sory Password Or email not correct<h4>";
            
        }
    }
    }
}





?>