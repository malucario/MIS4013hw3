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
?>
