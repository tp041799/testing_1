<?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Akirazone398739", "Database" => "MY_DB_1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webappfordbtp041799.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn)
{
 die("Error connection: ".sqlsrv_errors());
 }

 echo "Yeahh connected";


?>
