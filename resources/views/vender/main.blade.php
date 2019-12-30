<!DOCTYPE HTML>
<html lang="en">
<head>
<meta content="utf-8">
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<title>App Name - @yield('title')</title>
</head>
<body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
</body>
</html>