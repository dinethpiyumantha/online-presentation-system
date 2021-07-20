<?php

require 'phpinclude/db.connection.php';

if(isset($_POST['btnLogin'])){
	echo "<p style='color:#fff';";
    $un = $_POST['un'];
	$pw = $_POST['pw'];

	$sql = "SELECT * FROM administrator WHERE username = '$un'";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);
	$db_pw = $record['password'];

	

    if(!($db_pw==$pw) || ($un=='') || ($pw=='')){
        echo "
</p><script>window.location.replace('administrator.php');</script>";
	 } 
}
else{
	echo "<script>window.location.replace('administrator.php');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin System</title>

	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
	<link rel="stylesheet" type="text/css" href="styles/admin/master.css">

	<link rel="shortcut icon" href="images/favicon.png">
	
	<script type="text/javascript" src="js/admin/masterScript.js"></script>
	<script type="text/javascript" src="js/admin/admin_profile.js"></script>
</head>
<body>
	<header>
		<h1>PREZ Online Presentation System</h1>
	</header>
		
	<nav>
		<a class="active" href="admin_profile.html">Admin Profile</a>
		<a href="manage_users.html">Manage User Accounts</a>
		<a href="feedbacks.html">Feedback and Reply</a>
		<a href="#">Analytics</a>
		<div class="nav-btn-bg"></div>
		<div class="nav-btn-bg-active-admin"></div>
		<button class="Logout-btn" onclick="window.location.replace('administrator.php');">Logout</button>
	</nav>

	<article>
		<form action="phpinclude/admin_profile.update.php" method="POST" onsubmit="">
			<h2>CHANGE ADMIN PROFILE</h2>
			<label for="">Admin ID</label><br>
			<input type="text" name="id" value="<?php echo ($record['adminid']); ?>" id="name" class="input-usertext" style="background:#ecf0f1; border:1px;" readonly><br>
			<label for="">Full Name</label><br>
			<input type="text" name="name" value="<?php echo ($record['name']); ?>" id="name" class="input-usertext" placeholder="Full Name"><br>
			<label for="">Email</label><br>
			<input type="email" name="email" value="<?php echo ($record['email']); ?>" id="email" class="input-usertext" placeholder="Email Address"><br>
			<label for="">Username</label><br>
			<input type="text" name="username" value="<?php echo ($record['username']); ?>" id="uname" class="input-usertext" placeholder="Username"><br>
			<label for="">Password</label><br>
			<input type="password" name="password" value="<?php echo ($record['password']); ?>" id="pwd" class="input-usertext" placeholder="Password"><br>
			<input type="submit"  onclick="checkFormToCange();" name="submit" value="Save Changes" id="submit" class="Logout-btn" style="margin-left: 0; width: 150px;">
			<br><br><br><br><br>
		</form>

		
		<div class="uname">
			<div class="profilePic">
				<img src="<?php echo ($record['imgpath']); ?>" width="200px" alt="">
			</div>
			<br>
			<a href="phpinclude/profilepic.upload.php?id=<?php echo $record['adminid'];?>" target="popup" onclick="window.open('phpinclude/profilepic.upload.php?id=<?php echo $record['adminid'];?>'); return false;" class="change-profile-btn">
				<span >Change Profile Picture</span>
			</a><br>
			<h2 style="text-transform:uppercase;"><?php echo ($record['name']); ?></h2>
			<h4>@<?php echo ($record['username']); ?></h3>
			<h4 style="text-transform:uppercase;color:#3c40c6;"><?php echo ($record['type']); ?></h4><br>
			<button class="manage-btn" style="visibility:<?php if(!($record['type']=='manager')){echo 'hidden;';}?>;" onclick="showManegeAdmin();">Manage Admin Accounts</button>
		</div>

	</article>

	<div class="manage-admin-bg" id="manageAdminBg"></div>
	<div class="manage-admin" id="manageAdmin">
		<iframe src="manage_admins.php" height="100%" width="100%"></iframe>
		<button class="Logout-btn" style="margin:0px 0px 0px 91%; z-index:1030; top: 10px; position: absolute;" onclick="closeManegeAdmin();">Close</button>
	</div>

	<footer>
		&copy 2020 by MLB_01.02_10 Assignment Group
	</footer>
</body>
</html>


