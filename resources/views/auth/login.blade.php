@extends('layouts.view')

@section('inner-headline')
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading" style="text-align:center">
            <h2>Login</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('content')
<div class="container">

        <div class="span12" style="text-align:center;">
            
            
                <div class="card-body" style="margin-left:-32px;">
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('login.forms.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('login.forms.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                            <p>{{__('login.ketreg') }} <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('login.ketreg') }}
                                </a></p>
                            
                        </div>
                    </form>
                </div>
            
        </div>
    
</div>
@endsection
