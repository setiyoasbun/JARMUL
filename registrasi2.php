<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fingerprint</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <style>
      .loader {
        border: 5px solid #e7e1c2;
        border-radius: 50%;
        border-top: 5px solid #3498db;
        width: 40px;
        height: 40px;
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
      }

      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue" style="
    background-image: url('assets/Background.png');
    background-size: 100% 100%;">
  <div class="col-sm-12">
	<div class="box box-info" style="width: 45%; margin: 0 auto; margin-top: 8%;">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Registration</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                  	<div class="alert alert-warning">
                    <h4><i class="icon fa fa-info"></i>Attention!</h4>
                    Please place your Finger/Face/RFID Card on the machine
                    </div>

                    <div class="col-sm-12">
                      <div class="col-sm-4">
                        <img src="assets/finger.png" style="width:100px; height:100px; margin-left: auto; margin-right: auto; display:block;">
                      </div>
                      <div class="col-sm-4">
                        <img src="assets/face.png" style="width:100px; height:100px; margin-left: auto; margin-right: auto; display:block;">
                      </div>
                      <div class="col-sm-4">
                        <img src="assets/rfid.png" style="width:100px; height:100px; margin-left: auto; margin-right: auto; display:block;">
                      </div>


                      <div class="col-sm-12">
                         <br>
                         <div class="loader" style="margin: 0 auto"></div>
                      </div>

                    </div>


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Sign Up</button>
                  </div><!-- /.box-footer -->
                </div><!-- /.box -->
	</div>

                  <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    </body>
    </html>