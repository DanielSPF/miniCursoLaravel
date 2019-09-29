<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ route('site') }}" rel="tooltip" title="Minicurso Laravel" data-placement="bottom">
          <img src="{{ asset('site') }}/assets/img/logotype.min.svg"  alt="Logo">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="#inicio" class="nav-link">Início</a>
          </li>
          <li class="nav-item active">
            <a href="#sobre" class="nav-link ">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="#equipe" class="nav-link">Nossa equipe</a>
          </li>
          <li class="nav-item">
            <a href="#contato" class="nav-link">Contato</a>
          </li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Painel</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link"> <i class="nc-icon nc-badge"></i> Entrar</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link"> <i class="nc-icon nc-bullet-list-67"></i> Cadastre-se</a>
                    </li>
                    @endif
                @endauth
            @endif
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
