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
?>
