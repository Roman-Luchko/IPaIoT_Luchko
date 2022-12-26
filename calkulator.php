<?php
$host = 'mysqlluchko.mysql.database.azure.com';
$username = 'rl718un';
$password = 'Uj*hm9e2';
$db_name = 'testdatabase';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

mysqli_real_connect($conn, 'mysqlluchko.mysql.database.azure.com', 'rl718un', 'yourpassword', 'Uj*hm9e2', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
echo 'hhh';
