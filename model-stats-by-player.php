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
?>
