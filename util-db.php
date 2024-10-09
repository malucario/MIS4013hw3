<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65.230', 'malucario', 'MikeyLTX2003', '4013hw3db');
    
    // Check connection
    if ($conn->connect_error) {
      return False;
    }
    else {
        return $conn;
    }
}
?>
