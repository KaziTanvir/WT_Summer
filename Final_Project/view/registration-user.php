<?php
    include "../control/registration_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="dashboard.php"><img src="../images/logo.png" width="200px" alt=""></a>
<h1>Registration Form</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value="" placeholder="Enter First Name"></td>
                <td><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value="" placeholder="Enter Last Name"></td>
                <td><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" value="" placeholder="Enter Username"></td>
                <td><?php echo $usernameError;?></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="number" name="age" value=""></td>
                <td><?php echo $ageError;?></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Others">Others

                </td>
                <td><?php echo $genderError;?></td>
            </tr>
           
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value="" placeholder="Enter Email"></td>
                <td><?php echo $emailError;?></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value="" placeholder="Enter Password"></td>
                <td><?php echo $passwordError;?></td>
            </tr>
            <tr>
                <td>Confrim Password : </td>
                <td><input type="password" name="Cpass" value="" placeholder="Re-enter Password"></td>
                <td><?php echo $passwordError;?></td>
            </tr>
            
            <tr>
                <td>Upload a photo : </td>
                <td><input type="file" name="file" value="" placeholder="Photo"></td>
                <td><?php echo $fileError;?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><input type="text" name="address" value="" placeholder="Enter address "></td>
                <td><?php echo $addressError;?></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" value="Reset"></td>
                <td><?php echo $SaveError;?></td>
            </tr>
            
        </table>
    </form>
</body>
</html>