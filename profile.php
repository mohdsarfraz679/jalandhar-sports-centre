<?php
session_start();
// echo $_SESSION['email'];
// die();
  if(!isset($_SESSION['email'])){
    header('location:admission.php');
  }
// connect to the database  
  $db = mysqli_connect('localhost', 'root', '', 'register');

  $usermailid = $_SESSION['email'];
 
  $qry = "SELECT * FROM user WHERE email='$usermailid'";
  $run = mysqli_query($db,$qry);
  $data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="about.css">
  
  <title>Jalandhar Sports Centre
  </title>
  <style>
    .brand {
      flex: 1 0 auto;
    }
    .btn {
      padding: 4px 12px;
      background: #007bff;
      color: #fff;
      font-weight: bold !important;
      margin: 12px;
      font-size: 13px !important;
    }
    .btn:hover{
      color: #fff;
    }
  </style>
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
            <li><a href="message.php" >Updates</a></li>
            <li><a href="gallary.php" >Gallery</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <section id="g">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="profile2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" >
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
   
    <header class="ScriptHeader">
        <div class="rt-container12">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <h1>My Profile</h1>
                    
                </div>
            </div>
        </div>
    </header>
    
    <section>
        <div class="rt-container12">
              <div class="col-rt-12">
                  <div class="Scriptcontent12">
    <div class="student-profile py-4">
      <div class="container12">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-header1 bg-transparent text-center">
                <img class="profile_img" src="img/<?php echo $data['profile_img'];?>" alt="student dp">
                <h3><?php echo $data['username'];?></h3>
              </div>
              <div class="card-body">
              
                <p class="mb-0">
                  <strong class="pr-1">
                    Student ID:
                  </strong>
                  <?php echo $data['id'];?>
                </p>
                <p class="mb-0">
                  <strong class="pr-1">Contact:</strong>
                  <?php echo $data['mobile'];?>
                </p>
                <p class="mb-0">
                  <strong class="pr-1">Email:</strong>
                  <?php echo $data['email'];?>
                </p>
                
              </div>
            </div>
            <div>
              <a class="btn" href="login.php">Logout</a>
              <button class="btn" onclick="window.print()">Print</button>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
              </div>
              <div class="card-body pt-0">
                <table class="table table-bordered">
                  
                  <tr>
                    <th width="30%">Academic Year	</th>
                    <td width="2%">:</td>
                    <td><?php echo $data['academic_year'];?></td>
                  </tr>
                  <tr>
                    <th width="30%">Gender</th>
                    <td width="2%">:</td>
                    <td><?php echo $data['gender'];?></td>
                  </tr>
                  <tr>
                    <th width="30%">Age</th>
                    <td width="2%">:</td>
                    <td><?php echo $data['age'];?></td>
                  </tr>
                  <tr>
                    <th width="30%">City</th>
                    <td width="2%">:</td>
                    <td><?php echo $data['city'];?></td>
                  </tr>
                </table>
              </div>
            </div>
              <div style="height: 26px"></div>
            <div class="card shadow-sm">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
              </div>
              <div class="card-body pt-0">
                  <p><?php echo $data['otherinfo'];?></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
     </section>
    
  </section>

  
  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <h2>Connect with us</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/pg/jalandhardistricttennisacademy/posts/?ref=page_internal"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/jalandhar_sports_centre/"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        
      
        
      </div>
     </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>