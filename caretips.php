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

        <!-- Care tips -->
        <section id="caretips">
            <div class="row my-5">
            <div class="col-lg-5 mx-auto">
                <h2 class="fw-bold fs-2 pb-3">General care tips</h2>
                <ol class="carelist fs-5 lh-lg">
                    <li>Choose plants based on your light</li>
                    <li>Pick plants that work with your schedule</li>
                    <li>Be mindful when watering</li>
                    <li>Know when to skip the fertilizer</li>
                    <li>Raise humidity levels when needed</li>
                    <li>Always keep temperatures stable</li>
                    <li>Don't be scared to repot</li>
                    <li>Shop from a reliable source</li>
                </ol>
                <h2 class="fw-bold fs-2 py-3">Categories</h2>
              <ol class="carelist fs-5 lh-lg">
                <li><a href="flowercare.html" class="text-decoration-none link-success">Flowering plants</a></li>
                <li><a href="veggiecare.html" class="text-decoration-none link-success">Vegetable plants</a></li>
                <li><a href="cacticare.html" class="text-decoration-none link-success">Cacti and succulents</a></li>
                <li><a href="bonsaicare.html" class="text-decoration-none link-success">Bonsai</a></li>
                <li><a href="crotoncare.html" class="text-decoration-none link-success">Crotons</a></li>
               </ol>
            </div>
                <div class="col-lg-4 mx-auto mt-5">
                    <img src="./images/plantcare.jpg" class="w-75" alt="plant being potted">
             </div>
            </div>

          
        </section>

       <!-- Footer -->

 <?php include_once('includes/footer.php'); ?>
   
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>