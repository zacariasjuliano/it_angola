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

 
    <div style="margin-bottom: 1.5%; margin-top: 6%">

        <div class="container" style="padding-top: 2.5%"> 
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="Pesquisar" style="width: 100%; border: none; border-bottom: 1px solid black;">       
        </div>

    </div>


    <section class="section" style="padding: 0px 0px; background-color:white;">
        
        <div class="center-text" style="text-align: -webkit-center; padding-top: 5%">
            <img src="/img/blog/happy-face-min.png" alt="" style="width: 85%">
        </div>

        <div class="row" style="padding-left: 6%; padding-bottom: 0%;">      
                                    
            <div class="col-md-8" style="padding-top: 7%;">

                <div class="a">
                    <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem Ipsum passage</b></h3> 
                    <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> 28/06/2023</p> 
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>   
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>  
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>  
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>  
                    <p style="font-size: 20px; color: #20085e; padding-right: 15%">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p> 
                </div>

            </div>


            <div class="col-md-4">
                <h5 class="animated-element margin-bottom-20" style="padding-top: 20%; padding-left: 3%; color:#20085e; font-size:45px;">
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


    <div style="background-color: #9cadcf; height: 500px; position: relative; margin-top: 9%">
        
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