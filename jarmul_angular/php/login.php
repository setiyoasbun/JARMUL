<?php
	function get_log()
	{
		$IP="10.151.36.69";
		$Key="0";


		$Connect = fsockopen($IP, "80", $errno, $errstr, 1);
		if($Connect){
			$soap_request="<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
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
		
		$buffer=parse_data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
		$buffer=explode("\r\n",$buffer);
		$data=parse_data($buffer[count($buffer)-2],"<Row>","</Row>");
		$PIN=parse_data($data,"<PIN>","</PIN>");
		$DateTime=parse_data($data,"<DateTime>","</DateTime>");
		$Verified=parse_data($data,"<Verified>","</Verified>");
		$Status=parse_data($data,"<Status>","</Status>");

		$count = sizeof($buffer);
		$name = get_profile($PIN);
		$result = array('id'=>$PIN, 'date'=>$DateTime, 'status'=>$Status, 'verified'=>$Verified, 'count'=>$count, 'name'=>$name);
		echo json_encode($result);

	}
	function parse_data($data,$p1,$p2){
		$data=" ".$data;
		$hasil="";
		$awal=strpos($data,$p1);
		if($awal!=""){
			$akhir=strpos(strstr($data,$p1),$p2);
			if($akhir!=""){
				$hasil=substr($data,$awal+strlen($p1),$akhir-strlen($p1));
			}
		}
		return $hasil;	
	}
	function get_profile($PIN){
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
		
		$buffer=parse_data($buffer,"<GetUserInfoResponse>","</GetUserInfoResponse>");
		$buffer=explode("\r\n",$buffer);
		$data=parse_data($buffer[count($buffer)-2],"<Row>","</Row>");
		$PIN1=parse_data($data,"<PIN>","</PIN>");
		$Name=parse_data($data,"<Name>","</Name>");
		$Name=ucwords($Name);

		return $Name;
	}
	// function get_finger_print($PIN){
	// 	include('connect.php');
	// 	$IP="10.151.36.69";
	// 	$Key="0";

	// 	if($Connect){
	// 		for($i=0;$i<=9;$i++){
	// 			$soap_request="<GetUserTemplate><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">".$PIN."</PIN><FingerID xsi:type=\"xsd:integer\">".$i."</FingerID></Arg></GetUserTemplate>";
	// 			$newLine="\r\n";
	// 			fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
	// 		    fputs($Connect, "Content-Type: text/xml".$newLine);
	// 		    fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
	// 		    fputs($Connect, $soap_request.$newLine);
	// 			$buffer="";
	// 			while($Response=fgets($Connect, 1024)){
	// 				$buffer=$buffer.$Response;
	// 			}
	// 		}
	// 	}else echo "Koneksi Gagal";
		
	// 	$buffer=parse_data($buffer,"<GetUserTemplateResponse>","</GetUserTemplateResponse>");
	// 	$buffer=explode("\r\n",$buffer);
	// 	for($a=0;$a<count($buffer);$a++){
	// 		$data=parse_data($buffer[$a],"<Row>","</Row>");
	// 		$FingerID=parse_data($data,"<FingerID>","</FingerID>");
	// 		$Size=parse_data($data,"<Size>","</Size>");
	// 		$Valid=parse_data($data,"<Valid>","</Valid>");
	// 		$Template=parse_data($data,"<Template>","</Template>");
	// 		$conn->query('INSERT INTO user VALUES("'.$PIN.'", "'.'")')
	// 	}
	// }
	get_log();
?>