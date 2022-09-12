@extends('layouts.app')
@section('mytitle', 'Insights')
@section('content')

<section id="insights1">
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <video autoplay loop muted playsinline>
                <source src="https://embed-ssl.wistia.com/deliveries/99492d390a6a2d270dc071c870c2f708093e591f.bin" type="video/webm">
  </video>
      </div>
</secton>

<section id="talk1">
<div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="d-inline-block mb-2 text-primary">Why trade futures?</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in 
                to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.
                to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.
              </p>
            </div>
</div>
</section>

        
     
      
        


@endsection
@push('js')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endpush