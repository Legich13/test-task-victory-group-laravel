<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('cuba/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="container">
        @include('themes.cuba.navigate')
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
