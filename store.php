<?php
include 'db.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    // Retrieve the last inserted ID
    $user_id = $stmt->insert_id;
    echo "<div class='container'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<p>Your User ID is: <strong>" . $user_id . "</strong></p>";
} else {
    echo "<div class='container'>";
    echo "<h2>Error!</h2>";
    echo "<p>" . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>

<!-- Back Button with CSS -->
<div class="button-container">
    <a href="new-index.php" class="back-button">GO to ALL INDIA RESTAURENTS</a>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }

    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        width: 300px;
        text-align: center;
    }

    .button-container {
        margin-top: 15px;
    }

    .back-button {
        display: inline-block;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s ease;
    }

    .back-button:hover {
        background-color: #0056b3;
    }
</style>
