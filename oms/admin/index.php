<?php

session_start();

include('includes/config.php');

if (isset($_POST['login'])) {

    // Getting POST values
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    // SQL Query for checking login details
    $sql = "SELECT id, AdminEmail, Password
            FROM admin
            WHERE AdminEmail = :email
            AND Password = :password";

    $query = $dbh->prepare($sql);

    // Binding values
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_OBJ);

    // If login details verified
    if ($query->rowCount() > 0) {

        // Fetching ID for session
        foreach ($results as $result) {

            $_SESSION['adminsession'] = $result->id;
        }

        echo "<script type='text/javascript'>
                document.location ='dashboard.php';
              </script>";

    } else {

        // For invalid details
        echo "<script>
                alert('Invalid Email or Password');
              </script>";
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Orphanage Management System | Admin Login</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>


<body>

    <div class="container">

        <div class="row">

            <div class="col-md-12" align="center">

                <h3>OMS | Admin Panel</h3>

            </div>

        </div>


        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">
                            Please Sign In
                        </h3>

                    </div>


                    <div class="panel-body">

                        <form role="form" method="post">

                            <fieldset>


                                <!-- Admin Email -->

                                <div class="form-group">

                                    <input class="form-control" placeholder="Admin Email" name="email" type="email"
                                        autofocus required>

                                </div>


                                <!-- Password -->

                                <div class="form-group">

                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                        required>

                                </div>


                                <!-- Forgot Password -->

                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="forgot-password.php">

                                    <i class="fa fa-warning mr-5"></i>

                                    Forgot Password

                                </a>


                                <hr>


                                <!-- Submit Button -->

                                <input type="submit" name="login" class="btn btn-lg btn-success btn-block"
                                    value="Submit">

                            </fieldset>

                        </form>


                        <hr>


                        <div align="center">

                            <a href="../index.php" class="btn btn-primary">
                                Back to Home Page
                            </a>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- jQuery -->

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>