<?php

    $host   = "localhost";
    $user   = "root";
    $pw     = "";
    $db     = "db_helpdesk";

    $koneksi    = mysqli_connect($host,$user,$pw);
    $select     = mysqli_select_db($koneksi,$db);

    if (isset($_GET['rowid'])) {
        $id_cty             = $_GET['rowid'];
        $query              = mysqli_query($koneksi,("SELECT * FROM tb_category WHERE id_cty = '$id_cty'"));
        $data               = mysqli_fetch_array($query);
    }
?>
<form role="form" action="function/edit.php?aksi=edit_cty" class="form-horizontal" enctype="multipart/form-data" method="post">
    <input type="hidden" class="form-control" name="id_cty" value="<?php echo $data['id_cty'] ?>">
    <div class="form-group">
        <label class="col-sm-3 control-label">Name Category</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="name_cty" value="<?php echo $data['name_cty'] ?>">
        </div>
    </div>
    <div class="modal-footer" style="text-align:left">
        <button type="submit" class="btn btn-default btn-sm" style="margin-right:5px;">update</button>
    </div>
</form>
