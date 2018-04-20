<?php

    $host   = "localhost";
    $user   = "root";
    $pw     = "";
    $db     = "db_helpdesk";

    $koneksi    = mysqli_connect($host,$user,$pw);
    $select     = mysqli_select_db($koneksi,$db);

    if (isset($_GET['rowid'])) {
        $id                 = $_GET['rowid'];
        $query              = mysqli_query($koneksi,("SELECT a.id_employe, a.username_employe, c.name_dpt, d.name_cty, b.id, b.date_requested, b.date_updated, b.action, b.status, b.title, b.problem
                                         FROM tb_ticket AS b
                                         INNER JOIN tb_employe AS a USING(id_employe)
                                         INNER JOIN tb_department AS c USING(id_dpt)
                                         INNER JOIN tb_category AS d USING(id_cty)
                                         WHERE id = '$id'
                                         ORDER BY b.id ASC"));
        $data               = mysqli_fetch_array($query);
    }
?>
<form role="form" action="function/edit.php?aksi=edit_all_ticket" class="form-horizontal" enctype="multipart/form-data" method="post">
    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
    <div class="form-group">
        <label class="col-md-3 control-label">Search Employe</label>
        <div class="col-md-8">
            <select class="form-control select" name="employe" data-live-search="true">
                <?php
                    $query  = mysqli_query($koneksi,("SELECT * FROM tb_employe ORDER BY username_employe ASC"));
                    foreach($query as $data_employe){
                        if ($data['username_employe'] == $data_employe['username_employe']) {
                            echo "<option value = $data_employe[id_employe] selected>$data_employe[username_employe]</option>";
                        }else{
                            echo "<option value= $data_employe[id_employe]>$data_employe[username_employe]</option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Department</label>
        <div class="col-md-8">
            <select class="form-control select" name="id_dpt" data-live-search="true">
                <?php
                    $query  = mysqli_query($koneksi,("SELECT * FROM tb_department ORDER BY name_dpt ASC"));
                    foreach($query as $data_dpt){
                        if ($data['name_dpt'] == $data_dpt['name_dpt']) {
                            echo "<option value = $data_dpt[id_dpt] selected>$data_dpt[name_dpt]</option>";
                        }else{
                            echo "<option value= $data_dpt[id_dpt]>$data_dpt[name_dpt]</option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Category</label>
        <div class="col-md-8">
            <select class="form-control select" name="id_cty" data-live-search="true">
                <?php
                    $query  = mysqli_query($koneksi,("SELECT * FROM tb_category ORDER BY name_cty ASC"));
                    foreach($query as $data_cty){
                        if ($data['name_cty'] == $data_cty['name_cty']) {
                            echo "<option value = $data_cty[id_cty] selected>$data_cty[name_cty]</option>";
                        }else{
                            echo "<option value= $data_cty[id_cty]>$data_cty[name_cty]</option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Title</label>
        <div class="col-md-8">
            <input class="form-control" type="text" name="title" value="<?php echo $data['title'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Problem</label>
        <div class="col-md-8">
            <textarea class="form-control" name="problem" rows="6" cols="80"><?php echo $data['problem'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Action</label>
        <div class="col-md-8">
            <select class="form-control select" name="action">
                <?php
                    error_reporting(0);
                    if ($data['action']=="un-answered") {
                        $a = "selected=selected";
                    }
                    else if ($data['action']=="answered") {
                        $b = "selected=selected";
                    }
                    else if ($data['action']=="solved") {
                        $c = "selected=selected";
                    }
                ?>
				<option value="un-answered" <?php echo $a ?>>un-answered</option>
				<option value="answered" <?php echo $b ?>>answered</option>
				<option value="solved" <?php echo $c ?>>solved</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-8">
            <select class="form-control select" name="status">
                <?php
                    error_reporting(0);
                    if ($data['status']=="opened") {
                        $e = "selected=selected";
                    }
                    else if ($data['status']=="waiting") {
                        $f = "selected=selected";
                    }
                    else if ($data['status']=="closed") {
                        $g = "selected=selected";
                    }
                ?>
				<option value="opened" <?php echo $e ?>>opened</option>
				<option value="waiting" <?php echo $f ?>>waiting</option>
				<option value="closed" <?php echo $g ?>>closed</option>
            </select>
        </div>
    </div>

    <div class="modal-footer" style="text-align:left">
        <button type="submit" class="btn btn-default btn-sm" style="margin-right:5px;">update</button>
    </div>
</form>

<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../js/plugins/fileinput/fileinput.min.js"></script>
