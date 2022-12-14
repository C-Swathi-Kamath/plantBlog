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
      <h2 class="ms-5 fw-bold pb-4">Care tips for flowering plants</h2>
      <p class="mx-5">
        Flower plants need top-notch care to grow properly.
        Some of these plants are quite sensitive to changes in weather conditions and can wither and die in a short
        period of time under harsh conditions.
      </p>
      <ul class="mx-5 list-unstyled flower-list">
        <li class="mb-2">Water your flowers regularly</li>
        <li class="mb-2">Apply appropriate fertilizers</li>
        <li class="mb-2">Remove weeds from your flower garden</li>
        <li class="mb-2">Mulch your flowers</li>
        <li class="mb-2">Provide them with enough sunlight</li>
        <li class="mb-2">Prevent and control pests</li>
        <li class="mb-2">Prevent and control diseases</li>
        <li class="mb-2">Pinch and prune your plants</li>
        <li class="mb-2">Replace the soil</li>
        <li class="mb-2">Use clean tools in your flower garden</li>
      </ul>

      <p class="my-5 ms-5"><a href="https://dengarden.com/gardening/How-to-Take-Care-of-your-Flower-Plants"
          class="link-success">Source: DenGarden </a></p>
    </div>
    <div class="col-lg-6 my-5 mx-auto">
      <img src="images/care/flowers.jpg" class="w-75 mx-5 ps-4" alt="flowers">
    </div>
  </div>

  <!-- Footer -->

  <?php include_once('includes/footer.php'); ?>



  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>