<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('68.97.22.75', 'malucario', 'MikeyLTX2003', '4013hw3db');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
