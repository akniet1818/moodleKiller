<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom">
    <div class="container-fluid">

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <!--LEFT SIDE OF NAVBAR-->

            <!--LOGO AND TEXT MOODLE KILLER-->
            <ul class="navbar-nav mx-2 py-lg-0 py-sm-2  ">
                <li class="nav-item">
                    <a href="/notregged" class="navbar-brand">
                        <span class="logo d-none d-sm-inline">
                            <img width="30" height="35" src="https://moodle.astanait.edu.kz/pluginfile.php/1/core_admin/logocompact/100x100/1640173744/logo%20AITU%28imageonly%29.png" alt="Astana IT University">
                            </span>
                        <span class="mt-5 fs-6" style="font-family: 'Nunito', sans-serif">
                            Moodle Killer
                        </span>
                    </a>
                </li>
            </ul>

            <!--LANGUAGE-->
            <ul class="navbar-nav mx-2 me-2 py-lg-0 py-sm-2  ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li onclick="pushUpMessage()">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-globe"></i>
                                English
                            </a>
                        </li>
                        <li onclick="pushUpMessage()">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-language"></i>
                                Russian
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!--THEME-->
            <ul class="navbar-nav mx-2 me-auto py-lg-0 py-sm-2  ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" >
                        Theme
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li onclick="pushUpMessage()">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-star-o"></i>
                                Light
                            </a>
                        </li>
                        <li onclick="pushUpMessage()">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-star"></i>
                                Dark
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!--RIGHT SIDE OF NAVBAR-->
            <div class="d-flex ">
                <ul class="navbar-nav mx-2 me-2 py-lg-0 py-sm-1 my-auto">
                    <li class="nav-item dropdown mx-0">
                        <a href="/login">
                            Log in
                        </a>
                        /
                        <a href="/register">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
