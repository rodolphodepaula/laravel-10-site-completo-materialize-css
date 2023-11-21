<nav class="blue">
  <div class="nav-wrapper container">
    {{-- menu hamburger --}}
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <a href="{{ route('home') }}" class="brand-logo light">Nome do Site</a>
    {{-- menu para desktop --}}
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('servicos') }}">Serviços</a></li>
      <li><a href="{{ route('galeria') }}">Galeria</a></li>
      <li><a href="{{ route('contato') }}">Contato</a></li>
    </ul>

    {{-- menu mobile --}}
    <ul id="slide-out" class="sidenav">
      <li><div class="user-view">
        <div class="background">
          <img src="images/office.jpg">
        </div>
        <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
        <a href="#name"><span class="white-text name">John Doe</span></a>
        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
      </div></li>
      <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
      <li><a href="#!">Second Link</a></li>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
  </div>
</nav>