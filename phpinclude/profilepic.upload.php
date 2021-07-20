<?php

require 'db.connection.php';

if(isset($_POST['uploadBtn'])){

    $id = $_POST['id'];
    $file_dir = "images/admin/apminprofileimg/";
    $file_loc = $_FILES["file"]["tmp_name"];
    $target_file = $_FILES["file"]["name"];
    $target_file_path = "../".$file_dir.$target_file;
    $store_path = $file_dir.$target_file;

    $sql = "UPDATE `administrator` SET `imgpath`='$store_path' WHERE `adminid`='$id'";

    copy($file_loc, $target_file_path);

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Successfuly Uploaded !');window.close();</script>";
    } else {
        echo "<script>alert('Error: Failed to upload !');window.close();</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Picture</title>

    <link rel="stylesheet" type="text/css" href="../styles/admin/master.css">

    <script type="text/javascript" src="js/admin/masterScript.js"></script>

    <style>
        #cpp{
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-50%);
        }
        .manage-btn{
            margin: 0;
            width: 200px;
            height: 40px;
            border: none;
            font-size: 16px;
            color: #fff;
            border-radius: 50px;
            background: #c23616;
            transition: 0.2s;
        }

        .manage-btn:hover{
            background: #1e272e;
        }
    </style>

</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" id="cpp">
        <img src="../images/user/logo.png" alt="" style="width:200px;margin-bottom:10px;"> <br>
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" hidden="hidden">
        <input type="file" id="fileS" name="file"  hidden="hidden">
        <button type="button" id="cBtn" class="Logout-btn" style="width:200px;margin-left:0;">Choose Profile Picture</button>
        <p id="cText">No Selected File</p>
        <input type="submit" name="uploadBtn" value="Upload" class="manage-btn">
    </form>

    <script>
        const fileSbtn = document.getElementById("fileS");
        const cBtnBtn = document.getElementById("cBtn");
        const cTextTxt = document.getElementById("cText");

        cBtnBtn.addEventListener("click", function(){
            fileSbtn.click();
        });

        fileSbtn.addEventListener("change", function(){
            if(fileSbtn.value){
                cTextTxt.innerHTML = fileSbtn.value;
            }else{
                cTextTxt.innerHTML = "No Selected File";
            }
        });
    </script>
</body>
</html>