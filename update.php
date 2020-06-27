<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Update Projects</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">

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

        <div class="content-section-a">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        require("process_checkprojects.php");
                        ?>
                        <h1 style="text-align: center;">Edit Projects.</h1>

                        <table id="projects" class="display nowrap table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project Name</th>
                                    <th>Project Manager</th>
                                    <th>Business Owner</th>
                                    <th>Start Date</th>
                                    <th>Expected End Date</th>
                                    <th>Technical Resource</th>
                                    <th>Status</th>
                                    <th><b>Update</b></th>
                                    <th><b>Delete</b></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["ID"] . "</td>";
                                        echo "<td>" . $row["project_name"] . "</td>";
                                        echo "<td>" . $row["project_manager"] . "</td>";
                                        echo "<td>" . $row["business_owner"] . "</td>";
                                        echo "<td>" . $row["start_date"] . "</td>";
                                        echo "<td>" . $row["expected_end_date"] . "</td>";
                                        echo "<td>" . $row["technical_resource"] . "</td>";
                                        echo "<td>" . $row["status"] . "</td>";
                                        if ($row["status"] == "Deleted") {
                                            echo "<td></td>";
                                            echo "<td></td>";
                                        } else {
                                            echo '<td><a href="edit.php?ID=' . $row['ID'] . '">Edit</a></td>';
                                            echo '<td><a href="delete.php?ID=' . $row['ID'] . '">Delete</a></td>';
                                        }
                                        echo "<td></td></tr>";
                                    }
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- /.container -->
            <button type="button" class="button go-back" onclick="location.href = 'interface.php';"> <<< Back to home page</button>
        </div>
        <!-- /.content-section-b -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script>
        $(document).ready(function () {
            $('.content-section-a').css('min-height', $(window).height());

        });
        $(window).resize(function () {
            $('.content-section-a').css('min-height', $(window).height());

        });
        $(document).ready(function () {
            $('#projects').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: -1
                    }
                },
                columnDefs: [{
                        className: 'control',
                        orderable: false,
                        targets: -1
                    }]
            });
        });

        </script>

    </body>

</html>
