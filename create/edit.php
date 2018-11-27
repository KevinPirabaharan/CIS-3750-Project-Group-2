<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/menu.php";
$day = $_GET['day'];
?>

<body>
    <div class="textbox">
        <h1>Create New Slide</h1><br>
            <form method="get" action="">
                <div class="row">
                <div class="col-md-1">
                    <img src="../images/2x2.jpg" class="gridImg"><br>
                    <input class="gridRadio" type="radio">
                </div>
                <div class="col-md-1">
                    <img src="../images/3x3.jpg" class="gridImg"><br>
                    <input class="gridRadio" disabled type="radio">
                </div>
                <div class="col-md-1">
                    <img src="../images/3x1.jpg" class="gridImg"><br>
                    <input class="gridRadio" disabled type="radio">
                </div>
                <div class="col-md-3">
                    <img src="../images/varied.jpg" class="gridImg"><br>
                    <input class="gridRadio" disabled type="radio">
                </div>
                    
                <div class="col-md-2">
                <p>Transition: <select>
                <option value="Fade">Fade</option>
                <option value="Wipe">Wipe</option>
                <option value="Dissolve">Dissolve</option>
                <option value="Peel">Peel Off</option>
                </select></p> 
                </div>
                    
                <div class="col-md-2">
                <p>Color: <input type="color"></p>
                </div>
                </div>
                
                <br><br>
                
                <table border="1" cellpadding="50">
                <tr>
                <td>
                    <select>
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br> 
                    <input type="text">
                </td>  
                <td>
                    <select>
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input type="text">
                </td>
                </tr>
                <tr>
                <td>
                    <select>
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input type="text">
                </td>  
                <td>
                    <select>
                      <option value="Weather">Weather</option>
                      <option value="Time">Time</option>
                      <option value="Text">Text</option>
                    </select><br>
                    <input type="text">
                </td>
                </tr>
                </table>
                <br>
                <!--<div style="border:solid black 1px">
                    <h2>Widgets</h2>
                <div class="row">
                    <div class="col-md-2" style="border:solid black 1px">
                    <p>Text</p>
                    </div>  
                    <div class="col-md-2" style="border:solid black 1px">
                    <p>Weather</p>
                    </div>
                    <div class="col-md-2" style="border:solid black 1px">
                    <p>Time</p>
                    </div>
                    
                </div>
                
                
                </div>-->
                <br>
                <img src="../images/widgets.png">
                <br>
                
                <button><a href="../index.php?login=1">Finish&nbsp;<i class="material-icons">arrow_right_alt</i></a></button>
            </form>
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