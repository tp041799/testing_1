<?php

$connectionInfo = array("UID" => "apuadmin", "pwd" => "Apu@123456", "Database" => "MY_DB_1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webappfordbtp041799.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

 if (!$conn)
 {
 die("Error connection: ".sqlsrv_errors());
 }

 echo "Yeahh connected";

 $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?)";
 $params = array("Burger King", "Bukit Jalil", "03-11223444");

 

 $stmt = sqlsrv_query( $conn, $sql, $params);
 if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
 }

?>
