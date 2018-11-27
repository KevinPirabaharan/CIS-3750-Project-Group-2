<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/connection.php";
include $dir."inc/menu.php";
$day = $_GET['day'];
    
    
if (isset($_POST['submit'])){ 
    $transition = $_POST['transition'];
    $gridLayout = $_POST['gridLayout'];
    $background = $_POST['background'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $type3 = $_POST['type3'];
    $type4 = $_POST['type4'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    
    $sql3 = "SELECT * FROM slides";
    $result = $link->query($sql3);
    $count = $result->num_rows;
    
    $sql5 = "SELECT * FROM widgets";
    $result5 = $link->query($sql5);
    $count2 = $result5->num_rows;
    
    $sql2 = "INSERT INTO slides (slideID, bgColor, grid, transition, date) VALUES ('".$count."', '".$background."', '".$gridLayout."', '".$transition."', '".$day."')";
    
    $widget1 = "INSERT INTO widgets (widgetID, type, content, slideID) VALUES ('".$count2."', '".$type1."', '".$content1."', '".$count."')";
    $count2++;
    $widget2 = "INSERT INTO widgets (widgetID, type, content, slideID) VALUES ('".$count2."', '".$type2."', '".$content2."', '".$count."')";
    $count2++;
    $widget3 = "INSERT INTO widgets (widgetID, type, content, slideID) VALUES ('".$count2."', '".$type3."', '".$content3."', '".$count."')";
    $count2++;
    $widget4 = "INSERT INTO widgets (widgetID, type, content, slideID) VALUES ('".$count2."', '".$type4."', '".$content4."', '".$count."')";
}
    
?>


<body>
    <div class="textbox">
        <h1>Create New Slide</h1><br>
            <?php if (isset($_POST['submit'])){
            if (mysqli_real_query($link, $sql2) == TRUE) {
                echo "Your slide has been saved! <br>";
                mysqli_real_query($link, $widget1);
                mysqli_real_query($link, $widget2);
                mysqli_real_query($link, $widget3);
                mysqli_real_query($link, $widget4);
            } else {
                echo "Sorry, there was an error. <br>";
            }
                echo "Click <a href='../index.php?login=1'>here</a> to go back to the home page";
            } else {  

        ?>
        
            <form method="post" action="">
                <div class="row">
                <div class="col-md-1">
                    <img src="../images/2x2.jpg" class="gridImg"><br>
                    <input class="gridRadio" checked value="2x2" name="gridLayout" type="radio">
                </div>
                <div class="col-md-1">
                    <img src="../images/3x3.jpg" class="gridImg"><br>
                    <input class="gridRadio" disabled value="3x3" name="gridLayout" type="radio">
                </div>
                <div class="col-md-1">
                    <img src="../images/3x1.jpg" class="gridImg"><br>
                    <input class="gridRadio" disabled value="3x1" name="gridLayout" type="radio">
                </div>
                <div class="col-md-3">
                    <img src="../images/varied.jpg" class="gridImg"><br>
                    <input class="gridRadio" value="mix" name="gridLayout" disabled type="radio">
                </div>
                  
                    
                <div class="col-md-2">
                <p>Transition: <select required name="transition">
                <option value="Fade">Fade</option>
                <option value="Wipe">Wipe</option>
                <option value="Dissolve">Dissolve</option>
                <option value="Peel">Peel Off</option>
                </select></p> 
                </div>
                    
                <div class="col-md-2">
                <p>Color: <input required name="background" type="color"></p>
                </div>
                </div>
                
                <br><br>
                
                <table border="1" cellpadding="50">
                <tr>
                <td>
                    <select required name="type1">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br> 
                    <input name="content1" type="text">
                </td>  
                <td>
                    <select required name="type2">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input name="content2" type="text">
                </td>
                </tr>
                <tr>
                <td>
                    <select required name="type3">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input name="content3" type="text">
                </td>  
                <td>
                    <select required name="type4">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input name="content4" type="text">
                </td>
                </tr>
                </table>
                <br>
                <br>
                <img src="../images/widgets.png">
                <br><br>
                
                <button name="cancel"><a style="color: black; text-decoration:none;" href="index.php?login=1?day=<?php echo $day; ?>">Cancel</a></button>&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Save">
            </form>
     <?php } ?> 
        </div>
    </body>
  
<style>
.gridImg {
    width:50px;
    height:50px;
    margin-right:1%;
}

.gridRadio {
    margin-left:25px;
}
</style>