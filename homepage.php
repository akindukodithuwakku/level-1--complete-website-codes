<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css"> <!-- Link to your custom CSS file -->


</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-center" href="#">
                <img src="photos\logo.png" width="30" height="30" class="d-inline-block align-center " alt="">
                Smart Path Finder
            </a>
            <a class="navbar-link" onclick="confirmLogout()">
                <div class="logout_button">
                    <img src="photos\logout.webp" width="30" height="30" class="d-inline-block align-right">
                </div>
                Log Out
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">How to configure</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maps</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <!-- user registration card-->
                <div class="card text-center">
                    <div class="card-img-container">
                        <img class="card-img-top" src="photos\create user.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visitors Registration</h5>
                        <p class="card-text">Register a new user to the system.</p>
                        <a href="registration.php" class="btn btn-primary">Start </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- user registration card-->
                <div class="card text-center">
                    <div class="card-img-container">
                        <img class="card-img-top" src="photos\users.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visitors History</h5>
                        <p class="card-text">Check the history of the visitors.</p>
                        <a href="user data.php" class="btn btn-primary">Start </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light text-center">
        <div class="container">
            <span class="text-muted">Copyright © 2024 Smart Path Finder. All rights reserved.</span>
        </div>
    </footer>

</body>

<script>
    function confirmLogout() {
        var logoutConfirm = confirm("Are you sure you want to log out?");
        if (logoutConfirm) {
            // If confirmed, redirect to the logout.php script
            window.location.href = "logout.php";
        }
    }
</script>

</html>