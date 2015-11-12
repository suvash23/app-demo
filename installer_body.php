<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Installation configuration</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Database configuration
            </div>
            <div class="panel-body">
                <div class="row">

                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">

                        <form method="post" name="config_form" role="form" action="/form_action.php">
                            <div class="form-group">
                                <label for="" class="control-label">Database name *</label>
                                <input name="db_name" type="text" id="db_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="db_username" class="control-label">Database username *</label>
                                <input name="db_username" type="text" id="db_username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="db_password" class="control-label">Database password</label>
                                <input name="db_password" type="password" id="db_password" class="form-control">
                            </div>
                            <button class="btn btn-default" type="submit" name="submit">Save and continue</button>
                        </form>


                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

