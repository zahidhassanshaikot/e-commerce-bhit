<aside id="sidebar-left" class="sidebar-left">
				
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
            
                <ul class="nav nav-main">
                    <li>
                    <a href="{{route('/')}}">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    <li class="nav-parent nav-expanded nav-active">
                        <a href="#">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                            <span>Menu</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                            <a href="{{route('manage-menu')}}"> Manage Menu </a>
                            </li>
                            <li>
                                {{-- <a href="{{route('manage-sub-menu')}}"> Manage Sub Menu </a> --}}
                            </li>
                         
                           {{-- <li class="nav-parent">
                                <a>
                                    Boxed
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="layouts-boxed.html">
                                            Static Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed-fixed-header.html">
                                            Fixed Header
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li class="nav-parent">
                                <a>
                                    Horizontal Menu Header
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="layouts-header-menu.html">
                                            Pills
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-header-menu-stripe.html">
                                            Stripe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-header-menu-top-line.html">
                                            Top Line
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#">
                            <i class="fas fa-copy" aria-hidden="true"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="#">
                                    Sign Up
                                </a>
                            </li>
                           
                            <li>
                                <a href="#">
                                    Search Results
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#">
                            <i class="fas fa-tasks" aria-hidden="true"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="#">
                                    Typography
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="#">
                                            Elusive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Font Awesome
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Line Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Meteocons
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                          

                </ul>
            </nav>

            <hr class="separator" />

            <div class="sidebar-widget widget-tasks">
                <div class="widget-header">
                    <h6>Projects</h6>
                    <div class="widget-toggle">+</div>
                </div>
                <div class="widget-content">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Porto HTML5 Template</a></li>
                        <li><a href="#">Tucson Template</a></li>
                        <li><a href="#">Porto Admin</a></li>
                    </ul>
                </div>
            </div>

            <hr class="separator" />

            <div class="sidebar-widget widget-stats">
                <div class="widget-header">
                    <h6>Company Stats</h6>
                    <div class="widget-toggle">+</div>
                </div>
                <div class="widget-content">
                    <ul>
                        <li>
                            <span class="stats-title">Stat 1</span>
                            <span class="stats-complete">85%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                    <span class="sr-only">85% Complete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">Stat 2</span>
                            <span class="stats-complete">70%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">Stat 3</span>
                            <span class="stats-complete">2%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                    <span class="sr-only">2% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        

    </div>

</aside>