<?php 
	
    include '../control/login_check.php';
	if(isset($_SESSION['status'])){
        header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<a href="../view/home.php"><img src="../images/logo.png" width="200px" alt=""></a>
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
            <td><a href="../view/registration-user.php">Don't have a account?</a></td>
        </tr>
    </table>
    
    
    
</form>
<br>
<?php echo $error; ?>
</body>
</html>