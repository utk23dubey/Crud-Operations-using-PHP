<?php
require('db.php');
require('session.php');
$id=trim($_GET['id']);
$sql="SELECT * from employee where id='".$id."'";
if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                             while($row = mysqli_fetch_array($result)){
                            $name=$row['name'];
                            $number=$row['number'];
                            $gender=$row['gender'];
                            $email=$row['email'];
                            $comment=$row['comment'];
                        }
                    }
                }
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<form name="frmUser" method="post" action="">
	<div style="width:500px;">
	<div class="message"></div>
	<div align="right" style="padding-bottom:5px;"></div>
		<table border="1" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
			<tr class="listheader">
			<tr>
			<td>Name</td><td><?php echo $name; ?></td>
            </tr>
            <tr>	
			<td>Number</td><td><?php echo $number; ?></td>
			</tr>
			<tr>
			<td>Email</td><td><?php echo $email; ?></td>
			</tr>
			<tr>
			<td>Gender</td><td><?php echo $gender; ?></td>
			</tr>
			<tr>
			<td>Comment</td><td><?php echo $comment; ?></td>
			</tr>	
			</tr>
	
		</table>
	</form>
</div>
</body></html>