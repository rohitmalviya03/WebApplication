<?php
    $host='localhost';
    $username='root';
    $password=12345;
    $dbname = "globalc";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>