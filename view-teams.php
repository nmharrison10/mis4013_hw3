<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <head>
      <tr>
      <th>ID</th>
      <th>Team Name</th>
      <th>Team Principal</th>
        <th></th>
      </tr>
    </head>
    <body>
<?php
while ($team = $teams->fetch_assoc()) {
?>
<tr>
  <td><?php echo $team['team_id']?></td>
  <td><?php echo $team['team_name']?></td>
  <td><?php echo $team['principal']?></td>
  <td><a href="drivers-by-team.php?id=<?php echo $team['team_id'];?>">Drivers</a></td>
</tr>
<?php
}
?>
    </body>
  </table>
</div>
