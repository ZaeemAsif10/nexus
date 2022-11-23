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
                {{-- subdrop --}}
                @if (Auth::user()->role == 'admin')
                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Dashboard</span> <span
                                class="menu-arrow"></span></a>
                    </li>
                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Project Managment</span> <span
                                class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('projects') || Route::is('project/details')) style="display: block;"
                            @else
                            style="display: none;" @endif>
                            <li>
                                <a class="{{ Route::is('projects') ? 'menuss-active' : '' }}"
                                    href="{{ route('projects') }}"> <span>Projects</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Dealers Management</span>
                            <span class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('dealers')) style="display: block;"
                            @else
                            style="display: none;" @endif>
                            <li>
                                <a class="{{ Route::is('dealers') ? 'menuss-active' : '' }}"
                                    href="{{ route('dealers') }}"> <span>Dealers</span></a>
                            </li>
                        </ul>
                    </li>


                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Customers Management</span>
                            <span class="menu-arrow"></span></a>
                        <ul
                            <li>
                                <a href="{{url('customers') }}"> <span>Customers</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Features</span>
                            <span class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('features')) style="display: block;"
                            @else
                            style="display: none;" @endif
                            >
                            <li>
                                <a class="{{ Route::is('features') ? 'menuss-active' : '' }}"
                                    href="{{ route('features') }}"> <span>Feature</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Contact List</span> <span
                                class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('contact-list')) style="display: block;"
                            @else
                            style="display: none;" @endif>
                            <li>
                                <a class="{{ Route::is('contact-list') ? 'menuss-active' : '' }}"
                                    href="{{ route('contact-list') }}"> <span>Contact List</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" class=""><i class="la la-user"></i> <span>Payment Plans</span> <span
                                class="menu-arrow"></span></a>
                        <ul
                            @if (Route::is('payment-plan'))
                            style="display: block;"
                            @else
                            style="display: none;" @endif>
                            <li>
                                <a class="{{ Route::is('payment-plan') ? 'menuss-active' : '' }}"
                                    href="{{ route('payment-plan') }}"> <span>Payment Plan</span></a>
                            </li>
                        </ul>
                    </li>


                    <li class="submenu">
                        <a href="#" class="">
                            <i class="la la-user"></i> <span>Inventory/Stock </span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a class="" href="{{ url('products') }}"> <span>Products</span></a>
                                <a class="" href="{{ url('files') }}"> <span>Create Files</span></a>
                                <a class="" href="{{ url('issue-files') }}"> <span>Issue Files</span></a>
                                <a class="" href="{{ url('processing-files') }}"> <span>Processing Files</span></a>
                            </li>
                        </ul>
                    </li>


            <li class="submenu">
                <a href="#" class="">
                    <i class="la la-user"></i> <span>My Invoices </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a class="" href="{{ url('my-invoices') }}"> <span>My Invoices</span></a>

                    </li>
                </ul>
            </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
