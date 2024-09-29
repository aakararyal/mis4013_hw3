<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'aryalouc_hw3user', '2s~;wvoqVDB;', 'aryalouc_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
