<?php

$conn = mysqli_connect('localhost','root','','shopcart_db');

if(!$conn) {
    die('connection failed');
    
}
else {
    echo 'connection successful';
}

?>