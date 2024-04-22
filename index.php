<?php
	include "config.php";
	session_start();
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$sql = "select * from `admin_login` where `unm`='$unm' and `pwd`='$pwd'";
		$res = mysqli_query($con,$sql);
		$count  = mysqli_num_rows($res);
		if($count == 1)
		{
			$_SESSION['admin_name'] = $unm;
			header("location:home.php");
		}
		else
		{
			echo "Invalid!";
		}
	}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BLUE BUS | Log in</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>BLUE</b>BUS</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="txtunm" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txtpwd" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" value="Log In" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
