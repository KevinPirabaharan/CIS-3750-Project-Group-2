<?PHP

$db_servername = "localhost:3306";
$db_username = "root";
$db_password = "orangeTeam";
$db_databasename = "orange";

$link = mysqli_connect($db_servername, $db_username, $db_password, $db_databasename);

if (!$link) {
    echo "Error: Unable to connect to MySQL".mysqli_connect_error();
} else {
    //echo "Success: A proper connection to MySQL was made! The my_db database is great.";
}

?>
