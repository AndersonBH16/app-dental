<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <!-- Esta parte habilita la imagen del usuario en el sidebar -->
        {{--        <div class="user-profile text-center mt-3">--}}
        {{--            <div class="">--}}
        {{--                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">--}}
        {{--            </div>--}}
        {{--            <div class="mt-3">--}}
        {{--                <h4 class="font-size-16 mb-1">Julia Hudda</h4>--}}
        {{--                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agenda.view') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class=" waves-effect">
                        <i class="ri-group-line"></i>
                        <span>Pacientes</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Inventario</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html"><i class="fas fa-square"></i>Categorías</a></li>
                        <li><a href="email-read.html"><i class="fas fa-box"></i>Productos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-security"></i>
                        <span>Seguridad</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="email-inbox.html">
                                <i class="mdi mdi-account-multiple-outline"></i>Control de Usuarios
                            </a>
                        </li>
                    </ul>
                </li>


                {{--                <li class="menu-title">Pages</li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ri-account-circle-line"></i>--}}
                {{--                        <span>Authentication</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="auth-login.html">Login</a></li>--}}
                {{--                        <li><a href="auth-register.html">Register</a></li>--}}
                {{--                        <li><a href="auth-recoverpw.html">Recover Password</a></li>--}}
                {{--                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ri-profile-line"></i>--}}
                {{--                        <span>Utility</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="pages-starter.html">Starter Page</a></li>--}}
                {{--                        <li><a href="pages-timeline.html">Timeline</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li class="menu-title">Components</li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ri-pencil-ruler-2-line"></i>--}}
                {{--                        <span>UI Elements</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="ui-alerts.html">Alerts</a></li>--}}
                {{--                        <li><a href="ui-buttons.html">Buttons</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ri-vip-crown-2-line"></i>--}}
                {{--                        <span>Advanced UI</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="advance-rangeslider.html">Range Slider</a></li>--}}
                {{--                        <li><a href="advance-roundslider.html">Round Slider</a></li>--}}
                {{--                        <li><a href="advance-session-timeout.html">Session Timeout</a></li>--}}
                {{--                        <li><a href="advance-sweet-alert.html">Sweetalert 2</a></li>--}}
                {{--                        <li><a href="advance-rating.html">Rating</a></li>--}}
                {{--                        <li><a href="advance-notifications.html">Notifications</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="waves-effect">--}}
                {{--                        <i class="ri-eraser-fill"></i>--}}
                {{--                        <span class="badge rounded-pill bg-danger float-end">8</span>--}}
                {{--                        <span>Forms</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="form-elements.html">Form Elements</a></li>--}}
                {{--                        <li><a href="form-validation.html">Form Validation</a></li>--}}
                {{--                        <li><a href="form-advanced.html">Form Advanced Plugins</a></li>--}}
                {{--                        <li><a href="form-editors.html">Form Editors</a></li>--}}
                {{--                        <li><a href="form-uploads.html">Form File Upload</a></li>--}}
                {{--                        <li><a href="form-xeditable.html">Form X-editable</a></li>--}}
                {{--                        <li><a href="form-wizard.html">Form Wizard</a></li>--}}
                {{--                        <li><a href="form-mask.html">Form Mask</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ri-table-2"></i>--}}
                {{--                        <span>Tables</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="tables-basic.html">Basic Tables</a></li>--}}
                {{--                        <li><a href="tables-datatable.html">Data Tables</a></li>--}}
                {{--                        <li><a href="tables-responsive.html">Responsive Table</a></li>--}}
                {{--                        <li><a href="tables-editable.html">Editable Table</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
