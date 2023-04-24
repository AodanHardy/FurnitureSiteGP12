<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href ="css/style.css">
  <title>Home</title>


  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 10px;
      margin-top: 50px;
    }

    .grid-item {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .carousel-item img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  max-height: 400px;
}

  </style>
</head>
<body>
  <?php include 'inc/header.php'; ?>

  <div class="container-fluid">
    <h1 class="text-center">Home page</h1>

    <div class="grid-container">
      <div class="grid-item">
        <p>Column 1 content</p>
      </div>
      <div class="grid-item">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ul>
        
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/tableAndChairs.jpg" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="images/patio_image_2.jpg" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="images/patio_image_1.jpg" alt="Slide 3">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="grid-item">
        <p>Column 3 content</p>
      </div>
    </div>

    <br>
    <br>

  <?php include 'inc/footer.php'; ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
