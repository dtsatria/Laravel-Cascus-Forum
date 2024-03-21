<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Beranda</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      var dropdown = document.getElementById('kategori_id');
      if (dropdown) {
          dropdown.addEventListener('change', function() {
              var selectedCategoryId = this.value;
              var pertanyaanContainers = document.querySelectorAll('.pertanyaan-container');
              pertanyaanContainers.forEach(function(container) {
                  var pertanyaanKategori = container.getAttribute('data-kategori');
                  if (selectedCategoryId == 0 || pertanyaanKategori == selectedCategoryId) {
                      container.style.display = 'block';
                  } else {
                      container.style.display = 'none';
                  }
              });
          });
      } else {
          console.error("Elemen dengan ID 'kategori_id' tidak ditemukan.");
      }
  });
  </script>
  

<body>

    @include('user.navbar')

      <div class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full h-auto min-h-screen bg-gray-800 text-sm py-4 my-1">
        <div class="container mx-auto">
          @auth
          @include('user.navs')
          @endauth        
            <div class="container mx-auto">
                @yield('bagianHome')
            </div>
        </div>
      </div>
    
</body>
</html>