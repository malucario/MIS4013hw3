<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PlayerID, FirstName, LastName, Position, Round, Pick, Team, Bonus FROM Players P JOIN Draft D ON P.PlayerID=D.PlayerID");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayers($pID, $pSID, $pFName, $pLName, $pPosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Players (PlayerID, SchoolRanking, FirstName, LastName, Position) VALUES (?,?,?,?,?)");
        $stmt->bind_param("iisss",$pID, $sid, $pFName, $pLName, $pPosition); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSchool($pSID, $pFName, $pLName, $pPosition, $pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Players SET SchoolID=?, FirstName=?, LastName=?, Position=? WHERE PlayerID=?");
        $stmt->bind_param("isssi", $pSID, $pFName, $pLName, $pPosition, $pID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSchool($pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Players WHERE PlayerID=?");
        $stmt->bind_param("i",$pID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
