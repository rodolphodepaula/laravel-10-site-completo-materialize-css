@extends('site.layout')
@section('title', 'Página Home')
@section('content')

<div class="row container">
  <div class="col s12 center-align">
    <p class="flow-text">Lorem, ipsum dolor sit amet</p>
  </div>

  <div class="cols s12 divider"></div>

  <p>&nbsp;</p>

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
<p>&nbsp;</p>
<div class="row container">
  <div class="col s12">
    <div class="divider"></div>
  </div>
</div>
<p>&nbsp;</p>
<div class="row container">
  <section class="col s12">
    <h1 class="flow-text light justify">Lorem, ipsum dolor sit amet</h1>
    <p class="flow-text light justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias nisi eligendi reprehenderit, 
      ullam quas itaque dolor dolores mollitia amet officiis reiciendis doloribus quam fuga voluptatibus
       atque inventore. Cumque aliquid quam odit temporibus qui voluptate assumenda, dolores ad esse alias
       maiores earum! Eligendi incidunt amet unde voluptates atque. Tempora, provident?
    <p>
    <p class="flow-text justify">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nobis repellendus cupiditate,
      quisquam ut voluptatum consequuntur in obcaecati. Eos sunt magnam voluptatibus? Deleniti
      beatae nobis enim veritatis doloremque suscipit modi!
    </p>
    <p>
      <a href="#!" class="btn btn-small blue waves-effect waves-light">saiba mais</a>
      <a href="#!" class="btn btn-small purple waves-effect waves-light">cadastra-se</a>
    </p>
  </section>
</div>
<div class="parallax-container">
  <div class="parallax">
    <img src="{{ asset('images/paralax.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img">
  </div>
</div>
<p>&nbsp;</p>
<div class="row container">
  <div class="col s12 m6 l4 center-align">
    <img src="{{ asset('images/teams/team-1.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img circle">
    <p class="flow-text">Ray</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, maiores.</p>
    <p>
      <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
      <a href="#!"><i class="small fa-brands fa-instagram"></i></a>
    </p>
  </div>
  <div class="col s12 m6 l4 center-align">
    <img src="{{ asset('images/teams/team-2.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img circle">
    <p class="flow-text">Bia</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, maiores.</p>
    <p>
      <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
      <a href="#!"><i class="small fa-brands fa-instagram"></i></a>
    </p>
  </div>
  <div class="col s12 m6 l4 center-align">
    <img src="{{ asset('images/teams/team-3.jpg') }}" alt="[imagem]" title="Lorem" class="responsive-img circle">
    <p class="flow-text">Jeneff</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, maiores.</p>
    <p>
      <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
      <a href="#!"><i class="small fa-brands fa-instagram"></i></a>
    </p>
  </div>
</div>

@endsection