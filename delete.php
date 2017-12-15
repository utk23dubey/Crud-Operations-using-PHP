<?php
require('db.php');
$id=trim($_GET["id"]);
// Process delete operation after confirmation
$sql = "DELETE from employee where id='".$id."'";
    if ($conn->query($sql) === TRUE) {
    echo "record deletd successfully";
    header("Location: welcome.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>