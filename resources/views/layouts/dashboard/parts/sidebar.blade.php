
<div class="sidebar" data-color="{{ auth()->user()->menu_back_color }}" data-active-color="{{ auth()->user()->menu_active_color }}">
<!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
<div class="logo">
    <a href="@if(auth()->user()->is_admin) {{ route('admin.home') }} @else {{ route('member.home') }} @endif" class="simple-text logo-mini">
    <div class="logo-image-small">
        <img src="{{ asset('site') }}/assets/img/favicon-32x32.png">
    </div>
    </a>
    <a href="@if(auth()->user()->is_admin) {{ route('admin.home') }} @else {{ route('member.home') }} @endif" class="simple-text logo-normal">
    Laravel
    </a>
</div>

<div class="sidebar-wrapper">
    <ul class="nav">
        @if (auth()->user()->is_admin)
        <li class="@if(Route::currentRouteName() == 'admin.home') active @endif">
            <a href="{{ route('admin.home') }}">
            <i class="nc-icon nc-bank"></i>
            <p>Home</p>
            </a>
        </li>
        <li class="@if(Route::currentRouteName() == 'admin.members') active @endif">
            <a href="{{ route('admin.members') }}">
            <i class="nc-icon nc-diamond"></i>
            <p>Membros</p>
            </a>
        </li>
        <li class="@if(Route::currentRouteName() == 'admin.managers') active @endif">
            <a href="{{ route('admin.managers') }}">
            <i class="nc-icon nc-badge"></i>
            <p>Administradores</p>
            </a>
        </li>
        @else
        <li class="@if(Route::currentRouteName() == 'member.home') active @endif">
            <a href="{{ route('member.home') }}">
            <i class="nc-icon nc-bank"></i>
            <p>Home</p>
            </a>
        </li>
        @endif
    </ul>
</div>

</div>