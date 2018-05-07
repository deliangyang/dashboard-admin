<a href="index3.html" class="brand-link">
    <img src="{{ asset('asset/img/AdminLTELogo.png') }}" alt="{{ config('app.name', 'Laravel') }} Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
</a>

<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('asset/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @foreach (config('menu') as $header => $menu)
                <li class="nav-header">{{ $header }}</li>

                @if (isset($menu['sub_menu']) && !empty($menu['sub_menu']))
                    <li class="nav-item has-treeview">
                        <a href="{{ $menu['link'] }}" class="nav-link">
                            <i class="{{ $menu['icon'] }}"></i>
                            <p>
                                {{ $menu['name'] }}
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach ($menu['sub_menu'] as $key => $sub_menu)
                                <li class="nav-item">
                                    <a href="{{ $sub_menu['link'] }}" class="nav-link">
                                        <i class="{{ $sub_menu['icon'] }}"></i>
                                        <p>{{ $sub_menu['name'] }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ $menu['link'] }}" class="nav-link">
                            <i class="{{ $menu['icon'] }}"></i>
                            <p>{{ $menu['name'] }}</p>
                        </a>
                    </li>
                @endif


            @endforeach
        </ul>
    </nav>
</div>
