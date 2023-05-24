<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tickets system</title>
</head>
<body>
  <div class="container mx-auto">
    <div class="flex flex-col">
      @yield('content')  
    </div>
  </div>
</body>
</html>