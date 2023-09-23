<?php 
// DB credentials.
define('DB_HOST','sql12.freesqldatabase.com');
define('DB_USER','sql12648532');
define('DB_PASS','TWCfp56kMh');
define('DB_NAME','sql12648532');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_PASS,DB_USER,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>