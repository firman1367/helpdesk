<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">List Ticket</h3>
        <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div class="table table-responsive">
            <table id="ticket" class="table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Employes</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Date Requested</th>
                        <th class="text-center">Date Updated</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $query = mysqli_query($koneksi,("SELECT a.id_employe, a.username_employe, c.name_dpt, d.name_cty, b.id, b.date_requested, b.date_updated, b.action, b.status
                                                         FROM tb_ticket AS b
                                                         INNER JOIN tb_employe AS a USING(id_employe)
                                                         INNER JOIN tb_department AS c USING(id_dpt)
                                                         INNER JOIN tb_category AS d USING(id_cty)
                                                         WHERE b.status = 'closed'
                                                         ORDER BY b.id ASC"));
                        foreach($query as $data){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $data['username_employe'] ?></td>
                        <td><?php echo $data['name_dpt'] ?></td>
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
                        <td>
                            <center>
                                <a href="#edit_ticket" data-toggle="modal" data-id="<?php echo $data['id']; ?>" style="font-size:15px;text-decoration:none;"><span class="label label-warning">View data</span></a>
                                <a href="function/delete.php?aksi=del_ticket&id=<?php echo $data['id'] ?>" onClick="return confirm('are you sure for delete it?')" style="font-size:15px;text-decoration:none;"><span class="label label-warning">Delete data</span></a>
                            </center>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal edit employes -->

    <div class="modal fade" id="edit_ticket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Ticket</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="fetched-data"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal employes -->
    <script src="../js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_ticket').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'get',
                url : 'form/edit_ticket.php',
                data :  'rowid='+ rowid,
                success : function(data){
                    $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
        });
    });
    </script>
</div>
