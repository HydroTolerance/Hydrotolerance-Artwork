<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    @include('components.sidebar.index')
    <div class="p-4 md:ml-64">
    @yield('content')
    </div>
</body>
</html>