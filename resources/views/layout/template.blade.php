<!DOCTYPE html>
<html lang="en-US">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT - Home</title>
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/responsee.css">
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>  

    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Libraries CSS Files -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="/img/logo/red-pagaso.png">
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">    

    </head>

    <body>

        @include('layout.navbar')


        <!-- MAIN -->
        <main role="main" >            

            @yield('content') 

        </main>
    

        @include('layout.footer')

        <script type="text/javascript" src="/js/responsee.js"></script>
        <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="/js/template-scripts.js"></script> 
    </body>
</html>