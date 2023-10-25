<select class="form-select" id="tid" name="tid">
  <?php
while ($teamItem = $teamList->fetch_assoc()) {
  $selText = "";
  if ($selectedTeam == $teamItem['team_id']){
  $selText = " selected";
      }
  ?>
  <option value="<?php echo $teamItem['team_id']; ?>" <?=$selText?>><?php echo $teamItem['team_name']; ?></option>
  <?php
}
?>
</select>
