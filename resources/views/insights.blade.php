@extends('layouts.app')
@section('mytitle', 'Insights')
@section('content')

<section id="insights1">
<div class="container-fluid" id='insightsvid'>
  <video autoplay loop muted playsinline>
                <source src="https://embed-ssl.wistia.com/deliveries/99492d390a6a2d270dc071c870c2f708093e591f.bin" type="video/webm">
  </video>
</div>
</secton>

<section id="talk1">
<div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post" id='post1'>
        <h2 class="blog-post-title">Who is Kenny?</h2>
        <p class="blog-post-meta">Updated: 22/09/2022</p>
        <!-- Round profile Pic -->
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <br> 
        <small><i>"No harm in trying, because it may still be uplifting to you."</i></small>
        <hr>
        <p>A global macro trader and investor for 14 years, I founded Mill Point Fund to self-evaluate my trading performance. 
            My trading strategies involve highly leveraged products and conservative executions. My first investment was right after the GFC by speculating penny mining stocks listed in Australia. I dived into commodities futures when I got my first job.
            I blew up my trading account twice, first in 2015 and the second in 2018. Since then, the fund has doubled. </p> 
          <br>
          <p>Furthermore, I work full time as an IT support for various industries, from Casinos to Petrol Chemicals. During my teenage years, I assembled computers and hosted LAN games.</p>
          <p>I graduated with a BIT in Interactive Technology and Game Design from James Cook University in 2012.</p>
          <div class="blog-post" id='LAN'>
          <video autoplay loop muted playsinline>
          <source src="https://embed-ssl.wistia.com/deliveries/a324b53e081a2d34559fe1bb04f6400528e10b54.bin" type="video/webm">
          </video>
          <br><small><i>Gaming with 2 childhood friends, Perth Western Australia, 2006</i></small>
          </div>
          <br>
      </article>

      <article class="blog-post" id='post2'>
        <h2 class="blog-post-title mb-1">Trading Singapore Index</h2>
        <p class="blog-post-meta">Updated: 18/09/2022</p>
          
        <small><i>"All things are difficult before they are easy." - Thomas Fuller</i></small>
        <hr>
        <p>I joined my colleagues for lunch, and they began sharing a topic about investing. I listened to what they had invested and continued to nibble my meal.</p>
        <br>
        <p>After one round of the table, it was my turn. "Singapore index", I replied bluntly. They were baffled. "Why not the S&P or the Nasdaq?" I know they have done their homework. In the past five years, the return was 11% for the S&P 500 and -0.61% for Singapore. The table was silent, waiting for my reason. I swallowed my food and cleared my throat. "I trade Singapore Index Futures".</p>
        <p>There was a minute pause from everyone, not sure they knew about the Futures or the derivatives markets. Many will think of investing in stocks, real estate and retirement plans. </P>
        <p>The derivatives market is a whole different world, derived from another asset. If you want to invest in Singapore, you can buy the MSCI Singapore ETF. MSCI also create a Future for that. SGX (Singapore Exchange) is the host for the participants to trade. A derivative product allows traders to "short" to gain when prices go down. For the majority of the people who bought ETFs or stocks only can wish for their prices to rise. </p>
      </article>

    </div>

    <div class="col-md-4" id='archives'>
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <script src="./js/quotes.js" async></script>
          <script type="text/javascript" src="http://feeds.financialcontent.com/JSQuote?Ticker=COPPER+EWS+aud/usd" ></script>
        </div>
        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
          <h6 class="fst-italic">2022</h6>
            <li class="nav-item"><a class="nav-link" href="#insights1">Who is Kenny</a></li>
            <li class="nav-item"><a class="nav-link" href="#post2">Trading Singapore Index</a></li>
          </ol>
        </div>
      </div>
    </div>
  
</section>

        

      
        


@endsection
@push('js')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endpush