<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="contact.css">
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
            <li><a href="#" ></a></li>
            <li><a href="admission.php" >Admission</a></li>
            <li><a href="message.php" >Updates</a></li>
            <li><a href="gallary.php" >Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <!-- <li><a href="login.php">Login</li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <div class="container3">
    <form method="post" action="action_page.php">

      <label for="fname">Full Name</label>
      <input type="text" id="fname" name="firstname" placeholder="full name">
  
      <label for="email">Email</label>
      <input type="text" id="lname" name="emailid" placeholder="email id">
  
      <label for="cnumber">Contact Number</label>
      <input type="text" id="lname" name="number" placeholder="phone number">
  
  
      <label for="subject">Message</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit" onload="window.alert('Thank you for contacting us. We will get back to you soon')"> 
  
    </form>
  </div>

	<!--footer section start -->
	
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

<script src="./app.js"></script>

</body>
</html>