<?php
function selectPlayersByTeam($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PlayerID, FirstName, LastName, Position FROM Players P JOIN PlayerSchool PS ON P.PlayerID=PS.PlayerID WHERE PS.SchoolRanking=?");
        $stmt->bind_param("i",$tid);
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
