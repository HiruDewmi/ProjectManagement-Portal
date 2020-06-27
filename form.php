<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>New project</title>

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

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="#"><img  src = "img/dialoglogoc.png"  width="65" height="auto" ></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php include("login_state.php"); ?>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        <!-- Page Content -->

        <div class="intro-header">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        require("next_id.php");
                        ?>
                        <form action="process_form.php" method="post" class="basic-grey" >
                            <h1 style="text-align: center;">New Project Information.
                                <span>Please fill all the texts in the fields.</span>
                            </h1>
                            <label>
                                <span>ID:</span>
                                <input type="number" name="ID" value="<?php echo $row['ID'] + 1; ?>" readonly />
                            </label>
                            <label>
                                <span>Project name:</span>
                                <input id="name" type="text" name="project_name" placeholder="Full Name" required/>
                            </label>
                            <label>
                                <span>Project manager:</span>
                                <input id="manager" type="text" name="project_manager" placeholder="Full Name" required />
                            </label>
                            <label>
                                <span>Business owner:</span>
                                <input id="owner" type="text" name="business_owner" placeholder="Full Name" required />
                            </label>
                            <label>
                                <span>Start date:</span>
                                <input id="datepicker" type="text" name="start_date" placeholder="YYYY-MM-DD" required pattern="\d{4}-\d{1,2}-\d{1,2}" />
                            </label> 
                            <label>
                                <span>Expected end date:</span>
                                <input id="datepicker2" type="text" name="expected_end_date" placeholder="YYYY-MM-DD" required pattern="\d{4}-\d{1,2}-\d{1,2}" />
                            </label>
                            <label>
                                <span style="font-size:12px">Technical resources:</span>
                                <input id="resources" type="text" name="technical_resources"  required />
                            </label>

                            <label>
                                <span>&nbsp;</span> 
                                <input  type="submit" class="button" name="Submit" value="Save">
                                <input type="button" class="button" onclick="location.href = 'interface.php';" value="Cancel" /> 
                            </label>    
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container -->
            <button type="button" class="button go-back" onclick="location.href = 'interface.php';"> <<< Back to home page</button>
        </div>
        <!-- /.content-section-b -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script>
        $(document).ready(function () {
            $('.intro-header').css('min-height', $(window).height());

        });
        $(window).resize(function () {
            $('.intro-header').css('min-height', $(window).height());

        });

        $(function () {
            $("#datepicker , #datepicker2").datepicker({dateFormat: 'YY-MM-DD'}).val();
            var dateFormat = $("#datepicker , #datepicker2").datepicker("option", "dateFormat");
            $("#datepicker , #datepicker2").datepicker("option", "dateFormat", "yy-mm-dd");
        });
        </script>

    </body>

</html>
