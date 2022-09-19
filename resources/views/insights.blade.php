@extends('layouts.app')
@section('mytitle', 'Insights')
@section('content')

<section id="insights1">
<div class="container-fluid">
  <video autoplay loop muted playsinline>
                <source src="https://embed-ssl.wistia.com/deliveries/99492d390a6a2d270dc071c870c2f708093e591f.bin" type="video/webm">
  </video>
  
      </div>
</secton>

<section id="talk1">

<div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post" id='post1'>
        <h2 class="blog-post-title mb-1">Who is Kenny?</h2>
        <p class="blog-post-meta">Updated: 18/09/2022</p>
        <!-- Round profile Pic -->
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          
        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
      </article>

      <article class="blog-post" id='post2'>
        <h2 class="blog-post-title mb-1">Double Digit Returns</h2>
        <p class="blog-post-meta">Updated: 18/09/2022</p>
          
        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
      </article>

    </div>

    <div class="col-md-4" id='archives'>
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Disclaimer</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
          <h6 class="fst-italic">2022</h6>
            <li class="nav-item"><a class="nav-link" href="#post1">Who is Kenny</a></li>
            <li class="nav-item"><a class="nav-link" href="#post2">Double Digit Returns</a></li>
          </ol>
        </div>
      </div>
    </div>
  
</section>

        
     
      
        


@endsection
@push('js')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endpush