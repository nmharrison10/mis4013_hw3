<?php
function selectDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_id, driver_name, driver_age, team_id, country_id FROM `driver`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectCountriesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT country_id, country_name FROM country order by country_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDriver($tid, $cid, $dName, $dAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `driver` (`team_id`, `country_id`, `driver_name`, `driver_age`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("iisi", $tid, $cid, $dName, $dAge);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDriver($tid, $cid, $dName, $dAge, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `driver` set `team_id` = ?, `country_id` = ?, `driver_name`= ?, `driver_age`= ? where driver_id = ?");
        $stmt->bind_param("iisii", $tid, $cid, $dName, $dAge, $did);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDriver($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `driver` where driver_id = ?");
        $stmt->bind_param("i", $did);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
