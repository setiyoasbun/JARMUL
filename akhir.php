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

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
                        <h1 class="brand-heading">WELCOME</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="intro-text">Selamat Datang
<?php
	header( "refresh:7;url=tarik-data.php" );
	include("tarik-timestamp.php");
	$IP="10.151.36.69";
	$Key="0";


	$Connect = fsockopen($IP, "80", $errno, $errstr, 1);
	if($Connect){
		$soap_request="<GetUserInfo><ArgComKey Xsi:type=\"xsd:integer\">".$Key."<ArgComKey><Arg><PIN Xsi:type=\"xsd:integer\">".$PIN."</PIN></ Arg></ GetUserInfo>";
		$newLine="\r\n";
		fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
	    fputs($Connect, "Content-Type: text/xml".$newLine);
	    fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
	    fputs($Connect, $soap_request.$newLine);
		$buffer="";
		while($Response=fgets($Connect, 1024)){
			$buffer=$buffer.$Response;
		}
		fclose($Connect);
	}else echo "Koneksi Gagal";
	
	$buffer=Parse_Data($buffer,"<GetUserInfoResponse>","</GetUserInfoResponse>");
	$buffer=explode("\r\n",$buffer);
		$data=Parse_Data($buffer[count($buffer)-2],"<Row>","</Row>");
		$PIN1=Parse_Data($data,"<PIN>","</PIN>");
		$Name=Parse_Data($data,"<Name>","</Name>");
		echo "<h1 style="."color:white;"."> ".$Name."</h1>";

?>                            <!-- <br>Created by Start Bootstrap.</p> -->
        </div>
    </header>
</body>




<!-- <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="refresh.js"></script>
<script type="text/javascript">back();</script> -->