

    <div class="c-wrapper">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>
          <a class="c-header-brand d-sm-none" href="#">
            <img class="c-header-brand-full c-d-dark-none" src="{{ url('/assets/brand/coreui-pro-base.svg') }}" width="118" height="46" alt="CoreUI Logo">
            <img class="c-header-brand-minimized c-d-dark-none" src="{{ url('/assets/brand/coreui-signet.svg') }}" width="46" height="46" alt="CoreUI Logo">
            <img class="c-header-brand-full c-d-light-none" src="{{ url('/assets/brand/coreui-pro-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
            <img class="c-header-brand-minimized c-d-light-none" src="{{ url('/assets/brand/coreui-signet-white.svg') }}" width="46" height="46" alt="CoreUI Logo">
          </a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
            use App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['top menu'])){
                FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
            }
        ?>
        <ul class="c-header-nav ml-auto">

          <li class="c-header-nav-item px-3">
            <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
              <svg class="c-icon c-d-dark-none">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-moon') }}"></use>
              </svg>
              <svg class="c-icon c-d-default-none">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-sun') }}"></use>
              </svg>
            </button>
          </li>
        </ul>
        <ul class="c-header-nav">

          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-icon cil-user "> </div>
                  {{--<div class="c-avatar"><img class="c-avatar-img" src="/assets/img/avatars/6.jpg" alt="user@email.com"></div>--}}
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('/icons/sprites/free.svg#cil-user') }}"></use>
                    </svg> Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-bell') }}"></use>
                </svg> Updates<span class="badge badge-info ml-auto">0</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-envelope-open') }}"></use>
                </svg> Messages<span class="badge badge-success ml-auto">0</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-task') }}"></use>
                </svg> Tasks<span class="badge badge-danger ml-auto">0</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-comment-square') }}"></use>
                </svg> Comments<span class="badge badge-warning ml-auto">0</span></a>
              {{--<div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">

                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-settings') }}"></use>
                </svg> Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-credit-card') }}"></use>
                </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-file') }}"></use>
                </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>--}}
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">

                <svg class="c-icon mr-2">
                  <use xlink:href="{{ url('/icons/sprites/free.svg#cil-account-logout') }}"></use>
                </svg> <form action="{{ url('/logout') }}" method="POST"> @csrf <button type="submit" class="btn btn-ghost-dark btn-block">Logout</button></form></a>
            </div>
          </li>
          <li class="c-header-nav-item px-3">
            <button class="c-class-toggler c-header-nav-btn" type="button" data-target="#aside" data-class="c-sidebar-show">
              <svg class="c-icon c-icon-lg mr-2">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-applications-settings') }}"></use>
              </svg>
            </button>
          </li>
        </ul>




        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
            <?php $segments = ''; ?>
            @for($i = 1; $i <= count(Request::segments()); $i++)
                <?php $segments .= '/'. Request::segment($i); ?>
                @if($i < count(Request::segments()))
                    <li class="breadcrumb-item">{{ Request::segment($i) }}</li>
                @else
                    <li class="breadcrumb-item active">{{ Request::segment($i) }}</li>
                @endif
            @endfor
            <!-- Breadcrumb Menu-->
          </ol>
          {{--<div class="c-header-nav ml-auto d-md-down-none mr-2"><a class="c-header-nav-link" href="#">

              <svg class="c-icon">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-graph') }}"></use>
              </svg>  Dashboard</a><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="{{ url('/icons/sprites/free.svg#cil-settings') }}"></use>
              </svg>  Settings</a></div>
        </div>--}}
      </header>
