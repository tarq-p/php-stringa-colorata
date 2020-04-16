<?php
    // $password = 'Boolean';

    $password = $_GET['password'];

    if ($password == 'Boolean') {
            echo "<h1 style='color:green'>Password Corretta</h1>";
    } else {
            echo "<h1 style='color:red'>Password Non Corretta</h1>";
    }
?>
