<?php
$dbhost = getenv("DATABASE_SERVICE_HOST");
$dbport = getenv("DATABASE_SERVICE_PORT");
$dbuser = 'veer';
//$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
//$dbname = getenv("MYSQL_DATABASE");
$dbpwd = 'veer';
$dbname = 'veer'; 


$connection = mysql_connect($dbhost, $dbuser, $dbpwd);

if (!$connection) {
        echo "Could not connect to database";
} else {
        echo "Connected to database.<br>";
}

$dbconnection = mysql_select_db($dbname);

$query = "SELECT * from users";

$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
    echo $row['user_id'] . " " . $row['username'] . "\n";
}

mysql_close();

?>
