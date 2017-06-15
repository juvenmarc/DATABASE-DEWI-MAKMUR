<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../DM.png" />
  <title>Login | Dewi Makmur</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<?php include 'connection.php';
$host  = $_SERVER['HTTP_HOST']; ?>
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1>Login Form</h1>
            <div><input type="text" class="form-control" name="username" placeholder="Username" required="" /></div>
            <div><input type="password" class="form-control" name="password" placeholder="Password" required="" /></div>
            <div><button type="submit" class="btn btn-default submit" name="submit" href="index.html">Log in</button>
						<a class="reset_pass" href="#">Forgot Password?</a></div>
						<div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-shopping-bag"></i> Dewi Makmur</h1>
                <p>©2017 All Rights Reserved. CV Dewi Makmur. UGM</p>
              </div>
            </div>
          </form>
				<?php if(isset($_POST['submit'])){
					if (empty($_POST['username']) || empty($_POST['password'])) {
						echo "<script type='text/javascript'>alert('Username atau Password belum diisi');</script>";
					} else {
						$id_user = $_POST['username'];
						$password = md5($_POST['password']);
						$sql_login = "SELECT * FROM `db_user` WHERE `id_user`= '$id_user' AND `password` = '$password'";
						$result = $conn->query($sql_login);	//untuk mengisi data_pmhn
						if ($result->num_rows>0) {
							session_start();
							$_SESSION['user_login']=$id_user; // Initializing Session
							header("Location: dashboard.php?page=januari"); // Redirecting To Other Page
						} else {
							echo "<script type='text/javascript'>alert('Username atau Password salah');</script>";
						}
					}
					$conn->close();
				}?>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div><input type="text" class="form-control" placeholder="Username" required="" /></div>
            <div><input type="email" class="form-control" placeholder="Email" required="" /></div>
            <div><input type="password" class="form-control" placeholder="Password" required="" /></div>
            <div><a class="btn btn-default submit" href="index.html">Submit</a></div>
            <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>
							<div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>
