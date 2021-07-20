<?php

require 'db.connection.php';

$adminId=$_GET['aid'];

$sql = "DELETE FROM `administrator` WHERE `adminid`='$adminId'";

$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('Record deleted from database !');
        window.location.replace('../manage_admins.php');</script>";
}else{
    echo "<script>alert('Faild to delete record from database !');
        window.location.replace('../manage_admins.php');</script>";
}

$conn->close();
?>
