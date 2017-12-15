<?php
	require_once("db.php");
	
	
	
   extract($_POST);
   echo $name;
   echo $number;
   echo $email;
    echo $gender;
	$sql = "INSERT INTO employee(name, number, email, comment,gender) VALUES ('$name','$number','$email','$comment','$gender')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: welcome.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>