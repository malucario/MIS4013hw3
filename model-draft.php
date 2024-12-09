<?php
function selectDrafts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT DraftID, PlayerID, Round, Pick, Team, Bonus FROM Draft");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertDrafts($dID, $dPID, $dRound, $dPick, $dTeam, $dBonus) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Draft (DraftID, PlayerID, Round, Pick, Team, Bonus) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iiiisi",$dID, $dPID, $dRound, $dPick, $dTeam, $dBonus); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDrafts($dRound, $dPick, $dTeam, $dBonus, $dID) {
    try {
        $conn = get_db_connection();
        // Prepare the SQL query
        $stmt = $conn->prepare("
            UPDATE Draft 
            SET Round = ?, Pick = ?, Team = ?, Bonus = ? 
            WHERE DraftID = ?
        ");
        // Dynamically bind parameters, explicitly handling NULL values
        $round = $dRound !== "" && $dRound !== null ? (int)$dRound : null;
        $pick = $dPick !== "" && $dPick !== null ? (int)$dPick : null;
        $bonus = $dBonus !== "" && $dBonus !== null ? (int)$dBonus : null;
        $team = $dTeam !== "" && $dTeam !== null ? $dTeam : null;
        // Bind parameters dynamically
        $stmt->bind_param(
            "iisii",
            $round,
            $pick,
            $team,
            $bonus,
            $dID
        );
        // Execute the query
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        if (isset($conn)) {
            $conn->close();
        }
        throw $e;
    }
}


function deleteDrafts($dID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Draft WHERE DraftID=?");
        $stmt->bind_param("i",$dID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
