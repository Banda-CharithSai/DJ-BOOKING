<?php 
// DB credentials.
define('DB_HOST','charith.mysql.database.azure.com');
define('DB_USER','charith');
define('DB_PASS','qwerty@12345');
define('DB_NAME','odmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
