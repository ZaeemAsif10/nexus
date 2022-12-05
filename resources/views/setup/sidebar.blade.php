<!-- Sidebar -->

<style>
    .menuss-active {
        color: #006dce !important;
    }
</style>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                @if (Auth::user()->role == 'admin')
                    <li>
                        <a href="{{ url('admin') }}" class=""><i class="la la-dashboard"></i><span> Dashboard
                            </span></a>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-project-diagram"></i> <span>Project
                                Management</span> <span class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('projects') || Route::is('project/details')) style="display: block;"
                            @else
                            style="display: none;" @endif>

                            <li>
                                <a class="{{ Route::is('features') ? 'menuss-active' : '' }}"
                                    href="{{ route('features') }}"> <span>Features & Amenities</span></a>
                            </li>

                            <li>
                                <a class="{{ Route::is('projects') ? 'menuss-active' : '' }}"
                                    href="{{ route('projects') }}"> <span>Projects</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-project-diagram"></i> <span>Slider</span> <span
                                class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('home.slider')) style="display: block;"
                            @else
                            style="display: none;" @endif>

                            <li>
                                <a class="{{ Route::is('home.slider') ? 'menuss-active' : '' }}"
                                    href="{{ route('home.slider') }}"> <span>Home Slider</span></a>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
