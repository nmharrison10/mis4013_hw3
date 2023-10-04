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
    while ($race = $races->fetch_assoc()) {
?>
<tr>
      <td><?php echo $race['race_id']?></td>
      <td><?php echo $race['track']?></td>
      <td><?php echo $race['date']?></td>
      <td><?php echo $race['driver_name']?></td>
</tr>
<?php
}
?>
    </body>
  </table>
</div>
