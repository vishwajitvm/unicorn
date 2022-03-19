<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="{{ empty($metakeywordname)?"No Data":$metakeywordname }}" content="{{ empty($metakeywordContent)?"No Data":$metakeywordContent }}"> <!--keywords-->
    <meta name=" {{ empty($metaDescriptionName)?"No Data":$metaDescriptionName }} " content="{{ empty($metaDescriptionContent)?"No Data":$metaDescriptionContent }} " />  <!--mets descriptions-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('frontend/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/countdown_animation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/animation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/banner.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Unicorn - {{ empty($title)?"Equipement":$title }}</title>
</head>

<body>
    <!--wrapper started -->
    <div class="wrapper">
        <!--main header start-->
        @include('website.body.header')
        <!--main header end-->

        <!--yeielding data here-->
        @yield('websitespages')
        <!--yeielding data here-->

        <!-- Footer -->
        @include('website.body.footer')
        <!-- Footer -->
    </div>
    <!--wrapper ende here-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/countdown_animation.js')}}"></script>
    <script src="{{asset('frontend/js/bannercrousal.js')}}"></script>

</body>

</html>