@extends('layouts.web.app')

@section('content')
  <div class="row">
             <div class="col-md-4 mx-auto">
                <div class="myform form mt-2 ">
                <h1 class="text-center" style="font-size: 1.5rem;font-weight: 400;margin-bottom: 5%;">{{__('auth.login')}}</h1>
                @if(session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{session('loginError')}} </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <form method="POST" class=" needs-validation" action="{{ route('customer.login') }}">
                    @csrf

                      <div class="form-group">
                        <input autofocus type="email" value="{{ old('email') }}"
                               name="email"
                               class="form-control @error('email') is-invalid @enderror" placeholder="{{__('auth.customer_registration_form_input_email')}}">

                        @error('email')
                        <span class="invalid-feedback error" role="alert">
                            <strong>{{ $message }}</strong>
                           {{-- <strong>Geben Sie Ihre E-Mail-Adresse ein.</strong>--}}
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="{{__('auth.customer_registration_form_input_password')}}">

                        @error('password')
                            <span class="error invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                        <div class="form-group">
                        <div class="row">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <span>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </span>
                                <label for="remember" style="color: #171819; margin-left: 5px; /* font-weight: 400; */font-size: 14px;">
                                    {{__('auth.remember_me')}}
                                </label>
                            </div>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            @if (Route::has('customer.password.reset.request.form'))
                                <a href="{{ route('customer.password.reset.request.form') }}" style="font-size: 12px; /* margin-left: 20px; */">{{__('auth.forget_password')}}</a>
                            @endif
                        </div>
                    </div>
                    </div>

                      <div class="col-12">
                      <button type="submit" class="btn btn-secondary btn-sm" style="width: 100px;background-color:#048BA8;">{{__('auth.login')}}</button>

                    </div>

                      <div class="col-md-12 ">
                         <div class="login-or">


                         </div>
                      </div>
                      <div class="form-group mt-4 text-center">

        or <span><a class="" href="{{ url('/') }}" style="color: #048ba8;font-size: 14px;">{{__('auth.customer_registration_form_return_to_store')}}</a></span>
    </div>

                   </form>
                    <p class="text-gray text-sm text-center">Haben Sie noch kein Kundenkonto? <a href="{{route('customer.register_form')}}"><u>Konto erstellen</u></a></p>
                </div>
             </div>
          </div>


@endsection



