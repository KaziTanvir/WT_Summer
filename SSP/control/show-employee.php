<?php

$existingdata = file_get_contents('../data/employee.JSON');
$tempJSONdata = json_decode($existingdata);
$list="";
$user="";
        $name= "";
        $email= "";
        $age= "";
        $gender= "";
        $designation = "";
        $days= "";
        $list="";

    foreach($tempJSONdata as $data ){
        $user=@$data->username;
        $name= @$data->firstname. " ". @$data->lastname;
        $email= @$data->email;
        $age= @$data->age;
        $gender= @$data->gender;
        $designation = @$data->designation;
        $days= @$data->days;
        

        $list= "<tr>
                <td>" .$user."</td>
                <td>".$name ."</td>
                <td>".$email."</td>
                <td>".$age."</td>
                <td>".$gender."</td>
                <td>".$designation."</td>
                <td>".$days."</td>
                </tr>" . $list;
    }
   


?>