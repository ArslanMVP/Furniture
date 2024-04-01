<?php 
// DB credentials.
define('DB_HOST','ofsmsdb.cwnfuiidldzb.us-east-1.rds.amazonaws.com');
define('DB_USER','admin'); // Имя пользователя
define('DB_PASS','Test1234'); // Пароль
define('DB_NAME','ofsmsdb'); // Имя базы данных
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
