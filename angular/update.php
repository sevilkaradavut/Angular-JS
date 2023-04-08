<?php

require_once 'connection.php';

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$age = $data->age;
$phone = $data->phone;
$id = $data->id;

$query = "CALL st_updateUser('$name', '$age', '$phone', $id)";

if(mysqli_query($connect, $query)){
$response["msg"] = "User Updated Successfully!";
}else{
    $response["msg"] = "Unable to update user!";
}

echo json_encode($response);

?>