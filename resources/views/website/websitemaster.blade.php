<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="{{ empty($metakeywordname)?"Unicorn Equipements":$metakeywordname }}" content="{{ empty($metakeywordContent)?"Unicorn Equipements":$metakeywordContent }}"> <!--keywords-->
    <meta name=" {{ empty($metaDescriptionName)?"Unicorn Equipements":$metaDescriptionName }} " content="{{ empty($metaDescriptionContent)?"Unicorn Equipements":$metaDescriptionContent }} " />  <!--mets descriptions-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('frontend/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/countdown_animation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/animation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/banner.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" href=" {{asset('backend/images/faviconnew.png')}} ">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        
    <script src="{{asset('frontend/js/countdown_animation.js')}}"></script>
    <script src="{{asset('frontend/js/bannercrousal.js')}}"></script>
    <script src="https://kit.fontawesome.com/1c9aba089e.js" crossorigin="anonymous"></script>


</body>

</html>