<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html"  class="logo-light">
            <img src="https://th.bing.com/th/id/OIP.2jACG3mh0tY7Njbe4nWAmwHaFO?pid=ImgDet&rs=1g"
                alt="logo" class="logo-lg">
            <img src="https://th.bing.com/th/id/OIP.2jACG3mh0tY7Njbe4nWAmwHaFO?pid=ImgDet&rs=1"
                alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="https://th.bing.com/th/id/OIP.2jACG3mh0tY7Njbe4nWAmwHaFO?pid=ImgDet&rs=1"
                alt="dark logo" class="logo-lg">
            <img src="https://th.bing.com/th/id/OIP.2jACG3mh0tY7Njbe4nWAmwHaFO?pid=ImgDet&rs=1"
                alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva
                    Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">
                   

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>my cuenta</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>seguridad</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>seguridad</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>cerrar</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Panel de administracion</li>

            <li class="menu-item">
                <a href="?c=dashboard&m=dashboard" class="menu-link">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text"> Escritorio </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Compañias </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=companies&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> productos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="?c=products&m=index" class="menu-link">
                                <span class="menu-text">Listar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>