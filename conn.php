<?php

$server="localhost";
$username="root";
$password="";
$database="sem 6";

$conn=new mysqli($server,$username,$password,$database);

if($conn->connect_error)
{
    echo "connection error".$conn->connect_error."";
}
else
{
    return $conn;
}

?>