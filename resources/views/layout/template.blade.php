<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>IT - Home</title>  

        <link rel="stylesheet" href="/css/template-style.css">        
        <link rel="stylesheet" href="/css/it_angola.css"> 
        <link rel="stylesheet" href="/css/icons.css">
        <link rel="shortcut icon" type="imagex/png" href="/img/logo/red-pagaso.png">     
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body style="font-family: 'Gothic A1';">

        @include('layout.navbar')

        <!-- MAIN -->
        <main role="main" style="display: grid;">            

            @yield('content') 

        </main>

        @include('layout.footer')

    </body>
</html>