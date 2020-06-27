<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projects</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Header -->
        <div class="intro-header">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div id="outer">
                            <br><br>
                            <p><a href="register.php"><strong>Register</strong></a> | <a href="index.php"><strong>Login</strong></a></p>

                            <div id = "frm">
                                <form class="form-horizontal" action="process_login.php"  method="POST">
                                    <div class="form-group">
                                        <p><img  src = "img/dialoglogoc.png"  width="65" height="auto" ></p>
                                        <p>
                                        <h3>Login</h3>
                                        </p>

                                        <?php
                                        session_start();
                                        if (isset($_SESSION['message-login'])) {
                                            echo '<p style="color:red;">' . $_SESSION['message-login'] . '</p>';
                                        }
                                        // Destroying session
                                        session_destroy();
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="username">Username:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="pwd">Password:</label>
                                        <div class="col-sm-9">          
                                            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">        
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" id="btn" class="btn btn-default" name="login">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.intro-header -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.intro-header').css('min-height', $(window).height());

            });
            $(window).resize(function () {
                $('.intro-header').css('min-height', $(window).height());

            });
        </script>

    </body>

</html>
