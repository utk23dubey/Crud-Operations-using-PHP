<?php
// Include config file
require('db.php');
extract($_POST);
echo $name;
$id=trim($_GET["id"]);
 $sql = "UPDATE employee SET name='".$name."',number='".$number."',gender='".$gender."',email='".$email."' WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location: welcome.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>