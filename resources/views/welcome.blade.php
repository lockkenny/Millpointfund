@extends('layouts.app')
@section('mytitle', 'Welcome')
@section('content')
@include('layouts.modal')
  <!-- About section-->
  <section id="about">
  <div class="container-fluid">
    <div class="shadow-lg mb-5 mt-1 container1">
        <div class="intro1">
       <video autoplay loop muted playsinline>
    <source src="https://embed-ssl.wistia.com/deliveries/2dd00c7d40af84c93c882cfcccccfa0f7e586c05.bin" >
</video>
<!-- Description over video-->
<h1 class="shadow-sm p-5 mb-5 mt-5"><span id="AboutTitle"></span></h1>

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
            <h1 class="shadow-sm p-5 mb-2 mt-5"><span id="AboutOpt"></span></h1>
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
    <source src="https://embed-ssl.wistia.com/deliveries/d16d49f99fc3d252fb8ffaa84a6dfc94b85907f0.bin" type="video/webm">
            </video>
            <h1 class="shadow-sm p-5 mb-3 mt-1"><span id="AboutInsights"></span></h1>
            <div class="row mb-2">
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">About Me</strong>
                    <h3 class="mb-0">Who is Kenny?</h3>
                    <div class="mb-1 text-muted">18 August 2022</div>
                    <p class="card-text mb-auto">"Resolving IT headaches and inspired trader"</p>
                    <a href="/insights#insights1" class="stretched-link" data-bs-toggle="modal" data-bs-target="#ModalLink1">Continue reading</a>
                </div>
            </div>
          </div>
          <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Trading</strong>
          <h3 class="mb-0">Trading Singapore Index</h3>
          <div class="mb-1 text-muted">14 August 2022</div>
          <p class="mb-auto">Is all about the leverage</p>
          <a href="/insights#post2" class="stretched-link" data-bs-toggle="modal" data-bs-target="#ModalLink2">Continue reading</a>
        </div>
      </div>
    </div>
        </div>
      </div>
    </secton>

@endsection


