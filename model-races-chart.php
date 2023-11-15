<?php
function selectRaces() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_name, count(race_id) as Races_Won from race r join driver d on r.winning_driver_id=d.driver_id group by driver_id");
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
