@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>
<script>
const chart = LightweightCharts.createChart(document.body, { 
width: 1000, 
height: 300,

   });
   
const lineSeries = chart.addLineSeries();
fetch('https://sheetdb.io/api/v1/g0xx3d7j7qfhk')
	.then(function(response) {
    return response.json();
  })
  .then(function(data) {    
    lineSeries.setData(data.map(bar => {
    	return { time: bar.Year,value: bar.Profits };
    }));
  });

</script>
@endsection