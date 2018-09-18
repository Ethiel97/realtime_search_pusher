<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    {{--bxslider--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Realtime search engine with Pusher and Laravel</title>
</head>
<body>


<div id="app">

    <div class="container">
        <h5 class="text-center">Realtime search engine with Laravel and Pusher</h5>
        <br><br>
        <searchbar></searchbar>
        <products></products>
    </div>

</div>

<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<script async src="{{mix('js/app.js')}}"></script>

</body>

</html>