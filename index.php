<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "";
include $dir."inc/header.php";
$title = "Home";
$login = 0;
$login = $_GET['login'];
    
$sql = "SELECT * FROM user";
$result = $link->query($sql);



if (isset($_POST['submit'])){
    $password = $_POST['password'];
    $username = $_POST['username'];
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($password == $row["passwd"] && $username == $row["uName"]){
                $login = 1;
            }
        }
    }
    if ($login == 0){
        echo "Your username or password is incorrect.";
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
                        <p><input type="submit" disabled name="submit" id="sub"></p>
                        <p><a href="">Forgot Password?</a></p>
                        <div class="g-recaptcha" align="middle" data-callback="recaptchaCallback" data-sitekey="6LdbkHwUAAAAAJvx8E_O_Q7GkJ6474WHEH-R0haE"></div>
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


