<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="author" content="Kenny Lock">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="images/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="shortcut icon" href="images/favicon.ico"  type='image/x-icon'>
    <title>@yield('mytitle') | Mill Point</title>
    
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Import TypeIt -->
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <!-- Import ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Custom CSS -->
    <!--<link href="https://cdn.matix-media.net/dd/28d9987c" rel="stylesheet"> -->
    <link href="/css/custom.css" rel="stylesheet">
    <!-- Custom TypeIt -->
    <!--<script src="https://cdn.matix-media.net/dd/307a31ba"></script>-->
    <script src="/js/typeit.js"></script>
    <!-- Custom Scroll -->
    <!--<script src="https://cdn.matix-media.net/dd/180ba440"></script> -->
    <script src="/js/scroll.js"></script>
    <!-- Custom Scrollspy -->
    <!-- <script src="https://cdn.matix-media.net/dd/1f797a5d"></script> -->
    <script src="/js/scrollspy.js"></script>

  
    <title>Mill Point Fund</title>
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