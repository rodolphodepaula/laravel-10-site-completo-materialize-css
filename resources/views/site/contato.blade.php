@extends('site.layout')
@section('title', 'Contato')
@section('content')

<div class="row container">
  <div class="col s12">
    <h1 class="flow-text blue-text">Entre em Contato</h1>
  </div>
  <div class="col s12">
    <p>
      Dias de funcionamento:<br>
      Segunda à Sexta das 8h às 17h30<br><br>
    </p>
    <p>
      Telefone: (11) 4444-1111<br>
      E-mail para contato:<br>
      <span style="font-weight: bold;">contato@appcoder.com.br</span><br>
    </p>
    <p>
      Endereço: Av. Paulista 0, Estados Unidos - SP
    </p>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3035827137955!2d-46.66304872375308!3d-23.55753786145352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd516c4981%3A0x47127e80ab16b77b!2zSW7DrWNpbw!5e0!3m2!1spt-BR!2sbr!4v1700592984102!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<div class="row container">
  <div class="col s12">
    <form action="" method="post">
      @csrf
      <div class="row">
        {{-- campo nome --}}
        <div class="col s12 input-field m6">
          <i class="fa-solid fa-user prefix"></i>
          <input type="text" name="name" id="name" required>
          <label for="name">Seu nome</label>
        </div>
        {{-- campo email --}}
        <div class="col s12 input-field m6">
          <i class="fa-solid fa-envelope prefix"></i>
          <input type="text" name="email" id="email" required>
          <label for="email">Seu e-mail</label>
        </div>
        {{-- campo mensagem --}}
        <div class="input-field col s12">
          <i class="fa-solid fa-pen prefix"></i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
        <div class="col s12 input-field">
          <button type="submit" class="bn btn-small blue"><i class="fa-solid fa-paper-plane left"></i>Enviar</button>
          <button type="reset" class="bn btn-small blue"><i class="fa-solid fa-eraser left"></i>Limpar</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection