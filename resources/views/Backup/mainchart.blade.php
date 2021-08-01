
<script>
function makeChart(players) {


  var yearLabels = players.map(function(d) {
    return d.year;
  });
  var profitData = players.map(function(d) {
    return d.profits;
  });
  var commData = players.map(function(d) {
    return d.comm;
  });

  var chart = new Chart('chart', {
    type: "line",
    options: {
      tooltips:{
        mode: 'point',
        callbacks:{
          //edit tooltip
        }
      },
      maintainAspectRatio: false,
      legend: {
        display: true
        
      },
      title: {
        display: true,
        text: 'Annual returns'
      },
      scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							//labelString: 'Years'
						}
					}],
          yAxes: [{
            ticks: {
          // Convert the number to a string and splite the string every 3 charaters from the end
          callback: function(value, index, values) {
            value = value.toString();
            value = value.split(/(?=(?:...)*$)/);
          // Convert the array to a string and format the output
            value = value.join('.');
            return '$' + value;
          }
            },
						display: true,
						scaleLabel: {
							display: true,
							//labelString: 'Costs'
						},
            
              
            
            
        
					}],
          
				}

      
      
      
    },


    
    data: {
      labels: yearLabels,
      
      datasets: [
        
        {
          label: 'Profits',
          data: profitData,
          fill: false,
          borderColor: '#19A0AA',
          backgroundColor: '#19A0AA'
        },
        {
          label: 'Commission',
          data: commData,
          fill: false,
          borderColor: 'red',
          backgroundColor: 'red'
        }
      ]
    },
    

  });
}

// Request data using D3
d3
  .csv("https://dl.dropboxusercontent.com/s/q8grcbak3we28pv/Overview.csv?dl=0")
  .then(makeChart);
</script>