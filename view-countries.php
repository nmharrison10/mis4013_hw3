<div class="row">
  <div class="col">
    <h1>Countries</h1>
  </div>
  <div class="col-auto">
    <?php
include "view-courses-newform.php";
?>
  </div>
</div>
<h1>Countries</h1>
<div class="table-responsive">
  <table class="table">
    <head>
      <tr>
      <th>ID</th>
      <th>Country</th>
      <th>Capital</th>
      </tr>
    </head>
    <body>
<?php
while ($country = $countries->fetch_assoc()) {
?>
<tr>
  <td><?php echo $country['country_id']?></td>
  <td><?php echo $country['country_name']?></td>
  <td><?php echo $country['capital']?></td>
</tr>
<?php
}
?>
    </body>
  </table>
</div>
<?php
?>
