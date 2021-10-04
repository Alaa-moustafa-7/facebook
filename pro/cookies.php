<?php

    // setcookie("Alaa", "test", time() + 3600, "/");
    // if(count($_COOKIE) > 0){
    //     echo "Good The Cookie Enable";
    // }else{
    //     echo "Sorry The Cookie";
    // }

    // setcookie("alaa", "twitter", time() + 86400, "/", "Alaa.web.com", true, true);

    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";

    /* function */

    // function sayHello($name, $age){
    //     echo "Hello be " . $name . " hi"; 
    //     echo " age " . $age;
    //     }

    // sayHello("Alaa",30);

    // function year($start, $end){
    //     echo "<select>";
    //     for($year = $start; $year <= $end; $year++ ){
    //         echo "<option value='$year'>" . $year . "</option>";
    //     }
    //     echo "</option>";
    // }
    // echo "<h1>alaa</h1>";
    // year("1990", "2020");
    // echo "<h2>alaa</h2>";
    // year("1990", "2020");

    // function sayAge( $age ){
    //     $result = $age * 8 + 50;
    //     return $result;
    // }
    // var_dump( sayAge(3) );

    echo $_SERVER['SERVER_PORT'];

    

?>
    <a href="<?php echo $_SERVER['PHP_SELF'];?>">Chlick</a>;

    