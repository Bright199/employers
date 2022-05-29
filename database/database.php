<?php
    // $severname = 'localhost';
    // $username = 'username';
    // $password = 'password';

    $connection = mysqli_connect('localhost','root','','employers');
    if(!$connection){
        die('Connection failed: '.mysqli_connect_error());
    }

?>