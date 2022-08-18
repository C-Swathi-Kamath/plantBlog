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

  <!-- Care -->
  <div class="row">
    <div class="col-lg-6 my-5 mx-auto ps-5">
      <h2 class="ms-5 fw-bold pb-4">Care tips for Crotons</h2>
      <p class="mx-5">
        Crotons have some of the boldest and brightest foliage around. Often
        vividly marked with bright yellow, orange, and red, these exotic
        plants have a reputation for being high-maintenance due to their
        tropical nature. But once they acclimate to their new home, they're
        quite low-care.
      </p>
      <ul class="mx-5 list-unstyled croton-list">
        <li class="mb-2">Your Croton will do best in a bright spot</li>
        <li class="mb-2">
          It needs lots of light (if possible 4-6 hrs. Per day) to produce all
          those colorful leaves
        </li>
        <li class="mb-2">Water when the top 25%-50% of the soil is dry</li>
        <li class="mb-2">Crotons appreciate a generous amount of humidity</li>
        <li class="mb-2">
          Your Croton prefers temperatures between 60-70 degrees
        </li>
        <li class="mb-2">
          Use a general houseplant fertilizer once in early spring, once in
          early summer, and again in mid-summer
        </li>
        <li class="mb-2">
          Generally, the Croton does not like to be moved, so a few falling
          leaves within a week doesn't mean you are doing anything wrong.
        </li>
        <li class="mb-2">
          Keep your Croton away from drafts and cold areas like a windowpane
          in the winter
        </li>
        <li class="mb-2">Prune properly</li>
      </ul>

      <p class="my-5 ms-5">
        <a href="https://bloomscape.com/plant-care-guide/croton/#g1" class="link-success">Source: Bloomscape</a>
      </p>
    </div>
    <div class="col-lg-6 my-5 mx-auto">
      <img src="images/care/croton.jpg" class="w-75 mx-5 ps-4" alt="croton" />
    </div>
  </div>

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