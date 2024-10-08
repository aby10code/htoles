<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ritz-Carlton - Hotel Details</title>
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
        .card {
            max-width: 600px; /* Set a maximum width for the card */
            margin: auto; /* Center the card within its column */
        }
        .card-body {
            padding: 1.5rem; /* Padding inside the card */
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

    <div class="container mt-7">
        <div class="card">
            <img src="desgine/dada.jpg" class="card-img-top" alt="The Ritz-Carlton">
            <div class="card-body">
                <h1 class="card-title">The Ritz-Carlton</h1>
                <p class="card-text"><strong>Price:</strong> $500 per night</p>
                <p class="card-text">Luxury hotel with upscale amenities.</p>
                <p class="card-text">Experience the epitome of luxury at The Ritz-Carlton. With exceptional service, elegant rooms, and world-class amenities, our hotel offers a refined experience for discerning travelers. Enjoy gourmet dining, a luxurious spa, and breathtaking views, all within the heart of the city.</p>
                <a href="booking.php" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
