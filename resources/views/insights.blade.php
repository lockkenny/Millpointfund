@extends('layouts.app')

@section('content')

<<div class="container">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="mt-5">
        <h2 class="featurette-heading">ANNUAL PERFORMANCE - <span class="text-muted">TOTAL RETURN (%)</span></h2>
      </div>
      
      <div class="flourish-embed flourish-chart" data-src="visualisation/6856440"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
      <p class="fst-italic"><small>*Based on compound annual returns over the years</small></p>
      
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="mt-5">
        <h2 class="featurette-heading">SECTOR <span class="text-muted">WEIGHTS</span></h2>
      </div>
      <div class="flourish-embed flourish-chart" data-src="visualisation/6820520"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
    </div>

    <hr class="featurette-divider">
</div>

  

  
  

@endsection
