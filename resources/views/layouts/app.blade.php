<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/circle-facebook_-512.webp">


    <title>Facebook</title>
    @section('css')
    @show




</head>

<body>

@section('topMenu')
    @include('layouts.header')
@show

<section class="content">
    @yield('content')
</section>

</body>
</html>
