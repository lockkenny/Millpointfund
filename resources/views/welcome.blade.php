@extends('layouts.app')
@section('mytitle', 'Welcome')
@section('content')
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <svg class="bd-placeholder-img" width="100%" height="15%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>What we do</h1>
            <p>Tiberium Investments focus on managed futures to have a less correlations to the world stock markets. Our strategy is to have a clear and expected returns during unpredictable market conditions. </p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <svg class="bd-placeholder-img" width="100%" height="15%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Trading Strategies</h1>
            <p>We are using symmetrical rules for longs and shorts positions.
    Executed using breakout methods for entries and exits.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <svg class="bd-placeholder-img" width="100%" height="15%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Risk Management</h1>
            <p>Our risks will naturally expand with success. We ran long term simulations before venture into new products.</p>
            
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <h1>Latest from <span class="text-muted">Tiberium</span></h1>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Explore Tiberium</h2>
        <div class="text-muted fst-italic mb-2">Data as of: 06 August 2021 </div>
        <p>Our trading activities will update on a weekly and monthly basis.</p>
        <p><a class="btn btn-outline-secondary" href="/operations">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>The Copper Trade</h2>
        <div class="text-muted fst-italic mb-2">Posted on August 6, 2021 by Kenny Lock</div>
        <p>Over 1 year we tested simulations and monitoring price patterns.</p>
        <p><a class="btn btn-outline-secondary" href="/insights">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Our risks</h2>
        <div class="text-muted fst-italic mb-2">Posted on August 1, 2021 by Kenny Lock</div>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-outline-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      

    <!-- START THE FEATURETTES -->

    

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="mt-5">
        <h2 class="featurette-heading">ANNUAL PERFORMANCE - <span class="text-muted">TOTAL RETURN (%)</span></h2>
      </div>
      
      <div class="flourish-embed flourish-chart" data-src="visualisation/6856440"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
      <p class="fst-italic"><small>*Based on compound annual returns over the years</small></p>
      
      </div>
    </div>

    <hr class="featurette-divider">

  <div class="row featurette">
    <div class="mt-5">
      <h2 class="featurette-heading">SECTOR <span class="text-muted">WEIGHTS</span></h2>
    </div>
    <div class="flourish-embed flourish-chart" data-src="visualisation/6820520"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
  </div>

  
    </div><!-- /.container -->
									
@endsection
</main>