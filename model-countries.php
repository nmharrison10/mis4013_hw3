<?php
function selectCountries() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT country_id, country_name, principal FROM `country`");
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
