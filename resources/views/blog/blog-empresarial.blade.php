@extends('layout.template')
 
@section('content')
    

    <style>
        .botao {
            background-color: #ff6900; 
            margin-left: 20%; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 10%;
            margin-top: 10%; 
        }
        .ao_centro {            
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-top: 20%; 
            margin-bottom: 2%;
        }        
        .botao_2 {
            background-color: white;
            border-radius: 55px;
            width: 200px;
            height: 45px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 3%;
        }
        .circle3 {
            width: 314px;
            height: 5%;
            position: absolute;
            top: 293.5%;
            left: 51%;
            border-radius: 12.5% 12.5% 0 0;
            transform: skewY(0deg);
        }
        .carousel-center-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
        .menu_activo { 
            color: black;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
        .espaco_embraco {
            margin-left: 0px; 
            margin-right: 0px;
        }
        .curvas {
            border: 1px solid rgb(0, 0, 0);
            border-radius: 55px;
            padding-top: 1.5%;
            padding-bottom: 1.5%;
            padding-left: 2.5%;
        }
        .search-icon {
            position: absolute;
            left: 10px; /* Ajuste a posição conforme necessário */
            top: 50%; /* Centraliza verticalmente */
            transform: translateY(-50%); /* Centraliza verticalmente */
            width: 20px; /* Largura do ícone */
            height: 20px; /* Altura do ícone */
            background-image: url('caminho-para-o-seu-icone.svg'); /* Substitua pelo caminho da sua imagem de ícone */
            background-size: contain; /* Ajuste o tamanho do ícone conforme necessário */
            background-repeat: no-repeat;
        }
        .small_screen_margin {
            margin-bottom: 1.5%; 
            margin-top: 3%;
        }
        .small_screen_pa {
            font-size: 30px;
            line-height: 50px;
        }
        .small_screen_height {
            max-width: 100%; 
            height:1050px;
        }
        .small_screen_height_2 {
            height: 400px;
        }

        @media screen and (max-width: 768px) {
            .small_screen_margin {
                margin-bottom: 1.5%; 
                margin-top: 30%;
            }
            .small_screen_pa {
                font-size: 25px;
                line-height: 25px;
            }
            .small_screen_p {
                line-height: 35px;
            }
            .botao_2 {
                background-color: white;
                border-radius: 55px;
                width: 100px;
                height: 35px;
            }
            .small_screen_height {
                max-width: 100%; 
                height: 650px;
            }
            .small_screen_height_2 {
                height: 180px;
            }

        }
    </style>
    

    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <img src="/img/pages/img-21.png" alt="Slide 1" style="width: 100%">                
                </div>
            
                <div style="margin-top: 0%">
                    <div class="carousel-center-text" style="text-align: -webkit-center;">
                        <h3 style="font-size: 60px; color: white" class="padding">BLOG EMPRESARIAL</h3>
                        <p style="font-size: 30px; color: white" class="padding">Informações pertineste para o seu negócio</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
 
    <div class="small_screen_margin">

        <div class="container"> 
            <i class="search-icon"></i>
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="Pesquisar" style="width: 100%; border: none; border: 1px solid black;">       
        </div>

        <div class="text-center" style="padding: 1% 0">
            <h1 style="font-size: 50px; color: #20085e">
                <b>Destaques</b>
            </h1>            
        </div>           
    </div>
    
    <div class="row" style="padding-left: 6%; padding-right: 0%; padding-bottom: 0%; background-color:white; margin-right: 0px;">   
                                
        <div class="col-md-8">
            <img src="/img/blog/happy-face-min.png" alt="" style="width: 90%">

            <div>
                <p class="small_screen_pa" style="color: #20085e; padding-top: 3%"><b>The standard Lorem Ipsum passage</b></p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> <b>28/06/2023</b></p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e; padding-right: 15%">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                </p>  
            </div>

            <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                <a href="/blog/post" class="btn-left" style="color: white; font-size: 15px;">
                    ler mais...
                </a>
            </div>

        </div> 

        <div class="col-md-4 small_screen_height" style="padding-top: 6%; border-left: 1px solid black;">
            <h5 class="animated-element" style="padding-top: 0%; padding-left: 15%; color:#20085e; font-size:45px;">
                <b>Temas</b>								
            </h5>

            <a href="#" style="color:#20085e; font-size:33px;"><b>Finanças</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px;"><b>Logistica</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; margin-top: 6%"><b>Relatórios</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; padding-top: 0%"><b>Restauração</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; padding-top: 0%"><b>Retalho</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; padding-top: 0%"><b>Indústria</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; padding-top: 0%"><b>Recursos Humanos</b></a> <br><br>
            <a href="#" style="color:#20085e; font-size:33px; padding-top: 0%"><b>Suporte Técnico</b></a>
        </div> 

    </div>			        

    <div style="margin-bottom: 3%; padding: 3% 6% 0 6%">

        <div class="card-deck mb-3" style="border-top: 1px solid black;">
            <div class="card mb-4" style="margin-left: 0px; margin-right: -3px; border: 0px solid rgba(0,0,0,.125); padding: 3% 1.5% 0 1.5%">
                <img src="/img/blog/woman-taking-care-flowers-floral-shop-min.png" alt="" style="width: 90%">

                <p class="small_screen_pa" style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e; padding-right: 15%">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"
                </p>   

                <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                    <a href="#" class="btn-left" style="color: white; font-size: 15px;">
                        ler mais...
                    </a>
                </div>
            </div>

            <div class="card mb-4" style="margin-left: -3px; margin-right: -3px; border: 0px solid rgba(0,0,0,.125); padding: 3% 1.5% 0 1.5%">
                <img src="/img/blog/man-enjoying-indoor-farming-min.png" alt="" style="width: 90%">

                <p class="small_screen_pa" style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e; padding-right: 15%">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"
                </p>  

                <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                    <a href="#" class="btn-left" style="color: white; font-size: 15px;">
                        ler mais...
                    </a>
                </div>
            </div>

            <div class="card mb-4" style="margin-left: -3px; margin-right: 0px; border: 0px solid rgba(0,0,0,.125); padding: 3% 1.5% 0 1.5%">
                <img src="/img/blog/pexels-rfstudio-3622643-min.png" alt="" style="width: 90%">

                <p class="small_screen_pa" style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p class="small_screen_p" style="font-size: 20px; color: #20085e; padding-right: 15%">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"
                </p>  

                <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                    <a href="#" class="btn-left" style="color: white; font-size: 15px;">
                        ler mais...
                    </a>
                </div>
            </div>                
        </div>   
                
    </div> 


    @include('blog.subscription')
        
        
@endsection