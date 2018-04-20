<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">List Ticket</h3>
        <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <meta http-equiv="refresh" content="30" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <table id="ticket" class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Employes</th>
                    <th class="text-center">Department</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Date Requested</th>
                    <th class="text-center">Date Updated</th>
                    <th class="text-center">Action</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $host   = "localhost";
                    $user   = "root";
                    $pw     = "";
                    $db     = "db_helpdesk";

                    $koneksi    = mysqli_connect($host,$user,$pw);
                    $select     = mysqli_select_db($koneksi,$db);
                    $no = 1;
                    $query = mysqli_query($koneksi,("SELECT a.id_employe, a.username_employe, c.name_dpt, d.name_cty, b.date_requested, b.date_updated, b.action, b.status
                                                     FROM tb_ticket AS b
                                                     INNER JOIN tb_employe AS a USING(id_employe)
                                                     INNER JOIN tb_department AS c USING(id_dpt)
                                                     INNER JOIN tb_category AS d USING(id_cty)
                                                     ORDER BY b.id ASC"));
                    foreach($query as $data){
                ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $data['username_employe'] ?></td>
                    <td><?php echo $data['name_dpt'] ?></td>
                    <td><?php echo $data['name_cty'] ?></td>
                    <td class="text-center"><?php echo $data['date_requested'] ?></td>
                    <td class="text-center">
                        <?php
                            $a = $data['date_requested'];
                            $b = $data['date_updated'];
                            if ($a == $b) {
                                echo "-";
                            }else {
                                echo "$b";
                            }
                        ?>
                    </td>
                    <td class="text-center" style="font-size:15px;">
                        <?php
                            if ($data['action'] == "un-answered") {
                                echo "<span class='label label-danger'>$data[action]";
                            }elseif ($data['action'] == "answered") {
                                echo "<span class='label label-info'>$data[action]";
                            }elseif ($data['action'] == "solved") {
                                echo "<span class='label label-success'>$data[action]";
                            }
                        ?>
                    </td>
                    <td class="text-center" style="font-size:15px;">
                        <?php
                            if ($data['status'] == "opened") {
                                echo "<span class='label label-info'>$data[status]";
                            }elseif ($data['status'] == "waiting") {
                                echo "<span class='label label-info'>$data[status]";
                            }elseif ($data['status'] == "closed") {
                                echo "<span class='label label-success'>$data[status]";
                            }
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
