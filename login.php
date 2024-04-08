<!DOCTYPE html>
<html lang="en">

<head>
    <!-- this form use style.css file as stylesheet logindb as database connection -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Admin Login</h2>
        <h3>Smart Pathfinder</h3>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
        Don't have an account click <a href=" adminregister.php">Register.</a>
    </form>
</body>

</html>



<!-- php code for the login database connection -->
<?php
include("Database.php"); // Assuming Database.php is the correct path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email) || empty($password)) {
        echo "Please fill out all fields.";
    } else {
        // Connect to the database using the Database class
        $conn = Database::connect();

        // Prepare statement for security reasons (to prevent SQL injection)
        $sql = "SELECT * FROM adminregister WHERE email = :email";
        $stmt = $conn->prepare($sql);

        // Bind the email parameter
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

        // Fetch the user
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password against the hashed password in the database
            if (password_verify($password, $user['password'])) {
                echo "Login Success";
                header("Location: homepage.php");
                exit;
            } else {
                echo "Login failed, wrong credentials.";
            }
        } else {
            echo "Login failed, wrong credentials.";
        }
    }
    // No need to close the connection explicitly when using PDO
    // The connection will be closed automatically when the script ends
}

?>