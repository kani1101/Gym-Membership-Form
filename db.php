<?php
$conn = mysqli_connect("localhost","root","","gymdb");

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
?>