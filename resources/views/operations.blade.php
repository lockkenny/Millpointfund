@extends('layouts.app')
@section('mytitle', 'Operations')
@section('content')
<div class="container marketing">

<h1 class="mt-5">Operations</h1>
<p class="lead">We are keeping track on our returns</p>
    
<hr class="featurette-divider">

<h2 class="featurette-heading">MONTHLY <span class="text-muted">- TOTAL RETURNS (%)</span></h2>
<div class="flourish-embed flourish-chart" data-src="visualisation/6971396"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
<p class="fst-italic"><small>*Based on compound monthly returns over the years</small></p>

<hr class="featurette-divider">

<h2 class="featurette-heading">Positions <span class="text-muted">- Database</span></h2>
<div class="flourish-embed flourish-table" data-src="visualisation/9467778"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
@endsection