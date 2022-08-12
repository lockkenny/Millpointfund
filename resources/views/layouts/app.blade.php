<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="author" content="Kenny Lock">
    <link rel="apple-touch-icon" href="https://dl.dropboxusercontent.com/s/821z4gj1n45xof7/apple-touch-icon.png?dl=0" sizes="180x180">
    <link rel="icon" href="https://dl.dropboxusercontent.com/s/8qiigd7as9f8bks/favicon-32x32.png?dl=0" sizes="32x32" type="image/png">
    <link rel="icon" href="https://dl.dropboxusercontent.com/s/juxa2u8bxyewags/favicon-16x16.png?dl=0" sizes="16x16" type="image/png">
    <link rel="shortcut icon" href="https://dl.dropboxusercontent.com/s/igjo7eqw143vn5j/favicon.ico?dl=0"  type='image/x-icon'>
    <title>@yield('mytitle') | Tiberium Investments</title>
    
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Import TypeIt -->
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <!-- Import ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    @stack('js')
  
    <title>Tiberium Investments</title>
  </head>

  <body id="page-top">
    <header>
      @include('layouts.header')
    </header>
    
    <main class="flex-shrink-0">
      
        @yield('content')
      
    </main>

    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        @include('layouts.footer')
        
      </div>
    </footer>
    
  </body>
</html>