<?php
    session_start();
    echo "Hello Engineer " . $_SESSION['username'] . "Welcome You" . ' <br>';

    echo "Hello mangement your Sport" . $_SESSION['sport'] . 'good';

    echo "<a href='page3.php'>page3 </a>" . '<br>';


?>