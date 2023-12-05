@extends('layout.template')
 
@section('content')

    <style>     
        .botao_formulario_cor {
            background-color: #ed0000; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }     
        .botao_1 {
            background-color: white;
            border-radius: 0px;
            width: 650px;
            height: 66px;
        }
        .botao_cor_1 {
            background-color: white; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 0.1%; 
        }
        .botao_2 {
            background-color: white;
            border-radius: 0px;
            width: 333px;
            height: 66px;
        }
        .botao_cor {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 33%; 
        }
        .botao_cor_3 {
            background-color: #ed0000; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }
        .texto_p {
            font-size: 15px; 
            color: #ed0000; 
            padding: 0; 
            margin-left: 9%; 
            margin-bottom: -2%; 
            text-decoration: underline;
        }
        .estilo_a {
            font-size: 19px; 
            color: white; 
            background-color: #ed0000;
        }
        .estilo_b {
            font-size: 19px; 
            color: white; 
            background-color: #ff8f92;
        }
        .carousel-center-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
    </style>

    
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/parceiros/phc.jfif" alt="Slide 1" style="width: 100%">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center; padding-top: 290px">
                <img src="/img/parceiros/phc_0.jpg" alt="Slide 1" style="width: 90%;" hidden> 
                <h3 style="font-size:50px; color: white"><b>Bird TAB - ITANGOLA</b></h3>
            </div>
        </div>    
    </div>


@endsection