<?php
function selectStatsByPlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT FirstName, LastName, PA, AB, OPS, ExitVelo FROM Players P JOIN Stats S ON P.PlayerID=S.PlayerID WHERE P.PlayerID=?");
        $stmt->bind_param("i",$pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStats($sID, $pid, $sPA, $sAB, $sOPS, $sEV) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Stats (StatsID, PlayerID, PA, AB, OPS, EvitVelo) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iiiidd",$sID, $pid, $sPA, $sAB, $sOPS, $sEV); 
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
        $stmt = $conn->prepare("UPDATE Stats SET PA=?, AB=?, OPS=?, ExitVelo=? WHERE StatsID=?");
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
