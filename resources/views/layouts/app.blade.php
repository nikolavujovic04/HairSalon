<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  @vite(['resources/css/general.css', 'resources/css/navbar.css', 'resources/css/contact.css'])
  @vite('resources/js/script.js')

</head>
  <body>
    @include('inc.navbar')
    @yield('content')
  </body>
</html>
