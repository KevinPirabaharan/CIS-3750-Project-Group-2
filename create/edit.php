<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/menu.php";
$day = $_GET['day'];
    
    
if (isset($_POST['submit'])){ 
    $transition = $_POST['transition'];
    $gridLayout = $_POST['gridLayout'];
    $background = $_POST['background'];
    
    echo $transition."<br>".$gridLayout."<br>".$background;
    $sql2 = "INSERT INTO slides (bgColor, grid, transition) VALUES ($background, $gridLayout, $transition)";
    $result = $link->query($sql);
    echo $result;
    
}
    
    ?>


<body>
    <div class="textbox">
        <h1>Create New Slide</h1><br>
            <?php if (isset($_POST['submit'])){

            echo "Your slide has been saved! <br>";
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
                    <select required name="1">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br> 
                    <input required name="content1" type="text">
                </td>  
                <td>
                    <select required name="2">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input required name="content2" type="text">
                </td>
                </tr>
                <tr>
                <td>
                    <select required name="3">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input required name="content3" type="text">
                </td>  
                <td>
                    <select required name="4">
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input required name="content4" type="text">
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