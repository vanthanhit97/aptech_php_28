<?php
    $dsn = 'mysql:host=localhost;dbname=baitapphp';
    $username = 'root';
    $password = '';
    // $con = null;
    // $con = mysqli_connect($dsn,$username,$password,"Login system");
    $con = mysqli_connect("localhost","root","","baitapphp");
    if(mysqli_connect_errno()){
        echo "Fail to connect to MySql".mysqli_connect_error();
    }
   
?>