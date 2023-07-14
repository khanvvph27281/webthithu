<div style="width: 1000px;">
  <canvas  id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ],
      datasets: [{
        label: 'gcfg  ',
        data: [1, 1, 3, 5, 2, 3,3,7,7,9,2,1],
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
      <div class="text">Control panel</div>
  </section>




<