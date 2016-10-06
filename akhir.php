
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
		echo "<h1>Selamat Datang ".$Name."</h1>";

?>

<!-- <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="refresh.js"></script>
<script type="text/javascript">back();</script> -->