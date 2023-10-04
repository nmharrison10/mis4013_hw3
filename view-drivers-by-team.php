<h1>Drivers by team</h1>
<div class="table-responsive">
  <table class="table">
    <head>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Country</th>
      </tr>
    </head>
    <body>
<?php
    while ($driver = $drivers->fetch_assoc()) {
?>
<tr>
      <td><?php echo $driver['driver_id']?></td>
      <td><?php echo $driver['driver_name']?></td>
      <td><?php echo $driver['driver_age']?></td>
      <td><?php echo $driver['c.country_name']?></td>
</tr>
<?php
}
?>
    </body>
  </table>
</div>
<?php
?>
