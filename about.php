<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                    <li class="nav-item active"><a class="nav-link text-danger" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="menu.php">MENU</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="book-a-table.php">BOOK A TABLE</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="review.php">REVIEWS</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="contactus.php">CONTACT US</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center ms-4">
                <a class="nav-link text-danger" href="cart.html">Cart<i class="" style="margin-left: 15px; "></i></a>
                <a href="cart.html" class="text-danger position-relative" style="text-decoration: none;">
                    <i class="fas fa-shopping-cart" style="font-size: 24px;"></i>
                </a>
            </div>
        </nav>
    </div>

    <div id="about" class="container mt-4 pt-5 ps-5 me-3">
        <div class="row gap-5">
            <div class="col-md-5">
                <div class="card shadow-lg border-0;">
                    <img src="pexels-photo-1267320.webp" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h4 class="card-title text-danger text-center">ABOUT OUR RESTAURANT</h4>
                        <p class="card-text text-black text-center">
                            Our restaurant is a culinary haven where flavors, tradition, and hospitality come together. We strive to offer delicious dishes crafted from the finest ingredients, creating an unforgettable dining experience 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg border-0;">
                    <img src="pexels-photo-4113900.jpeg" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h1 class="card-title text-danger text-center">FRESH INGREDIENTS</h1>
                        <p class="card-text text-black text-center">
                            We use only the freshest and highest-quality ingredients to prepare our dishes, ensuring a delightful and healthy dining experience for all of our customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg border-0;">
                    <img src="pexels-photo-2878708.jpeg" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h1 class="card-title text-danger text-center">EXCEPTIONAL SERVICE</h1>
                        <p class="card-text text-black text-center">
                            Our team is dedicated to providing exceptional service, making sure every guest feels welcome and leaves with a memorable experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg border-0;">
                    <img src="a-image-of-indian-family-having-dinner-together-at-home-in-the-evening-india-on-bokeh-background-generative-ai-photo.jpg" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h1 class="card-title text-danger text-center">AMBIANCE & COMFORT</h1>
                        <p class="card-text text-black text-center">
                            Enjoy a warm and inviting atmosphere where you can relax and indulge in an exquisite dining experience, whether alone, with family, or with friends.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3 mb-2">
        <a href="index.php" class="btn btn-danger">Back to Home</a>
    </div>
</body>
</html>
