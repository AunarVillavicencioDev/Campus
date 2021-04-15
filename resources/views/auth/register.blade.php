@extends('layouts.master-without-nav')
@section('title')
Register
@endsection
@section('content')
<div class="home-btn d-none d-sm-block">
    <a href="{{ url('index') }}" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="{{ url('index') }}" class="mb-5 d-block auth-logo">
                        <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="22"
                             class="logo logo-dark">
                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="22"
                             class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mt-2">
                            <h5 class="text-primary">Register Account</h5>
                            <p class="text-muted">Get your free Minible account now.</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input type="hidden" name="name" value="">
                                <div class="mb-3">
                                    <label class="form-label" for="type_document">{{__('register.type_document')}}</label>
                                    <select class="form-control @error('type_document') is-invalid @enderror" name="type_document" value="{{ old('type_document') }}" id="type_document">
                                        <option value="">Seleciones una opcion</option>
                                        <option value="TI" {{ ( old('type_document') == 'TI') ? 'selected' : '' }}>Tarjeta de identidad</option>
                                        <option value="CC" {{ ( old('type_document') == 'CC') ? 'selected' : '' }}>Cédula de ciudadanía</option>
                                        <option value="DE" {{ ( old('type_document') == 'DE') ? 'selected' : '' }}>Documento de identidad extranjera</option>
                                        <option value="CE" {{ ( old('type_document') == 'CE') ? 'selected' : '' }}>Cédula de extranjería</option> 
                                    </select>
                                    @error('type_document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="document">{{__('register.document')}}</label>
                                    <input type="text" class="form-control @error('document') is-invalid @enderror"
                                           name="document" value="{{ old('document') }}" id="document"
                                           placeholder="Ingrese {{__('register.document')}}">
                                    @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">{{__('register.mail')}}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" id="email" placeholder="Ingrese {{__('register.mail')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">{{__('register.pass')}}</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" id="userpassword" placeholder="Ingrese {{__('register.pass')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password_confirmation">{{__('register.passCof')}}</label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           name="password_confirmation" id="password_confirmation"
                                           placeholder="Ingrese {{__('register.passCof')}}">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="movil">{{__('register.movil')}}</label>
                                    <input type="tel" class="form-control @error('movil') is-invalid @enderror"
                                           name="movil" value="{{ old('movil') }}" id="movil" pattern="[0-9]{10}"
                                           placeholder="Ingrese {{__('register.movil')}}">
                                    @error('movil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input @error('aceptar_terminos') is-invalid @enderror" name="aceptar_terminos" id="auth-terms-condition-check" value="Acepta">
                                    <label class="form-check-label" for="auth-terms-condition-check">Yo  <a
                                            href="javascript: void(0);" class="text-dark">{{__('register.termi')}}</a></label>
                                    @error('aceptar_terminos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light"
                                            type="submit">Register</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 title">Sign up using</h5>
                                    </div>


                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                               class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                               class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                               class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="text-muted mb-0">Already have an account ? <a href="{{ url('login') }}"
                                                                                            class="fw-medium text-primary"> Login</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>© <script>
                        document.write(new Date().getFullYear())

                        </script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
