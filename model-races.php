<?php
function selectRaces() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT race_id, track, date, d.driver_id, driver_name FROM race r join driver d on r.winning_driver_id=d.driver_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertRace($did, $tid, $date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `race` (`winning_driver_id`, `track`, `date`) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $did, $tid, $date);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRace($did, $tid, $date, $rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `race` set `winning_driver_id` = ?, `track` = ?, `date`=? where race_id = ?");
        $stmt->bind_param("issi", $did, $tid, $date, $rid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRace($rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `race` where race_id = ?");
        $stmt->bind_param("i", $rid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
