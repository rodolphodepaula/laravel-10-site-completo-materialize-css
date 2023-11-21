@extends('site.layout')
@section('title', 'Galeria de Fotos')
@section('content')

<div class="row container">
  <div class="col s12">
    <h1 class="flow-text blue-text">Galeria de Fotos</h1>
  </div>
</div>

<div class="row container">
  @php
      $fotos = [
        'galeria-1.jpg',
        'galeria-2.jpg',
        'galeria-3.jpg',
        'galeria-4.jpg',
        'galeria-5.jpg',
        'galeria-6.jpg',
        'galeria-7.jpg',
        'galeria-8.jpg',
      ];

      $titulo = [
        'Foto do Evento 1',
        'Foto do Evento 2',
        'Foto do Evento 3',
        'Foto do Evento 4',
        'Foto do Evento 5',
        'Foto do Evento 6',
        'Foto do Evento 7',
        'Foto do Evento 8',
      ];

  @endphp

  @for ($galeria = 0; $galeria < count($fotos); $galeria++)
      <div class="col s12 m6 l3">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('images/galeria') }}/{{ $fotos[$galeria] }}" alt="[imagem]" title="lorem" class="responsive-img materialboxed">
            <span class="card-title">{{ $titulo[$galeria] }}</span>
          </div>
        </div>
      </div>
  @endfor
</div>

<div class="row container">
  <div class="col s12 m6">
    <h1 class="flow-text">Lorem ipsum dolor sit amet.</h1>
    <p class="paragrafo">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nulla delectus neque blanditiis doloribus optio!
    </p>
    <p class="paragrafo"><a href="#!" class="btn btn-small indigo">saiba mais</a></p>
  </div>
  <div class="col s12 m6">
    <img src="{{ asset('images/galeria/galeria-1.jpg') }}" alt="[imagem]" title="lorem" class="responsive-img">
  </div>
</div>
<div class="row container">
  <div class="col s12 m6">
    <img src="{{ asset('images/galeria/galeria-2.jpg') }}" alt="[imagem]" title="lorem" class="responsive-img">
  </div>
  <div class="col s12 m6">
    <h1 class="flow-text">Lorem ipsum dolor sit amet.</h1>
    <p class="paragrafo">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nulla delectus neque blanditiis doloribus optio!
    </p>
    <p class="paragrafo"><a href="#!" class="btn btn-small indigo">saiba mais</a></p>
  </div>
</div>


@endsection