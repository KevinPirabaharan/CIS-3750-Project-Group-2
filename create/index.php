<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/menu.php";
$day = $_GET['day'];
    if (!$day){
        $day = date();
    }
?>

<body>
        <div class="textbox">
            <h1>Create New Slideshow</h1>
            <a href="stepOne.php?day=<?php echo $day; ?>"><img src="../images/createSlideshow.png"></a>
            </div>
        </body>
