<h1>Formula 1 Races Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php 
while ($race = $races->fetch_assoc()) {
 echo $race[`Races_Won`].",";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php 
$races = selectRaces();
while ($race = $races->fetch_assoc()) {
 echo "'".$race[`driver_name`]."',";
}
?>
    ]
},

  });
</script>
