<form action="function/create.php?aksi=add_ticket" class="form-horizontal" enctype="multipart/form-data" method="post">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Submit Ticket</h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Search Employe</label>
                <div class="col-md-6">
                    <select class="form-control select" name="employe" data-live-search="true">
                        <?php
                            $query  = mysqli_query($koneksi,("SELECT * FROM tb_employe ORDER BY username_employe ASC"));
                            foreach($query as $data){
                        ?>
                        <option value="<?php echo $data['id_employe'] ?>"><?php echo $data['username_employe'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Department</label>
                <div class="col-md-6">
                    <select class="form-control select" name="id_dpt" data-live-search="true">
                        <?php
                            $query  = mysqli_query($koneksi,("SELECT * FROM tb_department ORDER BY name_dpt ASC"));
                            foreach($query as $data){
                        ?>
                        <option value="<?php echo $data['id_dpt'] ?>"><?php echo $data['name_dpt'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Category</label>
                <div class="col-md-6">
                    <select class="form-control select" name="id_cty" data-live-search="true">
                        <?php
                            $query  = mysqli_query($koneksi,("SELECT * FROM tb_category ORDER BY name_cty ASC"));
                            foreach($query as $data){
                        ?>
                        <option value="<?php echo $data['id_cty'] ?>"><?php echo $data['name_cty'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Title</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="title" placeholder="input.." required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Problem</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="problem" rows="6" cols="80" placeholder="input your problem.." required="required"></textarea>
                </div>
            </div>
            <!--<input class="form-control" type="hidden" name="date_requested">
            <input class="form-control" type="hidden" name="date_updated">-->
            <input class="form-control" type="hidden" name="action" value="un-answered">
            <input class="form-control" type="hidden" name="status" value="opened">
        </div>
        <div class="panel-footer">
            <button type="reset" class="btn btn-default">Clear Form</button>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
    </div>
</form>
