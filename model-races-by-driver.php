<?php
function selectRacesByDriver($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT race_id, track, r.date, d.driver_name from race r join driver d on d.driver_id=r.winning_driver_id where d.driver_id=?");
        $stmt->bind_param("i", $did);
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
