<div class="panel panel-primary">
<div class="panel-heading">
    <h3 class="panel-title">Data Department</h3>
    <div class="pull-right">
        <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#create_cty"><span class="fa fa-pencil"></span> Input Data</a>
    </div>
</div>
<div class="panel-body">
    <div class="table-responsive">
        <table id="ticket" class="table">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Name Category</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $no     = 1;
                    $query  = mysqli_query($koneksi,("SELECT * FROM tb_category ORDER BY name_cty ASC"));
                    foreach($query as $data){

                ?>
                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $data['name_cty'] ?></td>
                    <td>
                        <center>
                            <a href="#edit_cty" data-toggle="modal" data-id="<?php echo $data['id_cty']; ?>" style="font-size:15px;text-decoration:none;"><span class="label label-warning">Edit data</span></a>
                            <a href="function/delete.php?aksi=del_cty&id_cty=<?php echo $data['id_cty'] ?>" onClick="return confirm('are you sure for delete it?')" style="font-size:15px;text-decoration:none;"><span class="label label-warning">Delete data</span></a>
                        </center>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal edit employes -->

<div class="modal fade" id="edit_cty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Category</h4>
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
    $('#edit_cty').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type : 'get',
            url : 'form/edit_category.php',
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
<div class="modal fade" id="create_cty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Input Category</h3>
            </div>
            <div class="modal-body">
                <form role="form" action="function/create.php?aksi=add_category" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <div class="form-group">
						<label class="col-sm-3 control-label">Name Category</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="name_cty" placeholder="input.." required>
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
