<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'DbConnect.php';
// $objDb = new DbConnect;
// $conn = $objDb->connect();

$request_data = file_get_contents('php://input');
$data = json_decode($request_data, true);

// echo $data;

$firstName = $data['firstName'];
$lastName = $data['lastName'];
$studentId = $data['studentId'];
$nic = $data['nic'];
$email = $data['email'];
$phone = $data['phone'];
$role = $data['role'];
$password = $data['password'];

$sql = "INSERT INTO users(firstName, lastName, studentId, nic, email, phone, role, password) VALUES('$firstName', '$lastName', '$studentId', '$nic', '$email', $phone, '$role', '$password')";

$results = $mysqli->query($sql);

if ($results == true) {
    echo "success";
} else {
    echo "failed";
}

$mysqli->close();


// var_dump($conn);

// echo "hi";


// $method = $_SERVER['REQUEST_METHOD'];
// switch($method) {
//     case "POST":
//         $user = json_decode( file_get_contents('php://input',true) );
//         $sql = "INSERT INTO users(firstName, lastName, studentId, nic, email, phone, role, password) VALUES(firstName, :lastName, :studentId, :nic, email, phone, role, password)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bindParam(':firstName', $user->firstName);
//         $stmt->bindParam(':lastName', $user->lastName);
//         $stmt->bindParam(':studentId', $user->studentId);
//         $stmt->bindParam(':nic', $user->nic);
//         $stmt->bindParam(':email', $user->email);
//         $stmt->bindParam(':role', $user->role);
//         $stmt->bindParam(':phone', $user->phone);
//         $stmt->bindParam(':password', $user->password);
//         if($stmt->execute()) {
//             $response = ['status' => 1, 'message' => 'Record created successfully.'];
//         } else {
//             $response = ['status' => 0, 'message' => 'Failed to create record.'];
//         }
//         break;


// }

?>
