<!DOCTYPE html>

<html lang="pt-br">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Voe bem">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    {{-- FONT IMPORT --}}
    <link href="{{ asset('font/style.css') }}" rel="stylesheet">

    <!--begin::Base Styles -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/logo.svg') }}" />

</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading"
    cz-shortcut-listen="false">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item m-header ">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">

                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand" style="background: #363740 !important">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="{{ route('index') }}" class="m-brand__logo-wrapper">
                                    <img alt="" src="{{ asset('assets/demo/default/media/img/logo/voe-bem.svg') }}" />
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>

                                <!-- END -->


                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav"
                        style="background: #F7F8FC !important; box-shadow:none">
                    </div>
                </div>
            </div>
        </header>

        <!-- END: Header -->

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark" m-menu-vertical="1"
                    m-menu-scrollable="1" m-menu-dropdown-timeout="500"
                    style="position: relative;background: #363740 !important">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/home.svg') }}" alt="">
                                <span class="m-menu__link-text menu-span">Home</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('passengers.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/passengers.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Passageiros</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('flights.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/flights.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Voos</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('airports.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/airports.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Aeroportos</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('airships.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/airplanes.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Aeronaves</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('airlines.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/airlines.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">C. Aéreas</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('countries.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/country.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Países</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('states.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/states.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">UFs</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('equipments.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/equipments.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Equipamentos</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('flightroutes.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/rotes.png') }}" alt="">

                                <span class="m-menu__link-text menu-span">Rotas de Voos</span>

                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('reserves.index') }}" class="m-menu__link ">
                                <img src="{{ asset('images/side-icons/reserves.svg') }}" alt="">

                                <span class="m-menu__link-text menu-span">Reservas</span>

                            </a>
                        </li>

                    </ul>
                </div>

                <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->

            <div class="m-grid__item m-grid__item--fluid m-wrapper" style="background: #F7F8FC !important">
                @yield('container')
            </div>
        </div>

        <!-- end:: Body -->

    </div>
    <div id="alerts"></div>
    <!-- end:: Page -->

    <!--begin::Base Scripts -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/select.js') }}" type="text/javascript"></script>
    <script src="{{ asset('mask/dist/jquery.mask.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('.register-input').on('keydown', function() {
                setTimeout(() => {
                    $(this).val($(this).val().toUpperCase());
                }, 1);
            });
        });
    </script>
    @stack('js')

    @if (Session::has('success'))
        <script>
            const success = new popupAlert("<?= Session::get('success') ?>", 1, 3000);
            success.create();
        </script>
    @endif

    @if(Session::has('error'))
        <script>
            const error = new popupAlert("<?= Session::get('error'); ?>", 2, 3000 );
            error.create();
        </script>
    @endif

    @if(Session::has('info'))
        <script>
            const info = new popupAlert("<?= Session::get('info'); ?>", 1, 3000 );
            info.create();
        </script>
    @endif

    @if(Session::has('warning'))
        <script>
            const warning = new popupAlert("<?= Session::get('warning'); ?>", 2, 3000 );
            warning.create();
        </script>
    @endif

    <!--end::Base Scripts -->
</body>

<!-- end::Body -->

</html>
