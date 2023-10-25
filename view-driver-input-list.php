<select class="form-select" id="did" name="did">
  <?php
while ($driverItem = $driverList->fetch_assoc()) {
  $selText = "";
  if ($selectedDriver == $driverItem['driver_id']{
  $selText = " selected"
      }
  ?>
  <option value="<?php echo $driverItem['driver_id']; ?>" <?=$selText?>><?php echo $driverItem['driver_name']; ?></option>
  <?php
}
?>
</select>
