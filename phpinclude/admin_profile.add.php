<?php

require 'db.connection.php';

$nm = $_POST['nm'];
$gen = $_POST['gen'];
$nic = $_POST['nic'];
$type = $_POST['type'];
$un = $_POST['un'];
$pw = $_POST['pw'];
$em = $_POST['em'];

$sql_add = "INSERT INTO `administrator`(`name`, `nic`, `type`, `username`, `password`, `email`, `gender`) VALUES ('$nm', '$nic', '$type', '$un', '$pw', '$em', '$gen')";

if(!($nm=='' || $gen=='' || $nic=='' || $type=='' || $un=='' || $pw=='' || $em=='')){

    $update_r = mysqli_query($conn, $sql_add);

    if($update_r){
        echo "<script>
            //alert('Account added !');
            window.location.replace('../manage_admins.php');
        </script>";
        
    }else{
        echo "<script>
            //alert('Error: Account not added !');
            window.location.replace('../manage_admins.php');
        </script>";
    }
}
else{
    echo "<script>
            window.location.replace('../manage_admins.php');
        </script>";
}


$conn->close();
?>