<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dolar Hoy</title>
</head>
<body>
<?php 

header('content-type:text/html;charset=utf-8');
$url = "http://www.infobae.com/adjuntos/servicios/cotizacion.json";
$data_json = @file_get_contents($url);
if(strlen($data_json)>0)
{
  	$data = json_decode($data_json,true);
  
	if(is_array($data))
	{
		$dolarOficial 	= $data[0]['dólar oficial']['compra']['precio'];
		$dolarBlue		= $data[0]['dólar blue']['compra']['precio'];
		$dolarTarjeta	= $data[0]['dólar tarjeta']['compra']['precio'];
	}

	echo '<h2>Cotización actual:</h2> '."<br/>";
	echo 'Dolar Oficial: <h3>'.$dolarOficial.'</h3><br/>';
	echo 'Dolar Blue: <h3>'.$dolarBlue.'</h3><br/>';
	echo 'Dolar Tarjeta: <h3>'.$dolarTarjeta.'</h3><br/>';
}


?>
</body>
</html>