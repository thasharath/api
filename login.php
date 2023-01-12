<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'DbConnect.php';
// $objDb = new DbConnect;
// $conn = $objDb->connect();



$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

// echo $data;

// $firstName = $data['firstName'];
// $lastName = $data['lastName'];
// $studentId = $data['studentId'];
$nic = $data['nic'];
// $email = $data['email'];
// $phone = $data['phone'];
$role = $data['role'];
$password = $data['password'];

$mysqli->real_escape_string($role);
$mysqli->real_escape_string($nic);
$mysqli->real_escape_string($password);



$sql = "SELECT * FROM users WHERE role='$role' AND nic='$nic' AND password='$password'";

// $results = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array(mysqli_query($mysqli, $sql), MYSQLI_ASSOC);
$count = mysqli_num_rows(mysqli_query($mysqli, $sql));


if ($count == 1 && $role == 'student') {
    echo "student";
} else if ($count == 1 && $role == 'teacher') {
    echo "teacher";
    // header('Location: '."http://localhost:3000/student");
    // Redirect("http://localhost:3000/student");

    
} else {
    echo "failed";
}

// $mysqli->close();


?>
