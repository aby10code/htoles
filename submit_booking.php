<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotelName = $_POST["hotelName"];
    $name = $_POST["name"];
    $checkInDate = $_POST["checkin"];
    $checkOutDate = $_POST["checkout"];
    $guests = $_POST["guests"];
    $email = $_POST["email"];

    $sql = "INSERT INTO bookings (hotel_name, full_name, check_in_date, check_out_date, guests, email)
            VALUES ('$hotelName', '$name', '$checkInDate', '$checkOutDate', '$guests', '$email')";

    if ($conn->query($sql) === TRUE) {
        $message = "Booking successful!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS file -->
    <style>
        /* Custom styles */
        .navbar {
            background-color: #4e3629; /* Brown color for navbar */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* White text color for navbar */
        }
        .navbar-nav .nav-item.active .nav-link {
            color: #ffd700 !important; /* Gold color for active link */
        }
        .container {
            background-color: #ffffff; /* White background for container */
            border-radius: 8px; /* Rounded corners */
            padding: 2rem; /* Padding for content */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h1 {
            color: #4e3629; /* Brown color for heading */
        }
        p {
            color: #495057; /* Dark gray color for text */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Mini Hotels</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <!-- Add more nav items as needed -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Booking Confirmation</h1>
        <?php
        if (isset($message) && $message == "Booking successful!") {
            echo "<p>Thank you, $name, for booking a room at $hotelName.</p>";
            echo "<p>Booking details:</p>";
            echo "<ul>";
            echo "<li>Email: $email</li>";
            echo "<li>Check-in Date: $checkInDate</li>";
            echo "<li>Check-out Date: $checkOutDate</li>";
            echo "<li>Number of Guests: $guests</li>";
            echo "</ul>";
            echo "<p>We look forward to your stay!</p>";
        } else {
            echo "<p>$message</p>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
