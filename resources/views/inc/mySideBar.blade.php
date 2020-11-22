{{-- Home --}}
<li onclick="window.location.href = '{{ route('home') }}' "
    class="menu {{ $category_name === 'dashboard' ? 'active' : '' }}">
    <a href="{{ route('home') }}" data-active="{{ $category_name === 'dashboard' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'dashboard' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <span>Dashboard</span>
        </div>
    </a>
</li>
{{-- End Home --}}


{{-- Smart Decisions --}}
<li onclick="window.location.href = '{{ route('smartDetactions') }}' "
    class="menu {{ $category_name === 'smart-decisions' ? 'active' : '' }}">
    <a href="{{ route('smartDetactions') }}" data-active="{{ $category_name === 'smart-decisions' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'smart-decisions' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-pie-chart">
                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
            </svg>

            <span>Smart Decisions</span>
        </div>
    </a>
</li>
{{-- End Smart Decisions --}}



{{-- Admins & roles --}}
<li class="menu {{ $category_name === 'admins & roles' ? 'active' : '' }}">
    <a href="#admins_roles" data-active="{{ $category_name === 'admins & roles' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'admins & roles' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-map">
                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                <line x1="8" y1="2" x2="8" y2="18"></line>
                <line x1="16" y1="6" x2="16" y2="22"></line>
            </svg>
            <span>Admins & Roles</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ $category_name === 'admins & roles' ? 'show' : '' }}" id="admins_roles"
        data-parent="#accordionExample">
        <li class="{{ $page_name === 'admins' ? 'active' : '' }}">
            <a href="{{ route('admins.index') }}"> Admins </a>
        </li>
        <li class="{{ $page_name === 'roles' ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}"> Roles </a>
        </li>
    </ul>
</li>
{{-- end admins and roles --}}

{{-- customers --}}
<li onclick="window.location.href = '{{ route('customers.index') }}' "
    class="menu {{ $category_name === 'customers' ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}" data-active="{{ $category_name === 'customers' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'customers' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>

            <span>Customers</span>
        </div>
    </a>
</li>
{{-- End customers --}}


{{-- serviceProivders --}}
<li class="menu {{ $category_name === 'serviceProivders' ? 'active' : '' }}">
    <a href="#serviceProivders" data-active="{{ $category_name === 'serviceProivders' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'serviceProivders' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span style='font-size: 90%'>Service Providers</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ $category_name === 'serviceProivders' ? 'show' : '' }}"
        id="serviceProivders" data-parent="#accordionExample">
        <li class="{{ $page_name === 'serviceProvider' ? 'active' : '' }}">
            <a href="{{ route('serviceProvider.index') }}"> Service Providers </a>
        </li>

        <li class="{{ $page_name === 'country' ? 'active' : '' }}">
            <a href=""> Trace <br> Service Providers</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href=""> Distribution <br>Of Services</a>
        </li>
    </ul>
</li>
{{-- end serviceProivders --}}



{{-- Services --}}
<li class="menu {{ $category_name === 'services' ? 'active' : '' }}">
    <a href="#services" data-active="{{ $category_name === 'services' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'services' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-inbox">
                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                <path
                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                </path>
            </svg>
            <span>Services</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ $category_name === 'services' ? 'show' : '' }}"
        id="services" data-parent="#accordionExample">
        <li class="{{ $page_name === 'country' ? 'active' : '' }}">
            <a href="{{ route('countries.index') }}"> List Services </a>
        </li>

        <li class="{{ $page_name === 'country' ? 'active' : '' }}">
            <a href="{{ route('countries.index') }}"> Main Services</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Categories</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Required Works</a>
        </li>
    </ul>
</li>
{{-- end services --}}



{{-- Locations --}}
<li class="menu {{ $category_name === 'locations' ? 'active' : '' }}">
    <a href="#locations" data-active="{{ $category_name === 'locations' ? 'true' : 'false' }}" data-toggle="collapse"
        aria-expanded="{{ $category_name === 'locations' ? 'true' : 'false' }}" class="dropdown-toggle">
        <div class="">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-map">
                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                <line x1="8" y1="2" x2="8" y2="18"></line>
                <line x1="16" y1="6" x2="16" y2="22"></line>
            </svg>
            <span>Locations</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ $category_name === 'locations' ? 'show' : '' }}" id="locations"
        data-parent="#accordionExample">
        <li class="{{ $page_name === 'country' ? 'active' : '' }}">
            <a href="{{ route('countries.index') }}"> Countries </a>
        </li>
        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Cities </a>
        </li>
    </ul>
</li>
{{-- End locations --}}


{{-- Reports --}}
<li class="menu {{ $category_name === 'reports' ? 'active' : '' }}">
    <a href="#reports" data-active="{{ $category_name === 'reports' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'reports' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
            <span>Reports</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ $category_name === 'reports' ? 'show' : '' }}"
        id="reports" data-parent="#accordionExample">

        <li class="{{ $page_name === 'country' ? 'active' : '' }}">
            <a href="{{ route('countries.index') }}"> Main Services</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Categories</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Required Works</a>
        </li>

        <li class="{{ $page_name === 'city' ? 'active' : '' }}">
            <a href="{{ route('cities.index') }}"> Orders</a>
        </li>

    </ul>
</li>
{{-- end Reports --}}


{{-- Advertisements --}}
<li onclick="window.location.href = '{{ route('smartDetactions') }}' "
    class="menu {{ $category_name === 'advertisements' ? 'active' : '' }}">
    <a href="{{ route('smartDetactions') }}" data-active="{{ $category_name === 'advertisements' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'advertisements' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
            <span>Advertisements</span>
        </div>
    </a>
</li>
{{--    Advertisements  --}}


{{-- chat --}}
<li onclick="window.location.href = '{{ route('chat') }}' "
    class="menu {{ $category_name === 'chat' ? 'active' : '' }}">
    <a href="{{ route('smartDetactions') }}" data-active="{{ $category_name === 'chat' ? 'true' : 'false' }}"
        data-toggle="collapse" aria-expanded="{{ $category_name === 'chat' ? 'true' : 'false' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-mail">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                </path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <span>Chat</span>
        </div>
    </a>
</li>
{{-- end chat --}}
