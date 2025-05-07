<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>RESTAURANTS</title>
</head>
<body>
          <div class="container fixed-top">
            <nav class="navbar navbar-expand-lg navbar-white bg-white display-7">
              <a class="navbar-brand text-danger display-6" style="font-size:30px" href="#menu">RESTAURANTS</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse text-white justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav text-white">
                  <li class="nav-item active">
                    <a class="nav-link text-danger" href="#">HOME</a>
                  </li>
                  <a class="nav-link text-danger" href="about.php">ABOUT</a>
                  <a class="nav-link text-danger" href="menu.php">MENU</a>

          <li class="nav-item">
            <a class="nav-link text-danger" href="book-a-table.php">BOOK A TABLE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="review.php">REVIEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="contactus.php">CONTACT US</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center ms-4">
        <a class="nav-link text-danger" href="cart.php">Cart <i class="" style="margin-left: 15px; "></i></a>
        <a href="cart.html" class="text-danger position-relative" style="text-decoration: none;">
          <i class="fas fa-shopping-cart" style="font-size: 24px;"></i>
          <span class="position-absolute top-0 start-100 translate-middle bg-danger">
          </span>
        </a> 
      </div>
    </nav>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="restaurant -3new.jpg" class="d-block w-100" style="height: 500px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>BARBEQUE NATION</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="restaurant 4.jpg" class="d-block w-100" style="height: 500px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>YELLOW CHILLI</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="restaurant 6.jpg" class="d-block w-100" style="height: 500px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>PUNJABI GRILLS</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
<div class="container mt-5">
  <h2 class="text-center text-danger mb-4">🔥 Exclusive Offers & Special Deals 🔥</h2>
  
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <img src="offer img.avif" class="card-img-top" alt="Discount Offer">
        <div class="card-body text-center">
          <h5 class="card-title">Weekend Special</h5>
          <p class="card-text">Enjoy a flat 20% off on all dine-in orders this weekend!</p>
          <a href="book-a-table.php" class="btn btn-danger">Book Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <img src="combo offer img.jpg" class="card-img-top" alt="Combo Offer">
        <div class="card-body text-center">
          <h5 class="card-title">Family Feast Combo</h5>
          <p class="card-text">Order for 4 and get a free dessert of<br> your choice!</p>
          <a href="menu.php" class="btn btn-danger">Order Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-lg border-0">
        <img src="5229.jpg" class="card-img-top" alt="Loyalty Reward">
        <div class="card-body text-center">
          <h5 class="card-title">Contact us</h5>
          <p class="card-text">Contact us for book a table and  <br> for pre orders!</p>
          <a href="contactus.php" class="btn btn-danger">contact us</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <h2 class="text-center text-danger mb-4">🍽️ Why Choose Us? 🍽️</h2>

  <div class="row text-center">
    <div class="col-md-3">
      <i class="fas fa-utensils fa-3x text-danger"></i>
      <h5 class="mt-2">Delicious Cuisine</h5>
      <p>We serve mouth-watering dishes prepared by expert chefs.</p>
    </div>

    <div class="col-md-3">
      <i class="fas fa-star fa-3x text-warning"></i>
      <h5 class="mt-2">Top-Rated Service</h5>
      <p>Our customers love us! Rated 5 stars for exceptional hospitality.</p>
    </div>

    <div class="col-md-3">
      <i class="fas fa-seedling fa-3x text-success"></i>
      <h5 class="mt-2">Fresh Ingredients</h5>
      <p>We use 100% fresh and organic ingredients in every meal.</p>
    </div>

    <div class="col-md-3">
      <i class="fas fa-music fa-3x text-info"></i>
      <h5 class="mt-2">Live Music</h5>
      <p>Enjoy a fine dining experience with live music every weekend.</p>
    </div>
  </div>
</div>
<div class="container mt-5 text-center mb-5">
  <h2 class="text-danger">📩 Get Special Discounts! 📩</h2>
  <p>Subscribe to our newsletter and get exclusive offers directly in your inbox!</p>
    <form class="d-flex justify-content-center">
      <input type="email" class="form-control w-50" placeholder="Enter your email" required id="emailInput">
      <button type="submit" class="btn btn-danger ms-2" onclick="showAlert()">Subscribe</button>
    <script>
      function showAlert() {
        const emailInput = document.getElementById('emailInput');
        alert('you are subscribed: ' + emailInput.value);
      
      }
    </script>
  </form>
</div>
</body>
</html>