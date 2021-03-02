<link rel="stylesheet" href="{{ asset('admin-theme/css/mystyle.css') }}">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-text mx-3">Soraesushi</div>
        <i class="fas fa-home"></i>
    </a>
    <button class="border-0" id="sidebarToggle" style="width: 100%;"></button>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <br>

    <!-- Nav Items -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_index') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
    </li>

    @if(session()->get('position') == session()->get('root'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('sidebar-settings') }}"><i class="fas fas fa-cogs"></i><span>Sidebar settings</span></a>
    </li>
    @endif

    @php $i = 0; $j = 0 @endphp
    @foreach($sidebars as $sidebar)
    @if($sidebar->display == 1)
    @php $i++; $j++ @endphp

        @if($sidebar->parent_id == 0 && $sidebar->dropdown == 0)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($sidebar->link) }}"><i class="{{ $sidebar->image }}"></i><span>{{ $sidebar->title }}</span></a>
            </li>
        @endif

        @if($sidebar->dropdown == 1)
            <li class="nav-item">

            @if($sidebar->parent_id == 0)
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseItem-{{ $i }}" aria-expanded="true" aria-controls="collapseItem-{{ $i }}">
                    <i class="{{ $sidebar->image }}"></i>
                    <span>{{ $sidebar->title }}</span>
                </a>

                <div id="collapseItem-{{ $j }}" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @foreach($sidebar_childs as $sidebar_child)
                        @if($sidebar_child->parent_id == $sidebar->id_sidebar)
                        <a class="collapse-item" href="{{ route($sidebar_child->link) }}">{{ $sidebar_child->title }}</a>
                        @endif
                        @endforeach
                    </div>
                </div>
            @endif

            </li>
        @endif
    @endif
    @endforeach

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
    <!-- End of Sidebar -->
