<?php
include ("../control/process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="top">
    <h1 class="header">
        ABC management System
    </h1>
    <h2 class="subheader">
        We create future
    </h2>
    </div>
    <div class="navbar">
        <a href="#" class="nav-menu">Home</a>
        <a href="#" class="nav-menu" >About Us</a>
        <a href="#" class="nav-menu">Shop</a>
    </div>
    <h1 class="registration">Registration Form</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value=""></td>
				<td><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value=""></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="number" name="age" value=""></td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>
                    <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation" value="Project Lead">Project Lead
            
                </td>
            </tr>
            <tr>
                <td>Preferred Language : </td>
                <td>
                    <input type="checkbox" name="language[]" value="java">JAVA
                    <input type="checkbox" name="language[]" value="PHP">PHP
                    <input type="checkbox" name="language[]" value="C++">C++
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value=""></td>
            </tr>
            <tr>
                <td>Please Choose a file : </td>
                <td><input type="file" name="file" value=""></td>
</tr>
            
            
        </table>
        <input type="submit" name="submit" class="btn sumbit" value="submit">
                <input type="reset" class="btn sumbit" value="Reset">
    </form>


</body>
</html>