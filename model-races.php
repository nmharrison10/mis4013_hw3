<?php
function selectRaces() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT race_id, track, date, driver_name FROM race r join driver d on r.winning_driver_id=d.driver_id");
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
