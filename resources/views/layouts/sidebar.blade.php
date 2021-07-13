<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('escritorio')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{route('escritorio')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    <a href="{{route('escritorio')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>@lang('translation.Dashboard')</span>
                    </a>
                </li>
                @valiTypeProfileEstudiante(Auth::user()->profile) 

                @if(ActionValidate::valideUserInscripcion())
                <li>
                    <a href="{{route('inscripcion.index')}}">
                        <i class="uil-user-circle"></i>
                        <span>@lang('inscripcion.name')</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{route('cargadocumentos.index')}}">
                        <i class="uil-file-upload-alt"></i>
                        <span>@lang('documentos.name')</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pagos.index')}}">
                        <i class="uil-shopping-cart-alt"></i>
                        <span>@lang('pagos.name')</span>
                    </a>
                </li>
                @endvaliTypeProfileEstudiante

                @valiTypeProfileAdmisiones(Auth::user()->profile)
                <li>
                    <a href="{{route('listadogeneral.index')}}">
                        <i class="uil-list-ul"></i>
                        <span>@lang('listadoGeneral.name')</span>
                    </a>
                </li>

                @endvaliTypeProfileAdmisiones
                <!--                <li>
                                    <a href="{{route('inscripcion.index')}}">
                                        <i class="uil-user-circle"></i>
                                        <span>@lang('inscripcion.name')</span>
                                    </a>
                                </li>-->



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->