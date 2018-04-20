<?php include('../config/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>MUKTI HELPDESK</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="../favicon2.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->
        <style media="screen">
        .x-navigation .x-navigation-control:hover {
            background: #1c9c8a;
            border-bottom: 0px;
        }
        .x-navigation.x-navigation-horizontal {
            height: 50px;
                background-color: rgb(50, 53, 58);
        }
        .x-navigation > li.xn-logo > a:first-child {
            font-size: 20px;
            background-color: #1caf9a;
        }
        .x-navigation.x-navigation-horizontal .xn-logo a {
            border-bottom: 0px;
            width: auto;
        }
        .btn-me {
            background-color: #1caf9a;
            border-color: #1caf9a;
            color: white;
        }
        .btn-me:hover {
            background-color: #1ea491;
            border-color: #1ea491;
            color: white;
        }
        .page-container {
            background: #f5f5f5;
        }
        .footer {
           position:fixed;
           bottom:0px;
           height:auto;
           width:100%;
           background-color: rgb(50, 53, 58);
           border-color: #32353a;
           color: white;
        }
        .title-footer{
            float: right;
            padding:10px 5px 10px 5px;
            font-weight: bold;
        }
        </style>
    </head>
    <body>

        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="home"><b>MUKTI HELPDESK</b></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li>
                        <a href="home"><span class="fa fa-home"></span>Home</span></a>
                    </li>
                    <li>
                        <a href="ticket"><span class="fa fa-pencil-square-o"></span>Submit</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span>Admin</span></a>
                        <ul class="animated zoomIn">
                            <li>
                                <a href="../admin/" target="_blank"><span class="fa fa-sign-in"></span> Login</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- LIST CONTENT -->

                <div class="page-content-wrap" style="margin-top:20px;">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <!-- PAGE -->

                            <?php
                                if ($_GET["page"] == "home") {
                                    include "list.php";
                                }else if ($_GET["page"] == "ticket") {
                                    include "ticket.php";
                                }
                            ?>

                            <!-- OFF PAGE -->

                        </div>
                    </div>

                </div>

                <!-- END LIST CONTENT -->

            </div>
            <!-- END PAGE CONTENT -->

            <!--<div class="footer">
                <div class="title-footer">Version Close Beta 2017</div>
            </div>-->

        </div>
        <!-- END PAGE CONTAINER -->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script>
        $(function () {
            $("#ticket1").DataTable();
            $('#ticket').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "iDisplayLength": 25
            });
        });
        </script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="../js/plugins/fileinput/fileinput.min.js"></script>
        <!-- END PAGE PLUGINS -->


        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

    </body>
</html>
