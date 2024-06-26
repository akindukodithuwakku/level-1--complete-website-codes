<?php
$Write = "<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <style>
        html {
            font-family: Arial;
            display: inline-block;
            margin: 0px auto;
            text-align: center;
        }

        ul.topnav {
            list-style-type: none;
            margin: auto;
            padding: 0;
            overflow: hidden;
            background-color: darkgray;
            width: 100%;
        }

        ul.topnav li {
            float: left;
        }

        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.topnav li a:hover:not(.active) {
            background-color: #3e8e41;
        }

        ul.topnav li a.active {
            background-color: #333;
        }

        ul.topnav li.right {
            float: right;
        }

        @media screen and (max-width: 700px) {
            ul.topnav {
                width: 100%;
            }

            ul.topnav li {
                float: none;
                display: block;
                text-align: left;
            }

            ul.topnav li.right {
                float: none;
            }

            ul.topnav li a {
                padding: 12px;
            }
        }

        .table {
            margin: auto;
            width: 90%;
        }

        thead {
            color: #FFFFFF;
        }
    </style>

    <title>Registered User Data </title>
</head>

<body>

    <ul class="topnav">
        <li><a href="homepage.php">Home</a></li>
        <li><a class="active" href="user data.php">User Data</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="read tag.php">Read Tag ID</a></li>
    </ul>
    <br>
    <div class="container">
        <div class="row">
            <h3>User Data Table</h3>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered" style="width: 100%; padding-bottom:5px;">
                <thead>
                    <tr bgcolor="darkgray" color="#FFFFFF">
                        <th>Name</th>
                        <th>ID</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Location</th>
                        <th>Purpose</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'database.php';
                    $pdo = Database::connect();
                    $sql = 'SELECT * FROM visitor_table ORDER BY name ASC';
                    foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['gender'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['mobile'] . '</td>';
                        echo '<td>' . $row['location'] . '</td>';
                        echo '<td>' . $row['purpose'] . '</td>';
                        echo '<td><a class="btn btn-success" href="user data edit page.php?id=' . $row['id'] . '">Edit</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="user data delete page.php?id=' . $row['id'] . '">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div> <!-- /container -->

    <!-- Footer -->
    <footer class="footer bg-light text-center">
        <div class="container">
            <span class="text-muted">Copyright © 2024 Smart Path Finder. All rights reserved.</span>
        </div>
    </footer>

</body>

</html>