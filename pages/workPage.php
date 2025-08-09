<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>კონტაქტები</title>
    <link href="../css/bootsrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
        <style>
        .video-section {
  background: linear-gradient(to bottom right, #fdfdfd, #ffffff);
}

.video-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.video-card:hover {
  transform: scale(1.02);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}
video {
  max-height: 300px;
  object-fit: cover;
  background-color: #000;
}

    </style>

</head>
<body>
     <?php include("../navbar.php"); ?>

<section class="video-section py-5">
  <div class="container">
    <div class="row" id="video-gallery">

      <!-- Example video card – add more like this manually -->

      <!-- Add more video cards here -->

    </div>
  </div>
</section>



<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Cottage Home</h5>
        <p>ნატურალური ხის სახლები, მყუდრო დიზაინი და ეკოლოგიურად სუფთა გადაწყვეტილებები უკეთესი მომავლისთვის</p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">სერვისები</h5>
        <p><a href="/ka/service/" class="text-white" style="text-decoration: none;">სახლის პროექტები</a></p>
        <p><a href="/ka/service/construction-wooden-house" class="text-white" style="text-decoration: none;">ხის სახლები</a></p>
        <p><a href="/ka/service/audio" class="text-white" style="text-decoration: none;">ფინური კოტეჯები</a></p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">საჭირო ლინკები</h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">Your Account</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">FAQ</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Privacy Policy</a></p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">კონტაქტი</h5>
        <p><i class="fas fa-home mr-3"></i> თბილისი, საქართველო</p>
        <p><i class="fas fa-envelope mr-3"></i> bidzohouse@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> +995 555 555 555</p>
      </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p>© 2025 All Rights Reserved by <a href="#" style="text-decoration: none;"><strong class="text-warning">Your Company</strong></a></p>
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">
          <a href="#" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-4"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white me-4"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="../js-files/bootstrap.js"></script>
<script src="../js-files/getVodeos.js"></script>
</body>
</html>