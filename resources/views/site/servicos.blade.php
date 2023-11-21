@extends('site.layout')
@section('title', 'Serviços')
@section('content')

<div class="row container">
  <div class="col s12 l6 push-l3 center-align ">
    <h1 class="flow-text blue-text">Nossos Serviços</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ullam ipsa debitis fugiat libero, voluptatum deserunt ea? Nulla, facere ea!</p>
  </div>
</div>

<p>&nbsp;</p>

<div class="row container">
  <div class="col s12 l6">
    <div class="row">

      <div class="col s12 l6 center-align grey lighten-4 hoverable" >
        <i class="fa-solid fa-truck-fast blue-text text-lighten-2 medium"></i>
        <p>Lorem, ipsum dolor.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cum est doloremque non unde delectus!</p>

      </div> {{-- final da linha 1  --}}

      <div class="col s12 l6 center-align">
        <i class="fa-solid fa-folder-open blue-text text-lighten-2 medium"></i>
        <p>Lorem, ipsum dolor.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cum est doloremque non unde delectus!</p>

      </div> {{-- final da linha 2  --}}

      <div class="col s12 l6 center-align">
        <i class="fa-solid fa-car blue-text text-lighten-2 medium"></i>
        <p>Lorem, ipsum dolor.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cum est doloremque non unde delectus!</p>

      </div> {{-- final da linha 3  --}}

      <div class="col s12 l6 center-align  grey lighten-4 hoverable">
        <i class="fa-solid fa-briefcase blue-text text-lighten-2 medium"></i>
        <p>Lorem, ipsum dolor.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cum est doloremque non unde delectus!</p>

      </div> {{-- final da linha 4  --}}
    </div>
  </div>
  <div class="col s12 l6">
    <img src="{{ asset('images/team.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img materialboxed">
  </div>
</div>
<p>&nbsp;</p>

<div class="row container">
  <div class="cols12 center-align">
    <h1 class="flow-text blue-text">Planos</h1>
  </div>

  <p>&nbsp;</p>

  {{-- card 1 --}}
  <div class="col s12 l4 hoverable">
    <div class="card center-align">
      <div class="card-image">
        <i class="fa-solid fa-sack-dollar medium grey-text"></i>
      </div>
      <div class="card-content">
        <span class="card-title">Basic R$89,90</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cum consequatur praesentium soluta ipsa officia non beatae ipsam, harum fugiat!</p>
      </div>
      <div class="card-action">
        <a href="#!">saiba mais</a>
      </div>
    </div>
  </div>
  {{-- card 2 --}}
  <div class="col s12 l4 hoverable">
    <div class="card center-align">
      <div class="card-image">
        <i class="fa-solid fa-dollar-sign medium grey-text"></i>
      </div>
      <div class="card-content">
        <span class="card-title">Light R$119,90</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cum consequatur praesentium soluta ipsa officia non beatae ipsam, harum fugiat!</p>
      </div>
      <div class="card-action">
        <a href="#!">saiba mais</a>
      </div>
    </div>
  </div>
  {{-- card 3 --}}
  <div class="col s12 l4 hoverable">
    <div class="card center-align">
      <div class="card-image">
        <i class="fa-solid fa-bitcoin-sign medium green-text text-lighten-2"></i>
      </div>
      <div class="card-content">
        <span class="card-title">Diamente R$299,90</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cum consequatur praesentium soluta ipsa officia non beatae ipsam, harum fugiat!</p>
      </div>
      <div class="card-action">
        <a href="#!">saiba mais</a>
      </div>
    </div>
  </div>
</div>



@endsection