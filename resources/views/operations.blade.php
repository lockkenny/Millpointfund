@extends('layouts.app')
@section('mytitle', 'Operations')
@section('content')
<div class="shadow-lg p-3 mb-5 container marketing">

<h1 class="shadow-sm p-3 mb-2 mt-5">Operations</h1>
<p class="lead">We are keeping track on our returns</p>
<span id="myElement"></span>
    
<h2 class="shadow-sm p-3 mb-2 mt-5">MONTHLY <span class="text-muted">- TOTAL RETURNS (%)</span></h2>
<div class="flourish-embed flourish-chart" data-src="visualisation/6971396"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
<p class="fst-italic"><small>*Based on compound monthly returns over the years</small></p>

<h2 class="shadow-sm p-3 mb-2 mt-5">Track <span class="text-muted">- Record</span></h2>
<div class="flourish-embed flourish-table" data-src="visualisation/9467778"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
@endsection
@push('js')
<script src="{{ asset('js/custom.js') }}" ></script>
@endpush