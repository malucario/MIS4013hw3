<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('4013hw3db.mysql.database.azure.com', 'malucario', 'MikeyLTX2003', '4013hw3_db');
    
    // Check connection
    if ($conn->connect_error) {
      return False;
    }
    else {
        return $conn;
    }
}
?>
