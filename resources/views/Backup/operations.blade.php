<script>
function makeChart(players) {


var yearLabels = players.map(function(d) {
  return d.Years;
});
var ratioData = players.map(function(d) {
  return d.WinRatio;
});


var chart = new Chart('chart', {
  type: "bar",
  options: {
    tooltips:{
      mode: 'point',
      callbacks:{
        //edit tooltip
      }
    },
    maintainAspectRatio: true,
    legend: {
      display: true
      
    },
    title: {
      display: true,
      text: 'Annual Win Ratio'
    },
    scales: {
                  xAxes: [{
                      display: true,
                      scaleLabel: {
                          display: true,
                          fontSize: 60,
                          //labelString: 'Years'
                      }
                      
                  }],
        yAxes: [{
          offset: true,
          ticks: {
            
        // Convert the number to a string and splite the string every 3 charaters from the end
        callback: function(value, index, values) {
          value = value.toString();
          value = value.split(/(?=(?:...)*%)/);
        // Convert the array to a string and format the output
        //  value = value.join('.');
          return value + '%';
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
        label: 'Profitable trades/Total trades per year',
        data: ratioData,
        fill: false,
        borderColor: '#19A0AA',
        backgroundColor: '#19A0AA'
      }
      
      
    ],
   
  },
  

});
}

// Request data using D3
d3
.csv("https://dl.dropboxusercontent.com/s/p9qf7phienwogph/WinRatio.csv?dl=0")
.then(makeChart);
</script>
