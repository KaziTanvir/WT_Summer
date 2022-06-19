<?php
session_start();

if(isset($_SESSION['status'])){

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
<a href="../view/home2.php"><img src="../images/logo.png" width="200px" alt=""></a>
<table border="1">
        <tr>
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Gender</td>
            
        </tr>
        
        <?php
            
$existingdata = file_get_contents('../data/user.JSON');
$tempJSONdata = json_decode($existingdata);
$list="";
$user="";
        $name= "";
        $email= "";
        $age= "";
        $gender= "";
       

    foreach($tempJSONdata as $data ){
        $user=@$data->username;
        $name= @$data->firstname. " ". @$data->lastname;
        $email= @$data->email;
        $age= @$data->age;
        $gender= @$data->gender;
        
        

        echo "<tr>
                <td>" .$user."</td>
                <td>".$name ."</td>
                <td>".$email."</td>
                <td>".$age."</td>
                <td>".$gender."</td>
                
                </tr>";
    }
        
        ?>

        
    </table>
    <a href="dashboard.php">Go to Dashboard</a>
</body>
</html>
<?php
	}else{
		echo "invalid request";
	}
?>