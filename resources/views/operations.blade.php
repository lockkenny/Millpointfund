@extends('layouts.app')
@section('mytitle', 'Operations')
@section('content')
<div class="container marketing">

<h1 class="mt-5">Operations</h1>
<p class="lead">We are keeping track on our returns</p>
    
<h2 class="featurette-heading">ANNUAL <span class="text-muted">WIN RATIO</span></h2>
<div class="flourish-embed flourish-chart" data-src="visualisation/6821963"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
    
<hr class="featurette-divider">

<h2 class="featurette-heading">MONTHLY <span class="text-muted">- TOTAL RETURNS (%)</span></h2>
<div class="flourish-embed flourish-chart" data-src="visualisation/6971396"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
<p class="fst-italic"><small>*Based on compound monthly returns over the years</small></p>

<hr class="featurette-divider">

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Month</th>
        <th scope="col">Position</th>
        <th scope="col">Sector</th>
        <th scope="col">Contracts held</th>
        <th scope="col">Days held</th>
        <th scope="col">Notional exposure dollar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>August</td>
        <td>Short MSCI Singapore Index</td>
        <td>Equities</td>
        <td>5</td>
        <td>3</td>
        <td>SGD $170,000</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Long MSCI Singapore Index</td>
        <td>Equities</td>
        <td>5</td>
        <td>3</td>
        <td>SGD $170,000</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection