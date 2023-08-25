<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>@yield('title', 'App de Notas')</title>
      <link rel="stylesheet" href="{{ asset('static/css/app.css') }}"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    @yield('content')
      <footer class="foot">
        <div class="ad">
            <p>
                Esta aplicación fue desarrollada en laravel v.10 por Jesús Rodriguez
            </p>
        </div>
        <div class="license">
            <p>Plantilla de Blade provista por - Styde Limited - © 2019 Derechos Reservados <a href="https://styde.net/laravel-6">Styde.net</a></p>
        </div>
      </footer>
    </div>
  </body>
  </html>