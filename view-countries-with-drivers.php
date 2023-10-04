<h1>Countries With Drivers</h1>
      <div class="card-group">
<?php           
while ($country = $countries->fetch_assoc()) {
?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $country['country_name']; ?></h5>
            <p class="card-text">
            <ul class="list-group">
<?php
  $drivers=SelectDriversByCountry($country['country_id']);
  while($driver = $drivers->fetch_assoc()){
?>
        <li class="list-group-item"><?php echo $driver['driver_id']; ?> - <?php echo $driver['driver_name']; ?></li>
      <li class="list-group-item"><?php echo $driver['driver_age']; ?> - <?php echo $driver['team_name']; ?></li>
<?php
  }
?>
            </ul>
            </p>
            <p class="card-text"><small class="text-body-secondary">Capital: <?php echo $country['capital']; ?></small></p>
          </div>
        </div>
<?php
}
?>
   </div>
