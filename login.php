<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
    <meta charsret="utf-8"> 
    <meta name="viewprot" contet="width-device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" scr="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
<div class="container">
  <h4 class="text-center">Login Form</h4>
  <form action="login-proses.php" method="POST">
    <hr>
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password :</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" name="login" class="btn btn-primary">Login</button>
  </form>
</div>
</body>
</html>