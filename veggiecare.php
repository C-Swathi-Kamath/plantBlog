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
      <h2 class="ms-5 fw-bold pb-4">Care tips for vegetable plants</h2>
      <p class="mx-5">
        You get lots of fresh vegetables, herbs, and fruit when you grow vegetable plants.
        You also know where they came from and what went into them, giving you peace of mind that you are not ingesting
        harmful chemicals.
      </p>
      <ul class="mx-5 list-unstyled veggie-list">
        <li class="mb-2">Add mulch around them to keep the soil cool</li>
        <li class="mb-2">Water regularly if you want produce</li>
        <li class="mb-2">Don't drench the entire plant</li>
        <li class="mb-2">Make it a point to pull weeds </li>
        <li class="mb-2">Fertilize as much as your plant varieties need</li>
        <li class="mb-2">Pull out the dead leaves</li>
        <li class="mb-2">Check your garden weekly for signs of pests or illness</li>
        <li class="mb-2">Plants, like tomatoes, will need a stake in the ground and some twine to tie them up</li>
        <li class="mb-2">Prune properly</li>
        <li class="mb-2">When your garden begins to produce, be sure to harvest it promptly</li>
      </ul>

      <p class="my-5 ms-5"><a href="https://morningchores.com/vegetable-garden-care/" class="link-success">Source:
          Morning chores</a></p>
    </div>
    <div class="col-lg-6 my-5 mx-auto">
      <img src="images/care/veggie.jpg" class="w-75 mx-5 ps-4" alt="vegetable plant">
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