<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @routes
    @inertiaHead
  </head>
  <body class="h-full">
    @inertia
  </body>
</html>