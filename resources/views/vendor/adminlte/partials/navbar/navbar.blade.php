@if(auth()->check())
    <nav class="main-header navbar
        {{ config('adminlte.classes_topnav_nav', 'navbar-expand-md') }}
        {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}"
        @if(auth()->user()->role == 'admin')
            style="background-color: #991f1f;"
        @elseif(auth()->user()->role == 'doctor')
            style="background-color: #991f1f;"
        @elseif(auth()->user()->role == 'nurse')
            style="background-color: #e7af41;"
        @elseif(auth()->user()->role == 'dentist')
            style="background-color: #991f1f;"
        @elseif(auth()->user()->role == 'faculty')
            style="background-color: #456fd5;"
        @endif
    >
@else
    style="background-color: #456fd5;"
@endif

    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('adminlte::partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Configured left links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Navbar right links --}}
    <ul class="navbar-nav ml-auto">
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- User menu link --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('adminlte::partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- Right sidebar toggler link --}}
        @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>

</nav>
