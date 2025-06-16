<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @stack('styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar {
            width: 250px;
            min-height: 100vh;
        }

        .content-area {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar bg-light">
            @include('sidebar')
        </div>

        <div class="content-area">
            @yield('content')
        </div>
    </div>
        @stack('script')
</body>
</html>
