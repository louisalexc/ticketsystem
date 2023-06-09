<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
    <title>Tickets system</title>
</head>
<body>
  <nav class="container mx-auto mt-4 mb-6">
    <div class="flex items-center justify-between">
      <div id="logo"><img src="https://placehold.co/400x100?text=Logo" alt=""></div>
      <div class="flex flex-row space-x-6">
        <a href="#">Dashboard</a>
        <a href="#">Tickets</a>
        <a href="#">Help</a>
      </div>
      <a href="#" class="btn btn-primary">Déconnexion</a>
    </div>
  </nav>
  <div class="container mx-auto">
    <div class="flex flex-col">
      @yield('content')  
    </div>
  </div>

  @livewireScripts
</body>
</html>