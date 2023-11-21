<nav class="blue">
  <div class="nav-wrapper container">
    <a href="{{ route('home') }}" class="brand-logo light">Nome do Site</a>
    {{-- menu para desktop --}}
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('servicos') }}">Serviços</a></li>
      <li><a href="{{ route('galeria') }}">Galeria</a></li>
      <li><a href="{{ route('contato') }}">Contato</a></li>
    </ul>
  </div>
</nav>