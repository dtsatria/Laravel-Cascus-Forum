<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Beranda</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>

    @include('user.navbar')

      <div class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full h-auto min-h-screen bg-gray-800 text-sm py-4 my-1">
        <div class="container mx-auto">
            @include('user.navs')
            <div class="container mx-auto">
                @yield('bagianHome')
            </div>
        </div>
      </div>
    
</body>
</html>