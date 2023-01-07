<?php
/*
    $data = $menuel['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . url($data[$i]['href']) . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>

        <div class="c-sidebar-brand">
            <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/Repair-IconFull.png') }}" width="165" height="65" alt="RepairSnappz Logo">
            <img class="c-sidebar-brand-minimized" src="{{ url('/assets/brand/Repair-Icon.png') }}" width="65" height="65" alt="RepairSnappz Logo">
        </div>
{{--        <div >
            <p class="h2">RepairSnappz</p>
        </div>--}}
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('dashboard')}}">
                    <i class="cil-speedometer c-sidebar-nav-icon"></i>

                    Dashboard
                </a>
            </li>



            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-notes c-sidebar-nav-icon"></i>Orders</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('adminhome')}}"><span class="c-sidebar-nav-icon"></span>Manage Orders</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('adminhome')}}"><span class="c-sidebar-nav-icon"></span>Order Settings</a></li>
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-wc c-sidebar-nav-icon"></i>Customers</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('adminhome')}}"><span class="c-sidebar-nav-icon"></span>Customer Maintenance</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('adminhome')}}"><span class="c-sidebar-nav-icon"></span>Customer Settings</a></li>
                </ul>
            </li>


            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('adminhome')}}">
                    <i class="cil-truck c-sidebar-nav-icon"></i>

                    Deliveries (Future)
                </a>
            </li>


            @auth
                @role('admin')
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="cil-font c-sidebar-nav-icon"></i>Admin</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('userlanding')}}"><span class="c-sidebar-nav-icon"></span>Manage Users</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('userlanding')}}"><span class="c-sidebar-nav-icon"></span>System Settings</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('userlanding')}}"><span class="c-sidebar-nav-icon"></span>Store Setup</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('userlanding')}}"><span class="c-sidebar-nav-icon"></span>Licensing & Billing</a></li>
                </ul>
            </li>
                @endrole
            @endauth
       {{-- @if(isset($appMenus['sidebar menu']))
            @foreach($appMenus['sidebar menu'] as $menuel)
                @if($menuel['slug'] === 'link')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ url($menuel['href']) }}">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif
                        {{ $menuel['name'] }}
                        </a>
                    </li>
                @elseif($menuel['slug'] === 'dropdown')
                    <?php renderDropdown($menuel) ?>
                @elseif($menuel['slug'] === 'title')
                    <li class="c-sidebar-nav-title">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif
                        {{ $menuel['name'] }}
                    </li>
                @endif
            @endforeach
        @endif--}}
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
    </div>
