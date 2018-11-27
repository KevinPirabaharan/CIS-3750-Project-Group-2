<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/menu.php";

?>

<body>
    <div class="textbox">
        <h1>Create New Slide</h1><br>
            <form method="get" action="">
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
                <a href="index.php?login=1">Finish&nbsp;<i class="material-icons">arrow_right_alt</i></a>
            </form>
        </div>
    </body>
    
<style>
    
    
.gridImg {
    width:150px;
    height:150px;
    margin-right:1%;
}

.gridRadio {
    margin-left:65px;
}
    
</style>