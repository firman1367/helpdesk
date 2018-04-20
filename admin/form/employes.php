<div class="panel panel-primary">
<div class="panel-heading">
    <h3 class="panel-title">Data Employes</h3>
    <div class="pull-right">
        <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#create_user"><span class="fa fa-pencil"></span> Input Data</a>
    </div>
</div>
<div class="panel-body">
    <div class="table-responsive">
        <table id="ticket" class="table">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">ID Employes</th>
                    <th class="text-center">Employes</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $no     = 1;
                    $query  = mysqli_query($koneksi,("SELECT * FROM tb_employe ORDER BY username_employe ASC"));
                    foreach($query as $data){

                ?>
                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td class="text-center"><?php echo $data['id_employe'] ?></td>
                    <td><?php echo $data['username_employe'] ?></td>
                    <td>
                        <center>
                            <a href="#edit_employe" data-toggle="modal" data-id="<?php echo $data['id_employe']; ?>" style="font-size:15px;text-decoration:none;"><span class="label label-warning">Edit data</span></a>
                            <a href="function/delete.php?aksi=del_employe&id_employe=<?php echo $data['id_employe'] ?>" onClick="return confirm('are you sure for delete it?')" style="font-size:15px;text-decoration:none;"><span class="label label-warning">Delete data</span></a>
                        </center>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal edit employes -->

<div class="modal fade" id="edit_employe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Username</h4>
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
    $('#edit_employe').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type : 'get',
            url : 'form/edit_employe.php',
            data :  'rowid='+ rowid,
            success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
            }
        });
    });
});
</script>

<!-- end modal -->

<!-- modal -->
<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Input Employe</h3>
            </div>
            <div class="modal-body">
                <form role="form" action="function/create.php?aksi=add_employe" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <div class="form-group">
						<label class="col-sm-3 control-label">Username Employe</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="fullname" placeholder="input.." required>
						</div>
					</div>
            </div>
            <div class="modal-footer" style="text-align:left">
                <button type="submit" class="btn btn-default btn-sm" style="margin-right:5px;">Submit</button>
                <button type="reset" class="btn btn-default btn-sm">Reset</button>
            </div>
                </form>
        </div>
    </div>
</div>

</div>
