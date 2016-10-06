
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php include("tarik-timestamp.php");?>
    <!-- Intro Header -->
    <header class="intro">
        <div id="cek" class="intro-body">
                        <h1 class="brand-heading">WELCOME</h1>
                        <p class="intro-text">Please Put Your finger print in the device
                            <!-- <br>Created by Start Bootstrap.</p> -->
         <input name="itung" id="itung" value="<?php echo $itung?>" type="hidden">
        <input name="pin" id="pin" value="<?php echo $PIN?>" type="hidden">
        </div>
    </header>
</body>
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="refresh.js"></script>
<script type="text/javascript">updateFeed();</script>
