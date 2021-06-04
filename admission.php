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
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="form">
<div class="row">
  <div class="col-75">
    <div class="container2">
      <form method="post" action="admission.php">
      <?php include('errors.php'); ?>
        <div class="input-group">
          <div class="col-50">
            <h2>Fill the details</h2>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="username" value="<?php echo $username; ?>" placeholder="Enter username">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter email">
            <label for="pwd"><i class="fa fa-lock"></i> Password</label>
            <input type="password" id="password_1" name="password_1" placeholder="Enter password">
            <label for="pwd"><i class="fa fa-lock"></i> Confirm Password</label>
            <input type="password" id="password_2" name="password_2" placeholder="Confirm password">
            <label for="fname"><i class="fa fa-user"></i> Academic year</label>
            <input type="text" id="fname" name="academic_year" value="<?php echo $academicyear; ?>" placeholder="Enter academic year">
            <label for="fname"><i class="fa fa-user"></i> Age</label>
            <input type="text" id="fname" name="age" value="<?php echo $age; ?>" placeholder="Enter your age">
            <label for="fname"><i class="fa fa-user"></i> Gender</label>
            <input type="text" id="fname" name="gender" value="<?php echo $gender; ?>" placeholder="Male/Female/Prefer not to say">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $address; ?>" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo $city; ?>" placeholder="City">
            <label for="state">State</label>
            <input type="text" id="state" name="state" value="<?php echo $state; ?>" placeholder="state">
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>" placeholder="Zip">
            <label for="cname">Name of School</label>
            <input type="text" id="cname" name="schoolname" value="<?php echo $school_name; ?>" placeholder="School name">
            <label for="ccnum">Date of birth</label>
            <input type="date" id="ccnum" name="dob" value="<?php echo $dob; ?>" placeholder="yyyy-mm-dd">
            <label for="expmonth">Mobile Number</label>
            <input type="text" id="expmonth" name="mobile" value="<?php echo $mobile; ?>" placeholder="Enter mobile">
            <label for="expyear">Aadhar Number</label>
            <input type="text" id="expyear" name="aadhar" value="<?php echo $aadhar; ?>" placeholder="Enter adhaar number">
            <label for="expyear">Other Info</label>
            <input type="text" id="expyear" name="otherinfo" value="<?php echo $otherinfo; ?>" placeholder="Say someting about yourself....">
        </div>

        <button type="submit" value="Register" name="reg_user" class="btn">Register</button>

        <p style="text-align:center">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

      </form>
    </div>
</div>
      
</section>
<section id="footer">
    <div class="footer container">
      <h2>Connect with us</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/pg/jalandhardistricttennisacademy/posts/?ref=page_internal" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/jalandhar_sports_centre/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        
      
        
      </div>
     </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>