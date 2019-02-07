<?php
	$serverName = "18.217.147.215\MSSQLSERVER, 1433"; //serverName\instanceName
	$connectionInfo = array( "Database"=>"cliente_db", "UID"=>"sa", "PWD"=>"C0m3x@2018");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if($conn) {
    	 echo "Conexión establecida.<br>";
	}else{
     	echo "Conexión no se pudo establecer.<br>";
     	die( print_r( sqlsrv_errors(), true));
	}
?>