<?php

require_once 'connection.php';

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$age = $data->age;
$phone = $data->phone;

$query = "CALL st_insertUser('$name', '$age', '$phone')";

if(mysqli_query($connect, $query)){
$response["msg"] = "User Added Successfully!";
}else{
    $response["msg"] = "Unable to add user!";
}

echo json_encode($response);

?>