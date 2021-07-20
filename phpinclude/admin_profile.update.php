<?php

require 'db.connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$un = $_POST['username'];
$pw = $_POST['password'];

$sql_update = "UPDATE `administrator` SET `name`='$name',`username`='$un',`password`='$pw',`email`='$email' WHERE adminid = '$id'";

if(!($name=='' || $email=='' || $un=='' || $pw=='')){

    $update_r = mysqli_query($conn, $sql_update);

    if($update_r){
        echo "<script>
            alert('Informations updated !');
            window.history.back();
        </script>";
        
    }else{
        echo "<script>
            alert('Error: Informations not update !');
            window.history.back();
        </script>";
    }
}
else{
    echo "<script>
            window.history.back();
        </script>";
}


$conn->close();
?>
