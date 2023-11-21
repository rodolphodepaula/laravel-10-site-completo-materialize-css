@extends('site.layout')
@section('title', 'Página Home')
@section('content')

<div class="row container">
  <div class="col s12 center-align">
    <p class="flow-text">Lorem, ipsum dolor sit amet</p>
  </div>

  <div class="divider"></div>

  {{-- card 1 --}}
  <div class="col s12 m6 l4">
    <div class="card">
      <div class="card-image">
        <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img materialboxed">
      </div>
      <div class="card-content">
        <span class="card-title">Lorem, ipsum dolor</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-action">
        <a href="#" class="blue-text">saiba mais</a>
      </div>
    </div>
  </div>

  {{-- card 2 --}}
  <div class="col s12 m6 l4">
    <div class="card">
      <div class="card-image">
        <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img materialboxed">
      </div>
      <div class="card-content">
        <span class="card-title">Lorem, ipsum dolor</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-action">
        <a href="#" class="blue-text">saiba mais</a>
      </div>
    </div>
  </div>

  {{-- card 3 --}}
  <div class="col s12 l4">
    <div class="card">
      <div class="card-image">
        <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img materialboxed">
      </div>
      <div class="card-content">
        <span class="card-title">Lorem, ipsum dolor</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-action">
        <a href="#" class="blue-text">saiba mais</a>
      </div>
    </div>
  </div>
</div>



@endsection