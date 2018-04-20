<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
    </div>
    <div class="panel-body">

        <meta http-equiv="refresh" content="30" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- WIDGETS -->
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="allticket">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $a      = mysqli_query($koneksi,("SELECT COUNT(id) AS total_ticket FROM tb_ticket"));
                            $data   = mysqli_fetch_array($a);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['total_ticket']; ?></span></div>
                        <div class="widget-subtitle">All Ticket</div>
                        <div><span class="fa fa-tags" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="newticket">
                    <div class="widget widget-primary widget-no-subtitle">
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo "0" ?></span></div>
                        <div class="widget-subtitle">New Ticket</div>
                        <div><span class="fa fa-tag" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="opened">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $c      = mysqli_query($koneksi,("SELECT COUNT(status) AS opened FROM tb_ticket WHERE status = 'opened'"));
                            $data   = mysqli_fetch_array($c);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['opened'] ?></span></div>
                        <div class="widget-subtitle">Opened</div>
                        <div><span class="fa fa-unlock" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="waiting">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $d      = mysqli_query($koneksi,("SELECT COUNT(status) AS waiting FROM tb_ticket WHERE status = 'waiting'"));
                            $data   = mysqli_fetch_array($d);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['waiting'] ?></span></div>
                        <div class="widget-subtitle">Waiting</div>
                        <div><span class="fa fa-cog" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="closed">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $e      = mysqli_query($koneksi,("SELECT COUNT(status) AS closed FROM tb_ticket WHERE status = 'closed'"));
                            $data   = mysqli_fetch_array($e);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['closed'] ?></span></div>
                        <div class="widget-subtitle">Closed</div>
                        <div><span class="fa fa-times-circle" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="answer">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $f      = mysqli_query($koneksi,("SELECT COUNT(action) AS answer FROM tb_ticket WHERE action = 'answered'"));
                            $data   = mysqli_fetch_array($f);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['answer'] ?></span></div>
                        <div class="widget-subtitle">Answer</div>
                        <div><span class="fa fa-question-circle" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="unanswer">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $g      = mysqli_query($koneksi,("SELECT COUNT(action) AS unanswer FROM tb_ticket WHERE action = 'un-answered'"));
                            $data   = mysqli_fetch_array($g);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['unanswer'] ?></span></div>
                        <div class="widget-subtitle">Un-Answer</div>
                        <div><span class="glyphicon glyphicon-info-sign" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="solved">
                    <div class="widget widget-primary widget-no-subtitle">
                        <?php
                            $h      = mysqli_query($koneksi,("SELECT COUNT(action) AS solved FROM tb_ticket WHERE action = 'solved'"));
                            $data   = mysqli_fetch_array($h);
                        ?>
                        <div class="informer informer-default">Data</div>
                        <div class="widget-big-int"><span class="num-count"><?php echo $data['solved'] ?></span></div>
                        <div class="widget-subtitle">Solved</div>
                        <div><span class="fa fa-check-square" style="float:right;"></span></div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END OF WIDGET -->
    </div>
</div>
