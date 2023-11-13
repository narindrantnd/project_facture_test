
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">FYTECH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


              {{--
              <li class="nav-item">
                <a class="nav-link" aria-disabled="true" href="{{ route('app_facturation2') }}">Facturation</a>
              </li>
              --}}

              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app_apropos') }}">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="{{ route('login') }}">se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="{{ route('register') }}">s'inscrire</a>
                </li>
              @endguest

              @auth
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="{{ route('app_logout') }}">déconnecter</a>
                </li>
              @endauth


            </ul>
        </div>



    </div>

</nav>





