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
  <link rel="stylesheet" href="updatepro.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  
  

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
            <li><a href="message.php" >Message</a></li>
            <li><a href="gallary.php" >Gallery</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <section id="g">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    <img class="profile_img" src="img/<?php echo $data['profile_img'];?>" alt="student dp">
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $data['username'];?></h4>
                    <p class="mb-0"><?php echo $data['email'];?></p>
                    
                    <div class="mt-2">
                      <!-- <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button> -->

                      <label for="img">Change photo</label>
                      <input type="file" id="img" name="img" accept="image/*">

                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    
                  </div>
                </div>
              </div>
              <!-- <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul> -->
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" method="post" action="updatepro.php">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                              <input class="form-control" type="text" name="username" placeholder="Ener full name or username" value="" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Age</label>
                              <input class="form-control" type="text/int" name="age" placeholder="age" value="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Address</label>
                              <input class="form-control" type="text" name="address" placeholder="address">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Skills</label>
                              <textarea class="form-control" rows="5" name="skills" placeholder="e.g., web, full stack, C, C++" required></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>Other Information</label>
                          <textarea class="form-control" rows="5" name="othinfo" placeholder="My Bio"></textarea>
                        </div>
                      </div>
                    </div>
                  
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" name="password" placeholder="Enter your current password" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" name="password_1" placeholder="Enter your new password" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" name="password_2" placeholder="Confirm your new password" required></div>
                          </div>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit" name="reg_user">Save Changes</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
    </div>

  </div>
</div>
</div>
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