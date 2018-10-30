@extends('layouts.app')

@section('content')
<div id="app">
<div class="page parallel">
    <div class="d-flex row">
        <div class="col-md-3 white">
            <div class="pt-5 mt-5">
                
            </div>
            <div class="p-5">
                <h3>Bienvenue sur I-SECU</h3>
                <p>Nous t'invitons à te connecter à ton espace clients</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                        <input type="email" class="form-control form-control-lg"
                        name="email" value="{{ old('email') }}" placeholder="Adresse E-mail">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                        <input type="password" class="form-control form-control-lg"
                        name="password" required  placeholder="Mot de passe">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-9 image height-full" data-bg-repeat="false"
             data-bg-possition="center">
             <div class="centrerisecu">
                <img src="{{ asset('img/bg2.jpg') }}" alt=""/>
             </div>
        </div>
    </div>
</div>
@endsection
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>

