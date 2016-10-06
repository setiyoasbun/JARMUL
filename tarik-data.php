<html>
<head><title>Coba Tugas Jarmul 1</title></head>
<body bgcolor="#caffcb">
<?php include("tarik-timestamp.php");?>

<div id="cek">
	<table cellspacing="2" cellpadding="2" border="1">
	<tr align="center">
	    <td><B>UserID</B></td>
	    <td width="200"><B>Tanggal & Jam</B></td>
	    <td><B>Verifikasi</B></td>
	    <td><B>Status</B></td>
	</tr>

	<tr align="center">
		    <td><? echo $PIN?></td>
		    <td><?=$DateTime?></td>
		    <td><?=$Verified?></td>
		    <td><?=$Status?></td>
		</tr>

	<input name="itung" id="itung" value="<?php echo $itung?>" type="hidden">
	<input name="pin" id="pin" value="<?php echo $PIN?>" type="hidden">
	</table>
</div>
</body>

<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="refresh.js"></script>
<script type="text/javascript">updateFeed();</script>
