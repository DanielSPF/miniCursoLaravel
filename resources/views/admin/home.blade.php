@extends('layouts.dashboard.master')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-globe text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Capacity</p>
                            <p class="card-title">150GB
                                <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Update Now
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Revenue</p>
                            <p class="card-title">$ 1,345
                                <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar-o"></i> Last day
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-vector text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Errors</p>
                            <p class="card-title">23
                                <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> In the last hour
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Followers</p>
                            <p class="card-title">+45K
                                <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Update now
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
            </div>
            <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-body ">
                <canvas id="chartEmail"></canvas>
            </div>
            <div class="card-footer ">
                <div class="legend">
                    <i class="fa fa-circle text-primary"></i> Opened
                    <i class="fa fa-circle text-warning"></i> Read
                    <i class="fa fa-circle text-danger"></i> Deleted
                    <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar"></i> Number of emails sent
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
            </div>
            <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
            </div>
            <div class="card-footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Tesla Model S
                    <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                    <i class="fa fa-check"></i> Data information certified
                </div>
            </div>
        </div>
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
        <span class="badge filter badge-primary    @if(auth()->user()->menu_active_color == 'primary') active @endif" data-color="primary"></span>
          <span class="badge filter badge-info     @if(auth()->user()->menu_active_color == 'info') active @endif"    data-color="info"></span>
          <span class="badge filter badge-success  @if(auth()->user()->menu_active_color == 'success') active @endif" data-color="success"></span>
          <span class="badge filter badge-warning  @if(auth()->user()->menu_active_color == 'warning') active @endif" data-color="warning"></span>
          <span class="badge filter badge-danger   @if(auth()->user()->menu_active_color == 'danger') active @endif"  data-color="danger"></span>
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
@endsection

@push('js')
<script>
        // função que atualiza as cores do layout
        function chanceColors(e) {

            e.preventDefault();
            var back_color = $('#back_color>div>.active').attr('data-color');
            var active_color = $('#active_color>.active').attr('data-color');
            $('input[name="back_color"]').val(back_color);
            $('input[name="active_color"]').val(active_color);
            $('#form_colors').submit();

        }

        $(document).ready(function() {
    
          $sidebar = $('.sidebar');
          $sidebar_img_container = $sidebar.find('.sidebar-background');
    
          $full_page = $('.full-page');
    
          $sidebar_responsive = $('body > .navbar-collapse');
          sidebar_mini_active = true;
    
          window_width = $(window).width();
    
          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });
    
          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');
    
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
    
            var new_color = $(this).data('color');
    
            if ($sidebar.length != 0) {
              $sidebar.attr('data-active-color', new_color);
            }
    
            if ($full_page.length != 0) {
              $full_page.attr('data-active-color', new_color);
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-active-color', new_color);
            }
          });
    
          $('.fixed-plugin .background-color span').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
    
            var new_color = $(this).data('color');
    
            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }
    
            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });
    
          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');
    
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');
    
    
            var new_image = $(this).find("img").attr('src');
    
            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }
    
            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }
    
            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });
    
          $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
            $full_page_background = $('.full-page-background');
    
            $input = $(this);
    
            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }
    
              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }
    
              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }
    
              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }
    
              background_image = false;
            }
          });
    
    
          $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
            $body = $('body');
    
            $input = $(this);
    
            if (paperDashboard.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              paperDashboard.misc.sidebar_mini_active = false;
    
              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    
            } else {
    
              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
    
              setTimeout(function() {
                $('body').addClass('sidebar-mini');
    
                paperDashboard.misc.sidebar_mini_active = true;
              }, 300);
            }
    
            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);
    
            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);
    
          });
    
        });
      </script>
@endpush
