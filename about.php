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

  <!-- About -->
  <section class="about">
    <div class="row">
      <div class="col-lg-6 my-5 mx-auto ps-5">
        <h2 class="ms-5 fs-1 fw-bold pb-4">Our Story</h2>
        <p class="mx-5 fs-5 lh-base">
          Rooted was born out of an urge to convert a tiny hostel room into a
          private little plant sanctuary. Should have been easy, there was no
          dearth of content on the internet that explained "how to". But
          somehow there still remained a lot of unanswered questions.
        </p>
        <p class="mx-5 fs-5 lh-base">
          Here, I share my tips and findings, house plant experiments and
          green interior design ideas, from a variety of sources. Behind
          everything that we do, our motivation remains a fierce commitment to
          spreading the message of green living, the heart and soul of Rooted!
        </p>
      </div>
      <div class="col-lg-6 my-5 mx-auto">
        <img src="./images/aboutimage.jpg" class="about-image ms-5 ps-4" alt="leaves" />
      </div>
    </div>
  </section>

  <section class="about">
    <div class="row">
      <div class="col-lg-6 my-5 mx-auto ps-5">
        <img src="./images/aboutimage2.jpg" class="about-image ms-5 ps-4" alt="plants in a pot" />
      </div>
      <div class="col-lg-6 my-5 mx-auto">
        <h2 class="me-5 fs-1 fw-bold pb-4">What you'll get on Rooted</h2>
        <p class="me-5 fs-5 lh-base">
          Tons of stuff, from ideas to products, but nothing that's not
          beautiful. There is something for everyone who wants to make a
          difference to the way they live
        </p>
        <p class="me-5 fs-5 lh-base">Specifically, you can look for</p>
        <ul class="me-5 fs-5 lh-base">
          <li>Gardening 'why' and 'how to'</li>
          <li>Decor ideas</li>
          <li>Exclusive gardening products</li>
          <li>Advice on sustainable living</li>
        </ul>
        <p class="me-5 fs-5 lh-base">
          Most importantly, you'll find a way to connect with a community of
          like- minded people
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <?php include_once('includes/footer.php'); ?>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>