<?php
//The connection object

$conn = new mysqli("localhost", "root", "", "prez_db");
//$conn = new mysqli("sql2.freemysqlhosting.net", "sql2341947", "bU4!cB1!", "sql2341947");

$alt = "<script>alert('Cannot connect to the database ! Please check your connection'); window.location.reload();</script>";

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error.$alt);
}

?>