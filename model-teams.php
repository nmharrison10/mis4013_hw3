<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, t.country_id, country_name, principal FROM team t join country c on t.country_id=c.country_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertTeam($teamName, $cid, $pName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `team` (`team_name`, `country_id`, `principal`) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $teamName, $cid, $pName);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCountry($teamName, $cid, $pName, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `team` set `team_name` = ?, `country_id` = ?, `principal`=? where team_id = ?");
        $stmt->bind_param("sisi", $teamName, $cid, $pName, $tid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCountry($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `team` where team_id = ?");
        $stmt->bind_param("i", $tid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
