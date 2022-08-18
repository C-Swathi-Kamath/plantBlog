  
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet">
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

  <!-- Login -->
  <section id="login">
    <div class="col-lg-6 mt-5 px-5 ms-5 position-absolute start-50">
      <h2 class="fs-2 fw-bold mb-5 ms-5 ps-5 mt-5 pt-5">Welcome back!</h2>
      <form name="user" method="POST" action="login1.php">
        <div class="mb-3">
          <label for="email">Email address</label>
          <input type="email" class="signup-input form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="mb-3">
          <label for="floatingPassword">Password</label>
          <input type="password" class="signup-input form-control" name="password" placeholder="Password" required>
        </div>
        <div class="signup-buttons ms-5 ps-5 mt-5">
          <button type="submit" class="btn btn-success btn-lg mt-1 ms-5 me-3">Login</button>
          <button type="button" onclick="location.href ='signup.php'"
            class="btn btn-outline-success btn-lg mt-1">Signup</button>
        </div>
      </form>
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