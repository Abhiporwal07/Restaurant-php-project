<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script defer src="menu.js"></script>
    <style>
    .quantity {
        width: 40px;
        padding: 2px;
        font-size: 16px;
        border: 2px solid #dc3545;
        border-radius: 8px;
        text-align: center;
        outline: none;
        transition: all 0.3s ease;
        margin-left: 5px;
    }

    .quantity:focus {
        border-color: #a71d2a;
        box-shadow: 0 0 8px rgba(220, 53, 69, 0.5);
    }

    .price {
        font-weight: bold;
        font-size: 20px;
        color: #dc3545;
    }

    .card-body > div {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
        gap: 110px;
    }
</style>

</head>
<body>
  <div class="container fixed-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-danger" href="#" style="font-size:30px;">RESTAURANTS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse text-white justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav text-white">
              <li class="nav-item active">
                <a class="nav-link text-danger" href="index.php">HOME</a>
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
    </a>
  </div>
</nav>
</div>
 <div class="container">
    <h1 class="text-center text-danger mt-5 pt-4">MENU</h1>
    <div class="row">

        <!-- Burger Item -->
        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="burger.jpeg" alt="Burger">
                <div class="card-body text-center">
                    <h5 class="card-title">BURGER</h5>
                    <div>
                        <span class="price">$5</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <!-- Pizza Item -->
        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="pizza.jpeg" alt="Pizza">
                <div class="card-body text-center">
                    <h5 class="card-title">PIZZA</h5>
                    <div>
                        <span class="price">$10</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>
        
        <!-- Chilli Potato Item -->
        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="chilli potato.jpeg" alt="Chilli Potato">
                <div class="card-body text-center">
                    <h5 class="card-title">CHILLI POTATO</h5>
                    <div>
                        <span class="price">$8</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <!-- Noodles Item -->
        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="noodels 1.jpeg" alt="Noodles">
                <div class="card-body text-center">
                    <h5 class="card-title">NOODLES</h5>
                    <div>
                        <span class="price">$6</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="roll.jpeg" alt="roll">
                <div class="card-body text-center">
                    <h5 class="card-title">VEG ROLL</h5>
                    <div>
                        <span class="price">$6</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="sandwich.jpeg" alt="sandwich">
                <div class="card-body text-center">
                    <h5 class="card-title">SANDWICH</h5>
                    <div>
                        <span class="price">$6</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="cholle bhature.jpeg" alt="chole bhature">
                <div class="card-body text-center">
                    <h5 class="card-title">CHOLE BHATURE</h5>
                    <div>
                        <span class="price">$6</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mt-4">
                <img class="card-img-top" src="dosa.jpeg" alt="dosa">
                <div class="card-body text-center">
                    <h5 class="card-title">DOSA</h5>
                    <div>
                        <span class="price">$6</span>
                        <input type="number" class="quantity" value="1" min="1">
                    </div>
                    <button class="btn btn-danger add-to-cart mt-2">ADD</button>
                </div>
            </div>
        </div>

    </div>
    <div class="text-center mb-2 mt-3">
        <a href="cart.php" class="btn btn-danger">Go to Cart</a>
        <a href="index.php" class="btn btn-danger">Back to Home</a>
    </div>
</div>


