<script>

function makeChart(players1) {
  var useageData = players1.map(function(d) {
    return d.useage;
  });
  var productData = players1.map(function(d) {
    return d.product;
  });
  
  new Chart('pie-chart', {
    type: 'pie',
    data: {
      labels: productData,
      datasets: [{
        label: productData,
        backgroundColor: ['#3e95cd', '#3cba9f', '#cc65fe'],
        data: useageData 
        
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      title: {
        display: true,
        //text: 'Porfolio Overview Average Monthly Positions'
      },
      plugins:{
        labels: 
        [
          {
            precision: 2,
            fontStyle: 'bold',
            fontColor: '#fff'
          }
          
      ]
      },

      
    }
    
    
  });
}

// Request data using D3
d3
  .csv("https://dl.dropboxusercontent.com/s/840zg8qgaqzbwsf/Overview2.csv?dl=0")
  .then(makeChart);
</script>