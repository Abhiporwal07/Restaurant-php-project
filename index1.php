<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register User</title>
    <style>
        /* Background Image Styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('pexels-fotios-photos-776538.jpg'); /* Path to your restaurant image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Dark Overlay to Improve Readability */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Semi-transparent overlay */
        }

        /* Form Container */
        .container {
            position: relative;
            background: rgba(217, 196, 164, 0.96); /* Slight transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
            z-index: 1;
        }

        h2 {
            color: #343a40;
        }

        /* Smaller Input Fields */
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 80%; /* Consistent width */
            padding: 6px; /* Smaller padding */
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px; /* Smaller font */
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Submit Button */
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Back Button */
        .back-button {
            display: inline-block;
            padding: 6px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            width: 80%; /* Matches input fields */
            text-align: center;
            transition: 0.3s ease;
            font-size: 14px;
        }

        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <!-- Overlay for Better Readability -->
    <div class="overlay"></div>

    <div class="container">
        <h2>Sign Up</h2>
        <form action="store.php" method="post">
            <label>User ID (Auto-generated):</label>
            <input type="text" name="id" disabled placeholder="Auto-assigned"><br>
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Register">
        </form>

        <!-- Back Button -->
        <!-- <a href="index.php" class="back-button">Back to Home</a> -->
    </div>

</body>
</html>
