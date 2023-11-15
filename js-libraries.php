<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="5-circle-fill.svg">
    <title>MIS 4013 HW6</title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- sweetalert2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.all.min.js"></script>

<!-- animejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

<!-- leafletjs map -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.min.js"></script>
  
  </head>
  <body>
    <div style="padding: 20px;">
    <h1>JavaScript Library Examples</h1>
    </div>
    <div id="body">

    <div id="ex1" style="border-style: solid; padding: 20px; margin: 10px; bs-border-radius: 0.375rem;">
          <h2>Ex1: chart.js </h2>
<div>
  <canvas width="50" height="50" id="myChart"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
     </div>

    <div id="ex2" style="border-style: solid; padding: 20px;margin: 10px;">
          <h2>Ex2: Sweet Alert</h2>
   <button type="button" class="btn btn-outline-primary" onclick="Swal.fire({
  icon: 'success',//success warning info question
  title: 'It worked!',
  text: 'This is a sweet alert!',
})
     ">Click Me!</button>
    </div>
      
    <div id="ex2" style="border-style: solid; padding: 20px;margin: 10px;">
          <h2>Ex3: animejs</h2>
          <div id="animediv" style="border-style:solid;border-width:5px;height:20px;width:100px;margin:20px;"></div>
          <button type="button" class="btn btn-outline-primary" id="animebtn">Click Me!</button>

    <script>
    "use strict";
    document.querySelector("#animebtn").addEventListener("click",(e)=>{move();});
    
    function move ()
    {
        anime( {
            targets: document.querySelector( "#animediv" ),
            translateX: 270
        } );
    }
</script>
    
    </div>

<div id="ex4" style="border-style: solid; padding: 20px;margin: 10px;">
 <h2>Ex4: Leafletjs Map</h2>

<button id="showmap" class="btn btn-outline-primary">Click Me!</button>

<div style="height: 200px;width: 300px" id="mapdiv"></div>

<script>
    document.querySelector("#showmap").addEventListener("click",(e)=>{drawmap();});
    function drawmap()
    {
        let map = L.map( 'mapdiv', { attributionControl: false, } ).setView( [ 35.33443889141701, -97.07270547900498 ], 12 );
        L.tileLayer( 'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: ''
        } ).addTo( map );
    }
</script>
</div>

    <div id="ex5" style="border-style: solid; padding: 20px;margin: 10px;">
        <h2>Bonus (kind of): Bootstap...</h2>
        
    </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
