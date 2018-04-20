<?php
    session_start();

    if (Isset($_SESSION['level'])) {
        if ($_SESSION['level'] == 'super_admin' OR 'it') {
            include ('../config/koneksi.php');
            $level      = strtoupper($_SESSION['level']);
            $username   = $_SESSION['username'];
            $fullname   = strtoupper($_SESSION['fullname']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>ADMIN HELPDESK</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="../favicon2.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-blue.css"/>
        <!-- sweetalert -->
	    <link rel="stylesheet" href="../js/plugins/sweetalert/sweetalert.css">
        <!-- EOF CSS INCLUDE -->
        <style media="screen">
        .x-navigation .x-navigation-control:hover {
            background: #1c9c8a;
            border-bottom: 0px;
        }
        </style>
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top-fixed">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar page-sidebar-fixed scroll">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home">Adminpanel</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="../assets/images/users/no-image.jpg"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="../assets/images/users/no-image.jpg"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $fullname ?></div>
                                <div class="profile-data-title"><?php echo $level ?></div>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">Navigation</li>

                    <!-- MENU LEFT NAVIGATION -->
                    <li>
                        <a href="home"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-ticket"></span> <span class="xn-text">Ticket</span></a>
                        <ul>
                            <li><a href="allticket"><span class="fa fa-tags"></span> All Ticket</a>
                                <div class="informer informer-info">
                                    <?php
                                        $a      = mysqli_query($koneksi,("SELECT COUNT(id) AS total_ticket FROM tb_ticket"));
                                        $data   = mysqli_fetch_array($a);
                                    ?>
                                    <?php echo $data['total_ticket']; ?>
                                </div>
                            </li>
                            <li><a href="newticket"><span class="fa fa-tag"></span> New Ticket</a>
                                <div class="informer informer-info">
                                    <?php echo "0"; ?>
                                </div>
                            </li>
                            <li><a href="opened"><span class="fa fa-unlock"></span> Opened</a>
                                <div class="informer informer-info">
                                    <?php
                                        $c      = mysqli_query($koneksi,("SELECT COUNT(status) AS opened FROM tb_ticket WHERE status = 'opened'"));
                                        $data   = mysqli_fetch_array($c);
                                    ?>
                                    <?php echo $data['opened'] ?>
                                </div>
                            </li>
                            <li><a href="waiting"><span class="fa fa-cog"></span> Waiting</a>
                                <div class="informer informer-info">
                                    <?php
                                        $d      = mysqli_query($koneksi,("SELECT COUNT(status) AS waiting FROM tb_ticket WHERE status = 'waiting'"));
                                        $data   = mysqli_fetch_array($d);
                                    ?>
                                    <?php echo $data['waiting'] ?>
                                </div>
                            </li>
                            <li><a href="closed"><span class="fa fa-times-circle"></span> Closed</a>
                                <div class="informer informer-info">
                                    <?php
                                        $e      = mysqli_query($koneksi,("SELECT COUNT(status) AS closed FROM tb_ticket WHERE status = 'closed'"));
                                        $data   = mysqli_fetch_array($e);
                                    ?>
                                    <?php echo $data['closed'] ?>
                                </div>
                            </li>
                            <li><a href="answer"><span class="fa fa-question-circle"></span> Answer</a>
                                <div class="informer informer-info">
                                    <?php
                                        $f      = mysqli_query($koneksi,("SELECT COUNT(action) AS answer FROM tb_ticket WHERE action = 'answered'"));
                                        $data   = mysqli_fetch_array($f);
                                    ?>
                                    <?php echo $data['answer'] ?>
                                </div>
                            </li>
                            <li><a href="unanswer"><span class="glyphicon glyphicon-info-sign"></span> Un-Answer</a>
                                <div class="informer informer-info">
                                    <?php
                                        $g      = mysqli_query($koneksi,("SELECT COUNT(action) AS unanswer FROM tb_ticket WHERE action = 'un-answered'"));
                                        $data   = mysqli_fetch_array($g);
                                    ?>
                                    <?php echo $data['unanswer'] ?>
                                </div>
                            </li>
                            <li><a href="solved"><span class="fa fa-check-square"></span> Solved</a>
                                <div class="informer informer-info">
                                    <?php
                                        $h      = mysqli_query($koneksi,("SELECT COUNT(action) AS solved FROM tb_ticket WHERE action = 'solved'"));
                                        $data   = mysqli_fetch_array($h);
                                    ?>
                                    <?php echo $data['solved'] ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="employes"><span class="fa fa-users"></span> <span class="xn-text">Employes</span></a>
                    </li>
                    <li>
                        <a href="department"><span class="fa fa-chain"></span> <span class="xn-text">Department</span></a>
                    </li>
                    <li>
                        <a href="category"><span class="fa fa-info-circle"></span> <span class="xn-text">Category</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Profile</span></a>
                    </li>
                    <!-- END -->

                    <li class="xn-title">Components</li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="home">Dashboard</a></li>
                    <li class="active"><?php include('title.php') ?></li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- TITLE PAGE -->
                <div class="page-title">
                    <h2><?php include('title.php') ?></h2>
                </div>
                <!-- END OF TITLE PAGE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <?php
                                if ($_GET["page"] == "home") {
                                    include "form/home.php";
                                }else if ($_GET["page"] == "employes") {
                                    include "form/employes.php";
                                }else if ($_GET["page"] == "allticket") {
                                    include "form/all_ticket.php";
                                }else if ($_GET["page"] == "newticket") {
                                    include "form/new_ticket.php";
                                }else if ($_GET["page"] == "opened") {
                                    include "form/opened.php";
                                }else if ($_GET["page"] == "waiting") {
                                    include "form/waiting.php";
                                }else if ($_GET["page"] == "closed") {
                                    include "form/closed.php";
                                }else if ($_GET["page"] == "answer") {
                                    include "form/answer.php";
                                }else if ($_GET["page"] == "unanswer") {
                                    include "form/un_answer.php";
                                }else if ($_GET["page"] == "solved") {
                                    include "form/solved.php";
                                }else if ($_GET["page"] == "dpt") {
                                    include "form/department.php";
                                }else if ($_GET["page"] == "cty") {
                                    include "form/category.php";
                                }
                            ?>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="../js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
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
                "iDisplayLength": 10
            });
        });
        </script>
        <!-- sweetalert -->
        <script type="text/javascript" src="../js/plugins/sweetalert/sweetalert.min.js"></script>
        <script>
            jQuery(document).ready(function($){
                $('.delete').on('click',function(){
                    var getLink = $(this).attr('href');
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        html: true,
                        type: "warning",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        showCancelButton: true,
                    },function(isConfirm){
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                            window.setTimeout(function(){
                                window.location.href = getLink
                            } ,1500);
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
                    return false;
                });
            });
        </script>

        <script>
            jQuery(document).ready(function($){
                $('.edit').on('click',function(){
                    var getLink = $(this).attr('href');
                    swal({
                        title: ' Alert',
                        text: 'Edit Data?',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#39be5a',
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        showCancelButton: true,
                    },function(isConfirm){
                        if (isConfirm) {
                            window.location.href = getLink
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
                    return false;
                });
            });
        </script>
        <!-- END PAGE PLUGINS -->


        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../js/plugins/fileinput/fileinput.min.js"></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
<?php
        }
    }
    else{
        session_destroy();
        echo "<script language='javascript'>alert('Session anda telah berakhir')</script>";
  		echo "<script language='javascript'>window.location = 'login'</script>";
    }
?>
