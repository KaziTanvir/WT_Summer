<?php
    include "../control/login_check.php";
    if(isset($_SESSION['username'])){
        
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>

<form action="" method="post">
    <table>
        <tr>
            <td>Username : </td>
            <td><input type="text" name="username" placeholder="Enter your username" ></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="password" placeholder="Enter your password" ></td>
        </tr>
        <tr>
            <td><input name="submit" type="submit" value="LOGIN"></td>
        </tr>
    </table>
    
    
    
</form>
<br>
<?php echo $error; ?>
</body>
</html>