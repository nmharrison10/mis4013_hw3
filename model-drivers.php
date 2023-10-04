<?php
function selectDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_id, driver_name, driver_age FROM `driver`");
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
