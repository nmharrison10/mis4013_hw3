<h1>Formula 1 Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <head>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th></th>
      </tr>
    </head>
    <body>
<?php
while ($driver = $drivers->fetch_assoc()) {
?>
<tr>
  <td><?php echo $driver['driver_id']; ?></td>
  <td><?php echo $driver['driver_name']; ?></td>
  <td><?php echo $driver['driver_age']; ?></td>
  <td>
    <form method="post" action="races-by-driver.php">
        <input type="hidden" name="did" value="<?php echo $driver['driver_id']; ?>">
          <button type="submit" class="btn btn-primary">Race Wins</button>
</form>
  </td>
</tr>
<?php
}
?>
    </body>
  </table>
</div>
