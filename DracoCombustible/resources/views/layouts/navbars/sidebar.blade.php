<div class="sidebar" >
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper" style="background: #333333">
        <div class="logo">
            <a href="/login" class="simple-text">
                {{ __("Rastreo Kosmos") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fa-solid fa-truck "></i>
                    <p>{{ __("Fleet Status") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-address-card"></i>
                    <p>{{ __("Drivers") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-comments"></i>
                    <p>{{ __("Comunicación") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-book-atlas"></i>
                    <p>{{ __("Geozones") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-calendar-day"></i>
                    <p>{{ __("Events") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-route"></i>
                    <p>{{ __("Routing & Task") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <p>{{ __("Maintenance Task") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-tachograph-digital"></i>
                    <p>{{ __("Tachograph files") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-file-signature"></i>  
                    <p>{{ __("Reports") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-leaf"></i>
                    <p>{{ __("Eco Drive") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-chart-line"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <!-- 


            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-notes"></i>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-paper-2"></i>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-atom"></i>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-pin-3"></i>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-bell-55"></i>
                </a>
            </li>
            -->
        </ul>
    </div>
</div>
