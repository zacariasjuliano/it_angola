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
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="Pesquisar" style="width: 100%; border: none; border-bottom: 1px solid black;">       
        </div>

        <div class="text-center" style="padding-top: 6%">
            <h1 style="font-size: 50px; color: #20085e">
                <b>Destaques</b>
            </h1>            
        </div>           
    </div>


    <section class="section" style="padding: 0px 0px; background-color:white;">		
        <div class="row" style="padding-left: 6%; padding-bottom: 0%">           
                                      
                                    
            <div class="col-md-8" style="padding-top: 7%;">
                <img src="/img/blog/happy-face-min.png" alt="" style="width: 90%">

                <div class="a">
                    <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem Ipsum passage</b></h3> 
                    <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> 28/06/2023</p> 
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>  
                </div>

                <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                    <a href="#" class="btn-left" style="color: white; font-size: 25px;">
                        ler mais...
                    </a>
                </div>

            </div>


            <div class="col-md-4" style="padding-right: 0%">
                <h5 class="animated-element margin-bottom-20" style="padding-top: 20%; padding-left: 11%; color:#20085e; font-size:45px;">
                    <b>Temas</b>								
                </h5>

                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Finanças</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Logistica</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Relatórios</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Restauração</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Retalho</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Indústria</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Recursos Humanos</b></h5>
                <h5 style="color:#20085e; font-size:33px; padding-top: 4.5%"><b>Suporte Técnico</b></h5>
            </div>  

        </div>			
    </section>
    

    <div style="margin-bottom: 5%;">

        <div style="padding: 1.5% 7%">  

            <hr>	

            <div class="card-deck mb-3" >
                <div class="card mb-4 padding" style="margin-left: 0px; margin-right: -3px;">
                    <img src="/img/blog/woman-taking-care-flowers-floral-shop-min.png" alt="" style="width: 90%">

                    <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                    <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> 28/06/2023</p> 
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>   

                    <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                        <a href="#" class="btn-left" style="color: white; font-size: 25px;">
                            ler mais...
                        </a>
                    </div>
                </div>

                <div class="card mb-4 padding" style="margin-left: -3px; margin-right: -3px;">
                    <img src="/img/blog/man-enjoying-indoor-farming-min.png" alt="" style="width: 90%">

                    <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                    <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> 28/06/2023</p> 
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>  

                    <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                        <a href="#" class="btn-left" style="color: white; font-size: 25px;">
                            ler mais...
                        </a>
                    </div>
                </div>

                <div class="card mb-4 padding" style="margin-left: -3px; margin-right: 0px;">
                    <img src="/img/blog/pexels-rfstudio-3622643-min.png" alt="" style="width: 90%">

                    <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem</b></h3> 
                    <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> 28/06/2023</p> 
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>  

                    <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                        <a href="#" class="btn-left" style="color: white; font-size: 25px;">
                            ler mais...
                        </a>
                    </div>
                </div>                
            </div>            
        </div>
                
    </div> 



    <div style="background-color: #9cadcf; height: 500px; position: relative;">
        
        <div class="container" style="max-width: 1400px;">

            <p class="text-center" style="font-size: 35px; color: white; padding-top: 9%; padding-bottom: 6%;"> Não perca nada, subscreva a nossa newsletter</p>
            
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="E-mail" style="width: 100%; border: none; border-bottom: 1px solid black;">
            
            <div class="center-text" style="text-align: -webkit-center;">
                <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                    <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                        Subscrever
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
        
    
    

@endsection