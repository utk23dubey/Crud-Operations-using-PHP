<html>
<head>
<title>PHP FORM</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div style="height:auto;width:auto;background-color:#FFFAF0;padding:50px">
<label style="text-align:center;align:center;font-size:40px;margin-left:500px" align="center">Registration Page</label>
<br>
<br>
<form action="action1.php" method="post">
<div class="form-group">
    <label for="name">Name:</label>
	<span class="glyphicon glyphicon-user"></span>
    <input type="text" class="form-control" name="name" id="name" required>
  </div>
<div class="form-group">
    <label for="number">Number:</label><i class="glyphicon glyphicon-phone-alt"></i>
    <input type="text/number" class="form-control" name="number" id="number"  required>
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label><i class="glyphicon glyphicon-envelope"></i>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label><i class="glyphicon glyphicon-lock"></i>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <br>
  <br>
  
  <br>
  <br>
  <button type="submit" class="btn btn-success" name="btn-save" style="font-size:30px;margin-left:520px;">Register</button>
  <a href='login.php'>GoToo</a>
</form>
</div>
</body>
</html>
