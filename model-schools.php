<?php
function selectSchools() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SchoolRanking, SchoolName, SchoolMascot, SchoolConference FROM Schools");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSchool($sRanking, $sName, $sMascot, $sConference) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Schools (SchoolRanking, SchoolName, SchoolMascot, SchoolConference) VALUES (?,?,?,?)");
        $stmt->bind_params("isss",$sRanking, $sName, $sMascot, $sConference); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSchool($sRanking, $sName, $sMascot, $sConference, $sRank) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Schools SET SchoolRanking=?, SchoolName=?, SchoolMascot=?, SchoolConference=? WHERE SchoolRanking=?");
        $stmt->bind_params("isssi",$sRanking, $sName, $sMascot, $sConference, $sRank); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSchool($sRanking) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Schools WHERE SchoolRanking=?");
        $stmt->bind_params("i",$sRanking); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
