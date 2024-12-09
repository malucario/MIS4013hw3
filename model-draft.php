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
        $stmt = $conn->prepare("
            INSERT INTO Draft (DraftID, PlayerID, Round, Pick, Team, Bonus)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        // Handle NULL values for optional fields
        $stmt->bind_param(
            "iiiisi",
            $dID,
            $dPID,
            $dRound !== "" ? $dRound : null,
            $dPick !== "" ? $dPick : null,
            $dTeam !== "" ? $dTeam : null,
            $dBonus !== "" ? $dBonus : null
        );
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
        $stmt = $conn->prepare("UPDATE Draft 
            SET 
                Round = IFNULL(?, Round), 
                Pick = IFNULL(?, Pick), 
                Team = IFNULL(?, Team), 
                Bonus = IFNULL(?, Bonus) 
            WHERE DraftID = ?
        ");

        // Use NULL if the value is empty, otherwise bind the actual value
        $stmt->bind_param(
            "iisii", 
            $dRound !== "" ? $dRound : null,
            $dPick !== "" ? $dPick : null,
            $dTeam !== "" ? $dTeam : null,
            $dBonus !== "" ? $dBonus : null,
            $dID
        ); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
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
