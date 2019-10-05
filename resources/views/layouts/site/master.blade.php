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
    @yield('title', 'Início') | Minicurso Laravel
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('site') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('site') }}/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />

  @stack('css')
  
</head>

<body class="sidebar-collapse"  id="inicio">
  {{-- Incluindo o Navbar --}}
  @if (Route::currentRouteName() == 'site')
    @include('layouts.site.parts.navbar')  
  @endif

  @yield('content')

  @include('layouts.site.parts.footer')

  <!--   Core JS Files   -->
  <script src="{{ asset('site') }}/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('site') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('site') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('site') }}/assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>

  <script>
    $(document).ready(function(){
        // Selecione o item do menu com # e adiciono o evento click
        $('nav a[href^="#"]').on('click', function(e){
            // Previno a ação default do click
            e.preventDefault();
            // Pego o id do item clicado
            var id = $(this).attr('href'), 
            targetOffset = $(id).offset().top; // Calculo a distancia ate o topo

            $('html, body').animate({ // Adiciono a animação
                scrollTop: targetOffset - 15
            }, 800);


        }); // end nav

    }); // end document
  </script>

  @stack('js')

</body>

</html>
