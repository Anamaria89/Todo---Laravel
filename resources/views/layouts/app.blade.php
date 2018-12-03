<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todolist</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <div id="footer" class="text-center">
            <p>Copyright 2018 &copy; Ama</p>
        </div>
       <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>

