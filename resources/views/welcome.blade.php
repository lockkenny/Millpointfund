@extends('layouts.app')
@section('mytitle', 'Welcome')
@section('content')

    
  <!-- About section-->
  <section id="about">
  <div class="container-fluid">
    <div class="shadow-lg mb-2 mt-1 container1">
        <div class="intro1">
        <video autoplay loop muted playsinline>
    <source src="https://dl.dropboxusercontent.com/s/56opjgai9r68qnq/sg.webm?dl=0" type="video/webm">
</video>
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
      <div class="container-fluid">
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
      <div class="container-fluid">
        <div class="shadow-lg p-3 mb-2 mt-5 container6">
            
            <video autoplay loop muted playsinline>
    <source src="https://dl.dropboxusercontent.com/s/k69l4dgmuoin5ty/Mine.webm?dl=0" type="video/webm">
            </video>
            <h1 class="shadow-sm p-3 mb-2 mt-1"><span id="AboutInsights"></span></h1>
            <div class="row mb-2">
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">My Thoughts</strong>
                    <h3 class="mb-0">Review all major losses since 2018</h3>
                    <div class="mb-1 text-muted">14 August 2022</div>
                    <p class="card-text mb-auto">What went wrong.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
            </div>
          </div>
          <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Index</strong>
          <h3 class="mb-0">Why trade futures?</h3>
          <div class="mb-1 text-muted">14 August 2022</div>
          <p class="mb-auto">Is all about the leverage, let me explain.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
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

