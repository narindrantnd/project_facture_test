@extends('base')

@section('title', 'login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">

                <h1 class="text-center text-muted mb-5 mt-5"> Connectez-vous </h1>

                <form method="POST" action="{{route('login')}}" id="form-login">
                    @csrf

                    @error('email')
                        <div class="alert alert-danger text-center" role="alert">
                            {{-- {{ $message }} --}}vzgkopzre
                        </div>
                    @enderror


                    @error('password')
                        <div class="alert alert-danger text-center" role="alert">
                            {{-- {{ $message }} --}} vdvozprkr
                        </div>
                    @enderror

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror"  required autocomplete="curent-password">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">se souvenir de moi</label>
                            </div>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="#"> Mot de passe oublié?</a>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit"> se connecter </button>
                    </div>

                    <p class="text-center text-muted mt-5"> Pas encore enregistrer? <a href="{{ route('register') }}"> Creer un compte </a></p>
                </form>
            </div>
        </div>

    </div>

    <script>

        $('#form-login').submit();

        var form_login = document.getElementById('form-login');
                            form_login.addEventListener('submit', function(event){
                            event.preventDefault();
                            window.location.href = 'facturation2';
                        })
    </script>


@endsection
