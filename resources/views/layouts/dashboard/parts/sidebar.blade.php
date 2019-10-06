
<div class="sidebar" data-color="{{ auth()->user()->menu_back_color }}" data-active-color="{{ auth()->user()->menu_active_color }}">
<!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
<div class="logo">
    <a href="#" class="simple-text logo-mini">
    <div class="logo-image-small">
        <img src="{{ asset('site') }}/assets/img//favicon-32x32.png">
    </div>
    </a>
    <a href="#" class="simple-text logo-normal">
    Laravel
    </a>
</div>

<div class="sidebar-wrapper">
    <ul class="nav">
    <li class="active ">
        <a href="#">
        <i class="nc-icon nc-bank"></i>
        <p>Home</p>
        </a>
    </li>
    <li>
        <a href="#">
        <i class="nc-icon nc-diamond"></i>
        <p>Membros</p>
        </a>
    </li>
    <li>
        <a href="#">
        <i class="nc-icon nc-badge"></i>
        <p>Administradores</p>
        </a>
    </li>
    </ul>
</div>

</div>