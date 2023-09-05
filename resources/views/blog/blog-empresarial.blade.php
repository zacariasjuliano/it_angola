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
            margin-top: 5%;
            /*margin-left: 25%;*/
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
            /*background-color: #ff6900;*/ 
            color: black;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
        .espaco_embraco {
            margin-left: 0px; 
            margin-right: 0px;
            /*
            margin-top: 0px; 
            margin-bottom: 0px;
            */
        }
        .curvas {
            /*background-color: white;*/
            /*border-radius: 25px; */
            border: 1px solid rgb(0, 0, 0);
            border-radius: 55px;
            padding-top: 1.5%;
            padding-bottom: 1.5%;
            padding-left: 2.5%;
            /*
            width: 350px;
            height: 55px;
            */
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
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/blog/img-21.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img hidden src="/img/blog/starter.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>BLOG EMPRESARIAL</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Informações pertineste para o seu negócio</p>
            </div>
        </div>
        
    </div>

 
    <div style="margin-bottom: 1.5%; margin-top: 6%">

        <div class="container" style="padding-top: 2.5%"> 
            <i class="search-icon"></i>
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="Pesquisar" style="width: 100%; border: none; border: 1px solid black;">       
        </div>

        <div class="text-center" style="padding: 3% 0">
            <h1 style="font-size: 50px; color: #20085e">
                <b>Destaques</b>
            </h1>            
        </div>           
    </div>


    
    <div class="row" style="padding-left: 6%; padding-right: 0%; padding-bottom: 0%; background-color:white; margin-right: 0px;">   
                                
        <div class="col-md-8" style="padding-top: 0%;">
            <img src="/img/blog/happy-face-min.png" alt="" style="width: 90%">

            <div class="a">
                <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem Ipsum passage</b></h3> 
                <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> <b>28/06/2023<b></p> 
                <p style="font-size: 20px; color: #20085e; padding-right: 15%">
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



        <div class="col-md-4" style="padding-top: 6%; border-left: 1px solid black; max-width: 100%; height:1050px">
            <h5 class="animated-element" style="padding-top: 0%; padding-left: 15%; color:#20085e; font-size:45px;">
                <b>Temas</b>								
            </h5><br><br>

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
    
    

    <div style="margin-bottom: 5%; padding: 6% 7% 0 7%">

        <div class="card-deck mb-3" style="border-top: 1px solid black;">
            <div class="card mb-4" style="margin-left: 0px; margin-right: -3px; border: 0px solid rgba(0,0,0,.125); padding: 3% 1.5% 0 1.5%">
                <img src="/img/blog/woman-taking-care-flowers-floral-shop-min.png" alt="" style="width: 90%">

                <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                <p style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p style="font-size: 20px; color: #20085e; padding-right: 15%">
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

                <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                <p style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p style="font-size: 20px; color: #20085e; padding-right: 15%">
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

                <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                <p style="font-size: 20px; color: #20085e;"><b>Por:</b> Orlando Salvador </p> 
                <p style="font-size: 20px; color: #20085e; padding-right: 15%">
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