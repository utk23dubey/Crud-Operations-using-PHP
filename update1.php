<?php
require_once("db.php");

if(count($_POST)>0) {
 $id=$_GET["id"];
	$sql = "UPDATE employee set name'" . $_POST["name"] . "', number='" . $_POST["number"] . "', email='" . $_POST["email"] . "', gender='" . $_POST["gender"] . "' WHERE id='" . $_POST["id"] . "'";
	mysqli_query($conn,$sql);
}
$select_query = "SELECT * FROM employee WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="userName" class="txtField" value="<?php echo $row['name']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" value="<?php echo $row['number']; ?>"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstName" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastName" class="txtField" value="<?php echo $row['gender']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>