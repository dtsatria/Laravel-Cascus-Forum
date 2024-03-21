<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('judulPage')</title>
  @vite('resources/css/app.css')
</head>
<body>
    <section class="bg-gray-800 min-h-screen w-full">
    <div class="m-auto flex max-w-xl flex-col gap-8 p-10">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-semibold text-white">@yield('judul')</h1>
            <p class="text-sm text-white">@yield('subjudul')</p>
        </div>
        <div class="form-group">
            @yield('form')
            <div class="form-field">
                <div class="form-control justify-center">
                    @yield('buttonText')
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>