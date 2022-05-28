<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <!--FAVICON-->
    <link rel="shortcut icon" href="https://github.com/zaurbbb/moodlekiller-front-end/blob/main/images/profileAva.jpg?raw=true">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS AND FONT-AWESOME-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/05a12f98dd.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">

    <!--BOOTSTRAP5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    <title></title>

    <style>
        body{
            width: 100%;
            margin-top: 65px;
            padding: 0;
        }

        /* width of webkit */
        ::-webkit-scrollbar {
            opacity: 0.5;
            width: 5px;
        }

        /* background of weblit's place */
        ::-webkit-scrollbar-track{
            opacity: 0.5;
            background: #f1f1f1;
        }

        /* if don't mouse on to webkit */
        ::-webkit-scrollbar-thumb {
            background: #C0C0C0;
        }

        /* hover effect*/
        ::-webkit-scrollbar-thumb:hover {
            opacity: 1;
            background: #6495ED;
        }

        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
            color: #191970;
        }

        tr, td{
            height: 50px;
        }
        thead, th{
            font-weight: 600;
        }

        .footerlink{
            color: white;
        }
        .footerlink:hover{
            color: #C0C0C0;
        }

        .navbar{
            padding: 5px 0;
        }
        .custom-toggler .navbar-toggler-icon {
            background-image: url("https://moodle.astanait.edu.kz/pluginfile.php/48898/user/icon/boost/f2?rev=2110057");
            border-radius: 50px;
        }
        .custom-toggler.navbar-toggler {
            border: none;
        }
        .dropdown-menu {
            min-width: 50px;
        }


        * {
            box-sizing: border-box;
        }

        .w-80{width: 80%;}
        .w-40{width: 40%;}

        .col-n1 {width: 4%;}
        .col-n11 {width: 96%;}

        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
        [class*="col-"] {
            float: left;
        }
        @media only screen and (max-width: 1200px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
        }

        @media only screen and (max-width: 1000px) {
            /* For mobile phones: */
            [class*="table-"] {
                overflow-x: scroll;
                white-space: nowrap; /* Запрещаем перенос строк */
            }
        }

        fieldset{
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        legend{
            width:inherit;
            padding:0 10px;
            border-bottom:none;
            float: none;
            margin-bottom: -10px;
            font-size: 14px;
            border-right: 5px;
            color: #6c757d;
            font-family: 'Montserrat', sans-serif;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color:white;
            text-align: center;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
            border-radius: 5px;
            color: black;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>


</head>
<body>


@include('inc.navbar_notregged')

@yield('content')

@include('inc.footer')

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
