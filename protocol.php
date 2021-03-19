<html>
<head>
	<title></title>

</head>
</head>
<body>
<?php
$nome = $_POST['ips'];


if ($nome=='dns') {
	echo "<h1>DNS [Domain Name System]</h1>";
}
elseif ($nome=='ftp') {
	echo "<h1>FTP [File Transfer Protocol]</h1>";
		
}
elseif ($nome=='http') {
	echo "<h1>HTTP [HyperText Transfer Protocol]</h1>";
}
elseif ($nome=='ip') {
	echo "<h1>IP [Internet Protocol]</h1>";
}
else{
	echo "Erro";
}

?>
<br>


</body>
</html>