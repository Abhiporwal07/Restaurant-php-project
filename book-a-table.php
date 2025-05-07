<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container fixed-top bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-danger" href="#" style="font-size:30px;">RESTAURANTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-danger" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="menu.php">MENU</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="book-a-table.php">BOOK A TABLE</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="review.php">REVIEWS</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="contactus.php">CONTACT US</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-5 pt-5">
        <h1 class="text-center text-danger mb-4">BOOK A TABLE</h1>
        <form class="bg-light p-4 rounded shadow-sm">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" id="firstName" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" id="lastName" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="reservationDate" class="form-label">Reservation Date</label>
                <input type="date" id="reservationDate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" id="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="people" class="form-label">No of Persons</label>
                <input type="number" id="people" class="form-control">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="confirmationCheck">
                <label class="form-check-label" for="confirmationCheck">Are you sure?</label>
            </div>
            <button id="bookTableBtn" type="button" class="btn btn-danger w-100 ">BOOK A TABLE</button>
        </form>
    </div>

    <script>
        document.getElementById("bookTableBtn").addEventListener("click", function () {
            if (localStorage.getItem("tableBooked") === "true") {
                alert("You have already booked a table!");
                return;
            }
            let firstName = document.getElementById("firstName").value.trim();
            let lastName = document.getElementById("lastName").value.trim();
            let reservationDate = document.getElementById("reservationDate").value;
            let address = document.getElementById("address").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let people = document.getElementById("people").value.trim();
            let confirmationCheck = document.getElementById("confirmationCheck").checked;

            if (!firstName || !lastName || !reservationDate || !address || !email || !phone || !people || !confirmationCheck) {
                alert("Please fill in all the details and confirm your booking!");
                return;
            }
            localStorage.setItem("tableBooked", "true");
            alert("Your table has been successfully booked!");
        });
    </script>
</body>
</html> -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $reservationDate = $_POST['reservationDate'];
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $people = htmlspecialchars($_POST['people']);

    // Validate phone number (must be exactly 10 digits)
    if (!preg_match('/^\d{10}$/', $phone)) {
        echo "<style>
            .back-button {
                margin-top: 20px;
                display: inline-block;
                padding: 10px 20px;
                background-color: #dc3545;
                color: white;
                border: none;
                border-radius: 5px;
                text-decoration: none;
            }
            .back-button:hover {
                background-color: #c82333;
            }
        </style>";
        echo "<div style='text-align:center; margin-top: 50px;'>";
        echo "<p style='color:red; font-size:18px;'>Invalid contact number. Please enter exactly 10 digits.</p>";
        echo "<a href='javascript:history.back()' class='back-button'>Back</a>";
        echo "</div>";
        exit;
    }

    $tableNo = rand(1, 20);  
    $time = date("H:i", strtotime($reservationDate)); 

    echo "<style>
        .confirmation-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
            text-align: center;
        }
        .confirmation-container h1 {
            color: #dc3545;
        }
        .confirmation-container .alert {
            font-size: 16px;
            line-height: 1.6;
            text-align: left;
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #c82333;
        }
    </style>";

    echo "<div class='container mt-5 pt-5'>";
    echo "<div class='confirmation-container'>";
    echo "<h1 class='text-center text-danger mb-4'>Booking Confirmed</h1>";
    echo "<div class='alert alert-success'>";
    echo "<p><strong>Table Number:</strong> $tableNo</p>";
    echo "<p><strong>Name:</strong> $firstName $lastName</p>";
    echo "<p><strong>Reservation Date:</strong> $reservationDate at $time</p>";
    echo "<p><strong>Contact No:</strong> $phone</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>No of Persons:</strong> $people</p>";
    echo "</div>";
    echo "<a href='javascript:history.back()' class='back-button'>Back</a>";
    echo "</div>";
    echo "</div>";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book a Table</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container fixed-top bg-white shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-danger" href="#" style="font-size:30px;">RESTAURANTS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-danger" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="about.php">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="menu.php">MENU</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="book-a-table.php">BOOK A TABLE</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="review.php">REVIEWS</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="contactus.php">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container mt-5 pt-5">
            <h1 class="text-center text-danger mb-4">BOOK A TABLE</h1>
            <form class="bg-light p-4 rounded shadow-sm" action="" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="reservationDate" class="form-label">Reservation Date</label>
                    <input type="date" id="reservationDate" name="reservationDate" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="people" class="form-label">No of Persons</label>
                    <input type="number" id="people" name="people" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="confirmationCheck" required>
                    <label class="form-check-label" for="confirmationCheck">Are you sure?</label>
                </div>
                <button type="submit" class="btn btn-danger w-100">BOOK A TABLE</button>    
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>

