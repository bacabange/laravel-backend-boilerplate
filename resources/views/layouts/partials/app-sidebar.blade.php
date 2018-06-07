<nav class="side-navbar">
    <!-- Sidebar Header-->
    @component('components.sidebar-header')
        @slot('name')
            {{ Auth::user()->name }}
        @endslot

        @slot('job')
            Web Developer
        @endslot
    @endcomponent

    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">

        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-tachometer"></i>{{ __('Dashboard') }}
            </a>
        </li>

        <li class="{{ request()->is('users') ? 'active' : '' }}">
            <a href="#usersDropdown" aria-expanded="{{ request()->is('users') ? 'true' : 'false' }}" data-toggle="collapse">
                <i class="fa fa-users"></i>{{ __('Users') }}
            </a>

            <ul id="usersDropdown" class="collapse list-unstyled {{ request()->is('users') ? 'show' : '' }}">
                <li class="{{ request()->is('users') ? 'active' : '' }}"><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
                <li><a href="#">{{ __('Roles') }}</a></li>
                <li><a href="#">{{ __('Permissions') }}</a></li>
            </ul>
        </li>
    </ul>
    <span class="heading">{{ __('Configuration') }}</span>
    <ul class="list-unstyled">
        <li> <a href="#"> <i class="fa fa-cog"></i>{{ __('General') }} </a></li>
    </ul>
</nav>