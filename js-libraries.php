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

    
  </head>
  <body>
    <div style="padding: 20px;">
    <h1>JavaScript Library Examples</h1>
    </div>
    <div id="body">

    <div id="ex1" style="border-style: solid; padding: 20px; margin: 10px; bs-border-radius: 0.375rem;">
          <h2>Ex1: chart.js </h2>
<div>
  <canvas id="myChart"></canvas>
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
  text: 'Something went wrong!',
})
     ">Click Me!</button>
    </div>
  Swal.fire({
  icon: 'success',//success warning info question
  title: 'Oops...',
  text: 'Something went wrong!',
})
    </div>
          <h2>Ex3: What Can JavaScript Do?</h2>
          
          <p id="demo3">JavaScript can change the style of an HTML element.</p>
          
          <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('demo3').style.fontSize='35px'">Click Me!</button>
    </div>

    <div id="ex4" style="border-style: solid; padding: 20px;margin: 10px;">
 <h2>Ex4: What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attribute values.</p>

<button class="btn btn-outline-primary" onclick="document.getElementById('myImage').src='maria-teneva-zK6JSL9lS3A-unsplash.jpg'">Normal day in OK</button>
<img id="myImage" src="maria-teneva-zK6JSL9lS3A-unsplash.jpg" style="width:300px">
<button class="btn btn-outline-primary" onclick="document.getElementById('myImage').src='pavel-roev-mfKbIbXa9BM-unsplash.jpg'">5 minutes later</button>
    </div>

    <div id="ex5" style="border-style: solid; padding: 20px;margin: 10px;">
        <h2>Ex5: What Can JavaScript Do?</h2>
        
        <p>JavaScript can show hidden HTML elements.</p>

      <div id="flex" style="display:flex;flex-direction:row;">
        <button type="button" class="btn btn-outline-primary" onmouseout="document.getElementById('demo5').style.display='none'"
          onmouseover="document.getElementById('demo5').style.display='block'">Hover!</button>
      
        <p id="demo5" style="display:none;margin:5px;">Hi there!</p>
      </div>
    </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
