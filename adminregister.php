<!DOCTYPE html>
<html lang="en">

<head>
    <!-- this form use style.css file as stylesheet logindb as database connection -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="registration-form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="passwordconfirm">Repeat Your Password</label>
                <input type="password" id="passwordconfirm" name="passwordconfirm" required>
            </div>
            <button type="submit" class="btn-register">Register</button>
            <p class="login-link">Already have an account? <a href="login.php">Log In</a></p>
        </form>
    </section>
</body>

</html>

<?php
include("Database.php"); // Use the Database class for PDO connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordconfirm = filter_input(INPUT_POST, "passwordconfirm", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($name) || empty($email) || empty($password) || empty($passwordconfirm)) {
        echo "Please fill out all fields.";
    } else {
        if ($password !== $passwordconfirm) {
            echo "Password and confirm password do not match.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            try {
                // Connect to the database using the Database class
                $conn = Database::connect();

                // Prepare the SQL statement using PDO
                $sql = "INSERT INTO adminregister (name, email, password) VALUES (:name, :email, :password)";
                $stmt = $conn->prepare($sql);

                // Bind the parameters
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashed_password);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "Registration Success";
                } else {
                    echo "Registration failed. Please try again later.";
                }
            } catch (PDOException $e) {
                // Handle the PDO exception
                echo "Error: " . $e->getMessage();
            }
            // No need to explicitly close the connection; PDO handles it at the end of the script
        }
    }
}

?>