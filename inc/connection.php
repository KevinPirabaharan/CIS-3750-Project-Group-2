<?PHP

$db_servername = "localhost:3306";
$db_username = "root";
$db_password = "orangeTeam";
$db_databasename = "orange";

/*
$db_servername = "dursley.socs.uoguelph.ca";
$db_username = "msnow01";
$db_password = "0954174";
$db_databasename = "msnow01";
*/
$link = mysqli_connect($db_servername, $db_username, $db_password, $db_databasename);

if (!$link) {
    echo "Error: Unable to connect to MySQL".mysqli_connect_error();
} else {
    echo "Success: A proper connection to MySQL was made! The my_db database is great.";
    echo "Host information: " . mysqli_get_host_info($link);
}



















//echo phpinfo();



/*$connectionInfo = array( "Database"=>$db_databasename, "UID"=>$db_username, "PWD"=>$db_password);

$conn = mysqli_connect($db_servername, $connectionInfo);



if (!$conn) {
    die('Could not connect to database:<br> ' . mysqli_connect_error());
} else {
    mysql_select_db($db_databasename,$conn);
	echo "<center>Successfully connected to the database!<br><br>"; // remove this in real scripts
}*/

/*


$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init failed');
}

if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}

if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

  
*/

/*
if (!$mysqli->real_connect('18.216.74.209', 'root', 'orangeTeam', 'orange')) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
?>
*/

//mysqli_close($link);

?>
