<?php 

	include("includes/db.php");
	include("functions.php");
  $id = $_SESSION['id'];
	$query = "select * from user where id = '$id' limit 1";
  $result = mysqli_query($db,$query);
  $user_data = mysqli_fetch_assoc($result);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Necessary meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rooted</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/sprout.ico" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet" />
  <!-- Font awesome (for icons) -->
  <script src="https://kit.fontawesome.com/4e7f5f554e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Custom External CSS -->
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include_once('includes/navbar.php'); ?>


  <!-- Signup -->
  <section id="signup" class="pb-4">
    <div class="row">
      <div class="col-lg-6 col-md-6 mt-3 px-5 ms-5">
        <h2 class="fs-2 fw-bold mb-5 ms-5 ps-4">Create a new account</h2>
        <form name="user" action="signup1.php" method="POST">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="signup-input form-control" name="name" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" class="signup-input form-control" name="email" placeholder="Email address" required>
          </div>
          <!-- <div class="mb-3">
            <label for="select">Gender</label>
            <select class="signup-input form-select" id="select">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="floatingInput">Date of birth</label>
            <input type="date" class="signup-input form-control" id="dob" placeholder="Date of birth">
          </div> -->
          <div class="mb-3">
            <label for="floatingPassword">Password</label>
            <input type="password" class="signup-input form-control" name="password" placeholder="Password" required>
          </div>
          <!-- <div class="mb-3">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="signup-input form-control" name="cpassword" placeholder="Confirm Password"
              required>
          </div> -->
          <div class="signup-buttons ms-5 ps-5 mt-2">
            <button type="submit" class="btn btn-success btn-lg ms-5 me-3">Signup</button>
            <button type="button" onclick="location.href ='login.php'"
              class="btn btn-outline-success btn-lg">Login</button>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!-- Footer -->

  <footer id="footer">
    <div class="container-fluid">
      <a href="https://www.facebook.com/" class="link-dark"><i class="social-icon fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/" class="link-dark"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/?hl=en" class="link-dark"><i class="social-icon fab fa-instagram"></i></a>
      <a href="https://mail.google.com/" class="link-dark"><i class="social-icon fas fa-envelope"></i></a>
      <p class="footer-para">Made with 💚 in Nitte</p>
      <p>© Copyright 2022 Rooted</p>
    </div>
  </footer>



  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>