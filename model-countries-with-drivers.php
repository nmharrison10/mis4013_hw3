<?php
function selectCountries() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT country_id, country_name, capital FROM `country`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectDriversByCountry($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_id, driver_name, driver_age, team_name from driver d join country c on d.country_id=c.country_id join team t on d.team_id=t.team_id where c.country_id=?");
        $stmt->bind_param("i", $cid);
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
