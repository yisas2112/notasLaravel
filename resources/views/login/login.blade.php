@extends('layouts.notas.app')

@section('title', 'Listado')   


@section('content')
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="{{route('notas.index')}}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="{{route('notas.crear')}}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
            <div class="cards-login">
                <div class="card card-center">
                    <div class="card-body">
                        <form method="POST" action="/authenticate">
                            @csrf
                            <label class="field-label" for="email">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input class="field-input" id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password">{{ __('Password') }}</label>
                            <div>
                                <input class="field-input" id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="field-remember">
                                <label for="remember">{{ __('Remember Me') }}</label>
                                <input id="field-remember-check" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>                
                        </form>
                    </div>
                </div>
            </div>                


@endsection
