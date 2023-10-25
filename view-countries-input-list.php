<select class="form-select" id="cid" name="cid">
  <?php
while ($countryItem = $countryList->fetch_assoc()) {
  $selText = "";
  if ($selectedCountry == $countryItem['country_id']){
  $selText = " selected";
      }
  ?>
  <option value="<?php echo $countryItem['country_id']; ?>" <?=$selText?>><?php echo $countryItem['country_name']; ?></option>
  <?php
}
?>
</select>
