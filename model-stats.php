<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT StatsID, PlayerID, PA, AB, OPS, ExitVelo FROM Stats");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStats($stID, $stPID, $stPA, $stAB, $stOPS, $stEV) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Stats (StatsID, PlayerID, AB, PA, OPS, ExitVelo) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iiiidd", $stID, $stPID, $stPA, $stAB, $stOPS, $stEV); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStats($stPA, $stAB, $stOPS, $stEV, $stID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Stats SET AB=?, PA=?, OPS=? WHERE StatsID=?");
        $stmt->bind_param("iiddi", $stPA, $stAB, $stOPS, $stEV, $stID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStats($stID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Stats WHERE StatsID=?");
        $stmt->bind_param("i",$stID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
