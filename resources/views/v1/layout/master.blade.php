<!DOCTYPE html>
<html lang="fa" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
@include('svg.icons')
<body class="font-sans bg-bg">

  <section class="main__box">
      <!-- <header><p>Header</p></header> -->
        @yield('content')
    <!-- <footer><p>footer</p></footer> -->

  </section>

</body>
</html>
