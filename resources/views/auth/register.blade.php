@extends('layouts.app')

@section('content')
<main>
    <div id="primary" class="blue4 p-t-b-100 height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-danger">
                    LOGO ISECU
                </div>
                <div class="col-lg-6 p-t-100">
                    <div class="text-white">
                        <h1>Bienvenue sur, I SECU</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Nous t'invintons à t'inscrire afin de bénéficier de nos services</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-user-o"></i>
                                    <input type="text" class="form-control form-control-lg no-b"
                                    name="name" value="{{ old('name') }}" placeholder="Pseudo">
                                </div>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="email" class="form-control form-control-lg no-b"
                                    name="email" value="{{ old('email') }}" placeholder="Adresse E-mail">
                                </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input type="password" class="form-control form-control-lg no-b"
                                        name="password" placeholder="Mot de passe">
                                    </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input type="password" class="form-control form-control-lg no-b"
                                        name="password_confirmation" placeholder="Confirmation mot de passe">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success btn-lg btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>

@endsection
