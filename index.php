<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Demo Admin v1.0</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
       <div id="wrapper">

        <!-- Navigation -->
        <nav style="margin-bottom: 0" role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">               
                <a href="index.html" class="navbar-brand">Demo Admin v1.0</a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div role="navigation" class="navbar-default sidebar">
                <div class="sidebar-nav navbar-collapse">
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="min-height: 406px;">
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
                                    
                                    
                                    
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="" class="control-label">Database name *</label>
                                            <input required type="text" id="db_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="db_username" class="control-label">Database username *</label>
                                            <input required type="text" id="db_username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="db_password" class="control-label">Database password</label>
                                            <input type="text" id="db_password" class="form-control">
                                        </div>
<button class="btn btn-default" type="submit">Save and continue</button>
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
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
<style>#page-wrapper {
    border-left: 1px solid #e7e7e7;
    margin: 0 0 0 250px;
    padding: 0 30px;
    position: inherit;
}
#page-wrapper {
    background-color: #fff;
    min-height: 568px;
    padding: 0 15px;
}</style>
</html>
