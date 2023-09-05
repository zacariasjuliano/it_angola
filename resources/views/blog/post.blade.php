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
            <i class="search-icon"></i>
            <input class="curvas" type="text" id="contacts" name="contacts" placeholder="Pesquisar" style="width: 100%; border: none; border: 1px solid black;">       
        </div>

        <div class="text-center" style="padding: 3% 0">
            <img src="/img/blog/happy-face-min.png" alt="" style="width: 90%">            
        </div>           
    </div>



    <div class="row" style="padding-left: 6%; padding-right: 0%; padding-bottom: 0%; background-color:white; margin-right: 0px;">   
                                
        <div class="col-md-8" style="padding-top: 0%;">

            <div class="a">
                <h3 style="color: #20085e; padding-top: 5%"><b>The standard Lorem Ipsum passage</b></h3> 
                <p style="font-size: 20px; color: #20085e;"><b>Por:</b>  Orlando Salvador <br> <b>28/06/2023<b></p> 
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

        <div class="col-md-4" style="margin-top: 60%; border-left: 1px solid black; max-width: 100%; height:750px">
            <h5 class="animated-element" style="padding-top: 6%; padding-left: 15%; color:#20085e; font-size:45px;">
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

    

    @include('blog.subscription')
        
        
@endsection