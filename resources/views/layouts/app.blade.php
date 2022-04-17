<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kenny Lock">
    <link rel="apple-touch-icon" href="https://dl.dropboxusercontent.com/s/821z4gj1n45xof7/apple-touch-icon.png?dl=0" sizes="180x180">
    <link rel="icon" href="https://dl.dropboxusercontent.com/s/8qiigd7as9f8bks/favicon-32x32.png?dl=0" sizes="32x32" type="image/png">
    <link rel="icon" href="https://dl.dropboxusercontent.com/s/juxa2u8bxyewags/favicon-16x16.png?dl=0" sizes="16x16" type="image/png">
    <link rel="shortcut icon" href="https://dl.dropboxusercontent.com/s/igjo7eqw143vn5j/favicon.ico?dl=0"  type='image/x-icon'>
    <title>@yield('mytitle') | Tiberium Investments</title>
    <!-- Import Bootstrap -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
    <title>Tiberium Investments</title>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body class="d-flex flex-column h-100">
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