<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom">
    <div class="container-fluid">
        <a class="navbar-item ms-2 me-3 my-auto" href="/courses/grades">
            <button class="courses_text" style="border-radius: 5px;">
                Courses
            </button>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon custom-toggler"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <!--LEFT SIDE OF NAVBAR-->

            <!--LOGO AND TEXT MOODLE KILLER-->
            <ul class="navbar-nav mx-2 py-lg-0 py-sm-2  ">
                <li class="nav-item">
                    <a href="/" class="navbar-brand">
                        <span class="logo d-none d-sm-inline">
                            <img width="30" height="35" src="https://moodle.astanait.edu.kz/pluginfile.php/1/core_admin/logocompact/100x100/1640173744/logo%20AITU%28imageonly%29.png" alt="Astana IT University">
                            </span>
                        <span class="mt-5 fs-6" style="font-family: 'Nunito', sans-serif">
                            MoodleKiller Project
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
            <div class="d-flex ms-2 py-lg-0 py-sm-2 ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown mx-0">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="my-auto link-primary fs-6  ">Zaur Berdibekov</span>
                            <img class="my-0 mx-1 rounded-circle " width="25px" height="25px" src="https://moodle.astanait.edu.kz/pluginfile.php/48898/user/icon/boost/f2?rev=2110057" alt="">
                        </a>
                        <!--CONTENT OF DROPDOWN MENU-->
                        <ul class="dropdown-menu dropdown-menu-end text-start"  aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/profile">
                                    <div class="container">
                                        <i class="fa fa-user me-1"></i>
                                        Profile
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="pushUpMessage()">
                                    <div class="container">
                                        <i class="fa fa-cog me-1"></i>
                                        Settings
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/info" onclick="pushUpMessage()">
                                    <div class="container">
                                        <i class="fa fa-copyright me-1"></i>
                                        About us
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="/notregged" onclick="pushUpMessage()">
                                    <div class="container ">
                                        <i class="fa fa-sign-out me-1"></i>
                                        Log out
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
