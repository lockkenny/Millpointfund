@extends('layouts.app')
@section('mytitle', 'Double Digit Returns')
@section('content')

<section id="insights1">
<div class="jumbotron">
  <video autoplay loop muted playsinline>
                <source src="https://embed-ssl.wistia.com/deliveries/99492d390a6a2d270dc071c870c2f708093e591f.bin" type="video/webm">
  </video>
      </div>
</secton>

<section id="talk1">
<div class="container-fluid">
            <div class="container1">
              <h1 class="insights">Double Digit Returns<span id="AboutInsights1"></span></h1>
              <div class="mb-1 text-muted">Nov 12 2022</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in 
                to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.
                to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.
              </p>
            </div>
</div>
</section>

        
     
      
        


@endsection
@push('js')
<script src="{{ asset('js/typeit.js') }}" ></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endpush