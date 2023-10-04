<?php
function selectDriversByTeam($teamid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_id, driver_name, driver_age, c.country_name FROM `driver` d join team t on d.team_id=t.team_id join country c on d.country_id=c.country_id where t.team_id=?");
        $stmt->bind_param("i", $teamid);
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
