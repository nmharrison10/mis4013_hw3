<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44','nharriso_hw3user', 'du#540}X]YqW', 'nharriso_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
