<?php

require 'phpinclude/db.connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- Import CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="styles/user/layout.css">
	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
	<link rel="stylesheet" type="text/css" href="styles/user/styling_variables.css">
	<link rel="stylesheet" type="text/css" href="styles/user/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/admin/mAdmins.css">

	<link rel="shortcut icon" href="images/favicon.png">
	
	<script src="js/user/checkout.js"></script>

</head>
<body>
	<header>
		<div class="title-name">
			<img src="images/user/logo.png" alt="" class="logo" id="logo">
			<h2 style="position:absolute; top:20px; left:400px;">Manage Administrator Accounts</h2>
			<button class="manage-btn" style="position:absolute;width:100px;left:70%;top:20px;" onclick="location.reload();">Refresh</button>
		</div>
	</header>

	<nav style="height:10px;"></nav>



	<div class="mrg">
			<table cellpadding="10" class="center1" id="tb" >
				
				<tr bgcolor="#0a3d62">
					<th >Admin ID</th>
					<th>Full Name</th>
					<th>Gender</th>
					<th>NIC</th>
					<th>Type</th>
					<th>Username</th>
					<th>Password</th>
					<th>email</th>
				</tr>

				<tbody id="cont">

					<?php

					$sql = "SELECT * FROM administrator";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row['adminid']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['nic']."</td><td>".$row['type']."</td><td>".$row['username']."</td><td>".$row['password']."</td><td>".$row['email']."</td><td>";
						echo "<a href='phpinclude/admin_profile.delete.php?aid=$row[adminid]' class='button-del'>Remove</a></td></tr>";
					}
					} else {
						echo "0 results";
					}


					?>
					
					<form action="phpinclude/admin_profile.add.php" method="post">
						<tr>
							<td></td>
							<td><input type="text" name="nm" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="gen" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="nic" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="type" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="un" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="pw" id="" style="width:100%;height:30px;"></td>
							<td><input type="text" name="em" id="" style="width:100%;height:30px;"></td>
							<td><input type="submit" value="Add" class="manage-btn" style="font-size:15px;width:75px;"></td>
						</tr>
					</form>
				</tbody>

			</table>
		</div>
	

	<div class="copyright">Copyright &copy; 2020 by MLB_01.02_10</div>
</body>
</html>

<?php

$conn->close();

?>