@extends('layouts.app')

@section('content')
    <div id="page" class="container-fluid d-print-block mb-3 mt-3">
        <fieldset class="py-2 text-center px-5    ">
            <span style="font-size: 40px; font-weight: 300">{{$about_subject}}</span>
            <div style="" class="row-fuiled">
                <ul class="nav nav-pills mx-2 my-2 justify-content-center" role="tablist">
                    <li class="nav-item" >
                        <a href="/courses/{{$course_name}}" class="nav-link @yield('buttons_status_overview_of_course')">
                            Overview of course
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a href="/courses/{{$course_name}}/grades" class="nav-link @yield('buttons_status_user_report')">
                            User Report
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a href="/courses/grades" class="nav-link @yield('buttons_status_overview_of_courses')">
                            Overview Report
                        </a>
                    </li>
                </ul>
            </div>
        </fieldset>


    </div>

    <div class="mb-3">

        <!--TABLE-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    @yield('grades_table')
                </fieldset>
            </div>
        </div>


@endsection()
