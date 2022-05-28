<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="version">Moodle Killer</title>

    <link rel="shortcut icon" href="images/light_icon.ico?">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="moodlekiller.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--JQUERY-->
    <script src="jquery-3.6.0.min.js"></script>
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        body{
            width: 100%;
        }

        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
            color: #191970;
        }

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
            padding: 15px;
        }

        @media only screen and (max-width: 1200px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
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


@yield('content')
<!--SNACKBAR-->
<fieldset id="snackbar">
    <legend id="wText" class="float-none w-auto text-center">
        Message
    </legend>
    This function isn't available yet.
</fieldset>

<audio id="sound" src="wind_sound.wav"></audio>
<script src="moodlekiller.js"></script>
</body>
</html>
