<?php
// Handle preflight requests for CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With');
    http_response_code(200);  // Respond with HTTP 200
    exit;
}
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
    $servername = "sql311.hstn.me";

    $username = "mseet_37010857";

    $password = "Oe0XBbZAuG9F";

    $dbname = "mseet_37010857_iot_db";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if (!$conn){
        die("connection failed: ".mysqli_connect_error());

    }

   
?>