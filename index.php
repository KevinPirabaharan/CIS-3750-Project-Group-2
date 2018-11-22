<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "";
include $dir."inc/header.php";
$title = "Home";
$login = $_GET['login'];

if (isset($_POST['submit'])){
    $password = $_POST['password'];
    $username = $_POST['username'];
    if ($password == "admin123" && $username == "admin@uoguelph.ca"){
        $login = 1;
    } else {
        $login = 0;
    }
}
?>

<?PHP 
    //not logged in, display login form
    if ($login != 1){
        echo '
        <body>
        <div class="textbox">
            <h1 style="text-align:center">Login</h1>
            <p>&nbsp;</p>
            <div class="card text-center" style="width: 50%; margin-left:25%">
                <div class="card-body">
                    <form action="" method="post">
                        <p>Username: <input type="text" name="username"></p>
                        <p>Password: <input type="password" name="password"></p>
                        <p><input type="submit" name="submit"></p>
                    </form>
                </div>
            </div>
        </div>
        </body>';
        
    // Logged in and page is displayed
    } else if ($login == 1){
        include $dir."inc/menu.php";
        echo '
        <body class="yui3-skin-sam">
        <div class="textbox">';        
        include "inc/calendar.php";
        echo '</div></body>';
    }
?>

</html>


