<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, PA, AB, OPS, ExitVelo FROM Stats");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStats($sID, $sPID, $sPA, $sAB, $sOPS, $sEV) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Stats (StatsID, PlayerID, AB, PA, OPS, ExitVelo) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iiiidd", $sID, $sPID, $sPA, $sAB, $sOPS, $sEV); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStats($sPA, $sAB, $sOPS, $sEV, $sID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Stats SET AB=?, PA=?, OPS=? WHERE StatsID=?");
        $stmt->bind_param("iiddi", $sPA, $sAB, $sOPS, $sEV, $sID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStats($sID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Stats WHERE StatsID=?");
        $stmt->bind_param("i",$sID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
