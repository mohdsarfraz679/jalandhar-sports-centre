<?php session_start()?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="message.css">
  <link rel="stylesheet" href="admission.css">
  
  <title>Jalandhar Sports Centre
  </title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index2.php"><h1><span>J</span>alandhar<span> S</span>ports<span> C</span>entre</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href= ></a></li>
            <li><a href="admission.php" >Admission</a></li>
            <li><a href="message.php" >Updates</a></li>
            <li><a href="gallary.php" >Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
	 
<section id="form">
<div class="row">
  <div class="col-75">
    <div class="container2">
      <form method="post" action="login.php">
      	<?php include('errors.php'); ?>
        <div class="input-group">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Username</label>
            <input type="text" id="fname" name="username" value="<?php echo $username; ?>" placeholder="Enter username">
			<label for="password"><i class="fa fa-lock"></i> Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password">

			<button type="submit" class="btn" name="login_user">Login</button>
			</div>
		</div>
  	<p>
  		Not yet a member? <a href="admission.php">Sign up</a>
  	</p>
  </form>
  </div>
  </div>
</div>
</section>
  <script src="./app.js"></script>

</body>
</html>