@extends('layouts.app')
@section('mytitle', 'Operations')
@section('content')
<div class="container marketing">

<h1 class="mt-5">Operations</h1>
<p class="lead">We are keeping track on our returns</p>
    
<h1 class="mt-5">ANNUAL <span class="text-muted">WIN RATIO</span></h1>
<div class="flourish-embed flourish-chart" data-src="visualisation/6821963"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
    
<hr class="featurette-divider">

<h1 class="mt-5">MONTHLY <span class="text-muted">- TOTAL RETURNS (%)</span></h1>
<div class="flourish-embed flourish-chart" data-src="visualisation/6971396"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
<p class="fst-italic"><small>*Based on compound annual returns over the months</small></p>

@endsection