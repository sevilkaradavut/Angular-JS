<?php

require_once 'connection.php';

$data = json_decode(file_get_contents("php://input"));
$query = "CALL st_getUsers()";
$response = array();
$res = mysqli_query($connect, $query);

if(mysqli_num_rows($res)){
while($row = mysqli_fetch_assoc($res)){
$response[] = $row;
}}
else{
$response["msg"] = "No records!";
}

echo json_encode($response);

?>