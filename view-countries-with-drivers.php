<h1>Countries With Drivers</h1>
      <div class="card-group">
<?php           
while ($country = $countries->fetch_assoc()) {
?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $country['country_name']; ?></h5>
            <p class="card-text">
<?php
  $drivers=SelectDriversByCountry($country['country_id']);
  while($driver = $drivers->fetch_assoc()){
?>
<?php
  }
?>
            </p>
            <p class="card-text"><small class="text-body-secondary"><td>Capital: <?php echo $country['capital']; ?></td>/small></p>
          </div>
        </div>
<?php
}
?>
   </div>
