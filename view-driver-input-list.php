<select class="form-select" id="did" name="did">
  <?php
while ($driverItem = $driverList->fetch_assoc()) {
  ?>
  <option value="<?php echo $driverItem['driver_id']; ?>"><?php echo $driverItem['driver_name']; ?></option>
  <?php
}
?>
</select>
