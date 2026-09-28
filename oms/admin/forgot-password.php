<?php

session_start();

include('includes/config.php');

if (isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $newpassword = md5($_POST['newpassword']);

    // Check Admin Email
    $sql = "SELECT AdminEmail
            FROM admin
            WHERE AdminEmail = :email";

    $query = $dbh->prepare($sql);

    $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() > 0) {

        // Update Password
        $con = "UPDATE admin
                SET Password = :newpassword
                WHERE AdminEmail = :email";

        $chngpwd1 = $dbh->prepare($con);

        $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
        $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);

        $chngpwd1->execute();

        echo "<script>alert('Your Password successfully changed');</script>";

    } else {

        echo "<script>alert('Email ID is invalid');</script>";
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Orphanage Management System | Forgot Password</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">

        function valid() {

            if (
                document.chngpwd.newpassword.value !=
                document.chngpwd.confirmpassword.value
            ) {

                alert("New Password and Confirm Password Field do not match !!");

                document.chngpwd.confirmpassword.focus();

                return false;
            }

            return true;
        }

    </script>

</head>


<body>

    <div class="container">

        <div class="row">

            <div class="col-md-12" align="center">

                <h3>OMS | Forgot Password</h3>

            </div>

        </div>


        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">
                            Recover Your Password
                        </h3>

                    </div>


                    <div class="panel-body">

                        <form role="form" method="post" name="chngpwd" onSubmit="return valid();">

                            <fieldset>


                                <!-- Admin Email -->

                                <div class="form-group">

                                    <input class="form-control" placeholder="Admin Email Address" name="email"
                                        type="email" autofocus required>

                                </div>


                                <!-- New Password -->

                                <div class="form-group">

                                    <input class="form-control" type="password" name="newpassword"
                                        placeholder="New Password" required>

                                </div>


                                <!-- Confirm Password -->

                                <div class="form-group">

                                    <input class="form-control" type="password" name="confirmpassword"
                                        placeholder="Confirm Password" required>

                                </div>


                                <!-- Submit Button -->

                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block"
                                    value="Submit">

                            </fieldset>

                        </form>


                        <hr>


                        <!-- Sign In -->

                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="index.php">

                            <i class="fa fa-user text-muted mr-5"></i>

                            Sign In

                        </a>


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