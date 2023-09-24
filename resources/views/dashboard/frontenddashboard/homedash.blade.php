@extends("dashboard.laydashboard.indexdash")
@section("title")
HOME ADMIN
@endsection

@section("content")
<!-- Content Wrapper -->
@yield('content')
    <!-- End of Main Content -->
    <div id="content-wrapper" class="d-flex flex-column">
<div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <!-- Topbar Search -->
             <!-- Navigation Links -->
             <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('user')" :active="request()->routeIs('user')">
                        {{ __('Admin') }}
                    </x-nav-link>
                </div>
            </div>
           </form>
           <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                        <div class="hidden sm:flex sm:items-top sm:ml-3">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-top text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
    @endsection
<!-- End of Content Wrapper -->
