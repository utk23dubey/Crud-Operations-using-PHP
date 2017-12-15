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
                        }
                    }
                }
 echo $name;
 echo $number;
 echo $gender;               
 echo $email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="updateaftervalues.php?id=<?php echo $id; ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <input type="text/number" name="number" class="form-control" value="<?php echo $number; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label>gender</label>
                            <input type="radio" name="gender" value="male" <?php echo ($gender=='male')?'checked':''?>>male
                            <input type="radio" name="gender" value="female" <?php echo ($gender=='female')?'checked':''?>>female

                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="welcome.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>