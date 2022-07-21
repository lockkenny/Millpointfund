@extends('layouts.app')
@section('mytitle', 'Welcome')
@section('content')

    
  <!-- About section-->
  <section id="about">
  <div class="container">
    <div class="shadow-lg mb-2 mt-1 container1">
        <div class="intro1">
          <h1 class="shadow-sm p-3 mb-2 mt-5"><span id="AboutTitle"></span></h1>
          <h2 class="p-3 mb-2 mt-1"><span id="AboutTitle1"></span></h2>
      </div>
    </div>
     <!-- ANNUAL PERFORMANCE - TOTAL RETURN (%)-->
      <div class="shadow-lg container2">
        <h2 class="shadow-sm p-3 mb-2 mt-5"><span id="Returns"></span></h2> 
        <div class="flourish-embed flourish-chart" data-src="visualisation/6856440"><script src="https://public.flourish.studio/resources/embed.js"></script></div>    
      </div>
      <!-- SECTOR WEIGHTS -->
        <div class="shadow-lg container3">
          <h2 class="shadow-sm p-3 mb-2 mt-5"><span id="Sectors"></span></h2>
          <div class="flourish-embed flourish-chart" data-src="visualisation/6820520"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
       </div>
  </div>
    </section>

<!-- Operations section-->
    <section id="operations">
      <div class="container">
        <div class="shadow-lg mb-2 mt-1 container4">
            <h1 class="shadow-sm p-3 mb-2 mt-5"><span id="AboutOpt"></span></h1>
            <!-- MONTHLY - TOTAL RETURNS (%) -->
            <h2 class="p-3 mb-2 mt-1"><span id="AboutOpt1"></span></h2>
            <div class="flourish-embed flourish-chart" data-src="visualisation/6971396"><script src="https://public.flourish.studio/resources/embed.js"></script></div>  
        </div> 
      
      <!-- TRACK - RECORDS (PRESENT - 2019) -->    
        <div class="shadow-lg container5">
            <h2 class="shadow-sm p-3 mb-2 mt-5"><span id="Records"></span></h2>
            <div class="flourish-embed flourish-table" data-src="visualisation/9467778"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
        </div>
    </div>
    </section>

    <!-- Insights section-->
    <section id="insights">
      <div class="container">
        <div class="shadow-lg p-3 mb-2 mt-5 container6">
            <h1 class="shadow-sm p-3 mb-2 mt-1"><span id="AboutInsights"></span></h1>
        </div>
      </div>
    </secton>

@endsection
@push('js')
<script src="{{ asset('js/scrollspy.js') }}" ></script>
<script src="{{ asset('js/typeit.js') }}" ></script>
<script src="{{ asset('js/scroll.js') }}" ></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endpush

