<?php

$conn = mysqli_connect('localhost', 'root','', 'BananaMuffinComment');

if(!$conn) {
    die("Connection faild: " .mysqli_connect_error());
}