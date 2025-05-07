<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container fixed-top">
        <nav class="navbar navbar-expand-lg navbar-white bg-white display-7">
          <a class="navbar-brand text-danger display-6" style="font-size:30px" href="#">RESTAURANTS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


<section class="bg-light py-3 py-md-5 mt-5">
  <div class="container">
      <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h2 class="mb-4 display-5 text-center text-danger">Contact</h2>
              <p class="text-secondary mb-5 text-center">The best way to contact us is to use our contact form below.
                  Please fill out all of the required fields and we will get back to you as soon as possible.</p>
              <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
          </div>
      </div>
      <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9">
              <div class="bg-white border rounded shadow-sm overflow-hidden">
                  <form id="contactForm">
                      <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                          <div class="col-12">
                              <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="fullname" name="fullname" required>
                          </div>
                          <div class="col-12 col-md-12">
                              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                              <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <div class="col-12">
                              <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                          </div>
                          <div class="col-12">
                              <div class="d-grid">
                                  <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>

<script>
  document.getElementById("contactForm").addEventListener("submit", function(event) {
      event.preventDefault();
      const fullName = document.getElementById("fullname").value;
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;
      
      if (!fullName || !email || !message) {
          alert("Please fill in all required fields.");
          return;
      }
      
      alert("Message sent successfully!");
      this.reset();
  });
</script>
</body>
</html>