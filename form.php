<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<h1>Classe IP</h1>

<h3>Digite o endereço IP que pretende verificar</h3>

<form action="verifica.php" method="POST">

<input type="text" name="box1"> <input type="text" name="box2"> <input type="text" name="box3"> <input type="text" name="box4"><br>

<br><input type="submit" name="Verificar">
</form>

<br>
<h1>Protocolos</h1>

<h3>Selecione o protocolo</h3>

<form action="protocol.php" method="post" >
    <select  class="form-select"  name="ips">
        <option value="dns">DNS</option>
        <option value="ftp">FTP</option>
        <option value="http">HTTP</option>
        <option value="ip">IP</option>
    </select>
    <br><input type="submit" name="Enviar">
</form>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</body>
</html>