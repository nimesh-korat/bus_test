<?php
header("Content-Type: application/json");
include("db_config.php");
$response = array();

$checkquery = "SELECT * FROM smoke";
$result = mysqli_query($conn, $checkquery);
$fetch = mysqli_num_rows($result);

if ($fetch == 0) {
    $response['error'] = TRUE;
    $response['message'] = "Sorry, no sensor data found";
    echo json_encode($response);
    exit;
} else {
    $data = array();
    while ($val = mysqli_fetch_assoc($result)) {
        $details['sensor_id'] = $val['sensor_id'];
        $details['temp_value'] = $val['sensor_value'];
        $details['timestamp'] = $val['timestamp'];
    
        array_push($data, $details);
    }
    $response['data'] = $data;
    $response['error'] = FALSE;
    $response['message'] = "Sensor Data found successfully";
    echo json_encode($response);
    exit;
}
?>