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
        <h2 class="ms-5 fw-bold pb-4">Care tips for Bonsai</h2>
        <p class="mx-5">
          Bonsai tree care is easier than you might think. Bonsai, which
          literally means “tree in a tray”, is the art of growing artificially
          small trees or shrubs.
        </p>
        <ul class="mx-5 list-unstyled bonsai-list">
          <li class="mb-2">
            Determine whether your bonsai tree is an indoor or outdoor plant
          </li>
          <li class="mb-2">
            water a bonsai plant as soon as the topsoil is dry
          </li>
          <li class="mb-2">
            Use soil that drains water but retains moisture well
          </li>
          <li class="mb-2">
            Most types need quality bonsai fertilizer to survive
          </li>
          <li class="mb-2">
            Fertilize your plants weekly during growing season and monthly
            during the winter
          </li>
          <li class="mb-2">
            Remove roots that have grown too long, but make sure not to cut more
            than a quarter of the roots.
          </li>
          <li class="mb-2">Repot your Bonsai tree</li>
          <li class="mb-2">
            Take out branches that are too thick, along with unhealthy shoots
            and leaves
          </li>
          <li class="mb-2">Prune properly</li>
        </ul>

        <p class="my-5 ms-5">
          <a
            href="https://indoorgardening.com/bonsai-tree-care-tips/"
            class="link-success"
            >Source: Indoor gardening</a
          >
        </p>
      </div>
      <div class="col-lg-6 my-5 mx-auto">
        <img src="images/care/bonsai.jpg" class="w-75 mx-5 ps-4" alt="bonsai" />
      </div>
    </div>

    <!-- Footer -->

    <?php include_once('includes/footer.php'); ?>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
