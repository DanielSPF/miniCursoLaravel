<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('site') }}/assets/img//apple-touch-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('site') }}/assets/img//favicon-32x32.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    @yield('title') | Dashboard | Minicurso Laravel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('dashboard') }}/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('dashboard') }}/assets/demo/demo.css" rel="stylesheet" />

  @stack('css')

</head>

<body class="">

  <div class="wrapper ">

    {{-- Inclui o sidebar --}}
    @include('layouts.dashboard.parts.sidebar')

    <div class="main-panel">
      {{-- Inclui o navbar --}}
      @include('layouts.dashboard.parts.navbar')
      {{-- Inclui o conteudo --}}
      @yield('content')
      {{-- Inclui o footer --}}
      @include('layouts.dashboard.parts.footer')

    </div>

  </div>

  <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(-231px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
          <li class="header-title">Menu</li>
          <li class="adjustments-line">
            <a id="back_color" href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-light @if(auth()->user()->menu_back_color == 'white') active @endif" data-color="white"></span>
                <span class="badge filter badge-dark  @if(auth()->user()->menu_back_color == 'black') active @endif" data-color="black"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="header-title">Menu ativo</li>
          <li class="adjustments-line text-center">
            <a id="active_color" href="javascript:void(0)" class="switch-trigger active-color">
            <span class="badge filter badge-primary @if(auth()->user()->menu_active_color == 'primary') active @endif" data-color="primary"></span>
              <span class="badge filter badge-info @if(auth()->user()->menu_active_color == 'info') active @endif" data-color="info"></span>
              <span class="badge filter badge-success  @if(auth()->user()->menu_active_color == 'success') active @endif" data-color="success"></span>
              <span class="badge filter badge-warning  @if(auth()->user()->menu_active_color == 'warning') active @endif" data-color="warning"></span>
              <span class="badge filter badge-danger  @if(auth()->user()->menu_active_color == 'danger') active @endif" data-color="danger"></span>
            </a>
          </li>
          <li class="button-container">
            <a href="#" onclick="chanceColors(event)" class="btn btn-success btn-block btn-round"> <i class="fa fa-save"></i> Salvar</a>
          </li>
        </ul>
      </div>
    </div>
    <form id="form_colors" action="{{ route('chance.colors') }}" method="post" style="display:none">
      @csrf
      <input id="back_color" value="" name="back_color" type="text">
      <input id="active_color"  value="" name="active_color" type="text">
    </form>

  <!--   Core JS Files   -->
  <script src="{{ asset('dashboard') }}/assets/js/core/jquery.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/js/core/popper.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('dashboard') }}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('dashboard') }}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('dashboard') }}/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('dashboard') }}/assets/demo/demo.js"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();

    });

    // função que altera as cores do layout
    function chanceColors(e) {

      e.preventDefault();
      var back_color = $('#back_color>div>.active').attr('data-color');
      var active_color = $('#active_color>.active').attr('data-color');
      $('input[name="back_color"]').val(back_color);
      $('input[name="active_color"]').val(active_color);
      $('#form_colors').submit();

    }
  </script>

  @if (session('success'))
    <script>

       $.notify({
          icon: "nc-icon nc-check-2",
          message: "{{ session('success') }}"

        }, {
            type: 'success',
            timer: 1000,
            placement: {
              from: 'top',
              align: 'right'
            }
      });

    </script>
  @endif

  @if (session('error'))
    <script>

       $.notify({
          icon: "nc-icon nc-simple-remove",
          message: "{{ session('error') }}"

        }, {
            type: 'danger',
            timer: 1000,
            placement: {
              from: 'top',
              align: 'right'
            }
      });

    </script>
  @endif

  @stack('js')

</body>

</html>
