@extends('layout.template')
 
@section('content')
    

    <style>
        .circle2 {
            background-color: white;
            border-radius: 55px;
            width: 200px;
            height: 35px;
        }
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
        .rectangle {
            margin-top: 8%;
            margin-left: 27%;
            margin-right: 30%;
            border-radius: 25px;
        }
        .rectangle {
            width: 65%;
            height: 250px;
            background-color: white;
            position: relative;   
            box-shadow: 0px 0px 11px 2px rgb(150, 150, 150, 0.36);
        }
        
        .circle1 {
            /*width: 100px;
            height: 100px;
            border-radius: 50%;*/
            position: absolute;
            top: -40%;
            /*left: 50%;
            transform: translateX(-50%);*/
        }
        

        .carousel-center-text {
            position: absolute;
            top: 52%;
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
                <img src="img/slide/img-24.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="img/starter/starter.png" alt="Slide 1" class="padding"> 
                <p style="font-size:50px; color: white" class="padding"><b>STARTER</b></p>
                <p style="font-size: 30px; color: white" class="padding">A ferramenta que faltava para impulsionar a gestão da sua pequeno negócio</p>
            </div>
        </div>
        
    </div>


    <div class="padding" style="margin-bottom: 10%; margin-top: 3%">

        <div class="text-center">
            <p style="font-size: 50px; color: rgb(17, 16, 16)">
                <b>Uma Licença para Multiplas Pequenas Empresas</b>
            </p>

            <p style="font-size: 25px; color: blue; margin-top:5%">
                Escolha a melhor versão para a sua empresa!
            </p>

            <p style="font-size: 30px; color: rgb(0, 0, 0)">
                <hr style="width: 15%; color: black; border-top: 1.5px solid black;">
            </p>
        </div>

        <div class="row" style="padding-left: 20%; padding-top: 3.5%; padding-bottom: 1%">
            
            <div class="col-md-4 text-center" style="max-width: 25%;">
                <p style="font-size: 25px; color: #ff6900">
                    <b> Starter Plus </b>
                </p>
                <div style="display: flex">
                    <div style="flex: 1;" style="text-align: -webkit-center;">                    
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                    </div>
                </div>
            </div>  

            <div class="col-md-4 text-center" style="max-width: 25%;">
                <p style="font-size: 25px; color: #ff6900">
                    <b> Starter </b>
                </p>
                <div style="display: flex">
                    <div style="flex: 1;" style="text-align: -webkit-center;">                    
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center" style="max-width: 25%;">
                <p style="font-size: 25px; color: #ff6900">
                    <b> Starter Easy </b>
                </p>
                <div style="display: flex">
                    <div style="flex: 1;" style="text-align: -webkit-center;">                    
                        <img class="img-fluid" src="img/starter/Camada-12.png" alt="..." style="display: inline"/>
                    </div>
                </div>
            </div>

        </div> 
                
    </div>        
    
    
    <div style="background-color: #8abce6; height: 600px; position: relative;">
        
        <div class="circle1 row text-left" style="padding-left: 22%; padding-top: 1%">
            
            <div class="col-md-4" style="max-width: 23%; margin-right: 2%;">
                <div class="card shadow-sm" style="background-color: #3b00a2; border-radius: 7%; height: 500px;">
                                
                    <p class="padding" style="font-size:20px; color: white; word-spacing: 10px;">
                        O Starter Plus é um produto multi-empresas com o máximo de 3 empresas e o seu licenciamento está limitado a 3 utilizadores
                    </p>

                    <div class="ao_centro">
                        <img class="img-fluid" src="img/icon3.png" alt="..." style="height: 75%; display: inline"/>
                    </div>

                    <div class="circle2 btn-center text-center botao">
                        <a href="#" style="color: white;">
                            Saber mais... 
                        </a>
                    </div>                   

                </div>
            </div>

            <div class="col-md-4" style="max-width: 23%; margin-left: 0%;">
                <div class="card shadow-sm" style="background-color: #3b00a2; border-radius: 7%; height: 500px;">
                                
                    <p class="padding" style="font-size:20px; color: white; word-spacing: 10px;">
                        O Starter é um produto multi-empresas com o máximo de 2 empresas e o seu licenciamento está limitado a 3 utilizadores
                    </p>

                    <div class="ao_centro" style="margin-top: 20%;">
                        <img class="img-fluid" src="img/icon3.png" alt="..." style="height: 75%; display: inline"/>
                    </div>

                    <div class="circle2 btn-center text-center botao">
                        <a href="#" style="color: white;">
                            Saber mais... 
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-4" style="max-width: 23%; margin-left: 2%;">
                <div class="card shadow-sm" style="background-color: #3b00a2; border-radius: 7%; height: 500px;">
                                
                    <p class="padding" style="color: white; font-size:20px; word-spacing: 10px;">
                        O Starter Easy é um produto mono-empresa e o seu licenciamento está limitado a um NIF
                    </p>

                    <div class="ao_centro" style="margin-top: 38%;">
                        <img class="img-fluid" src="img/icon3.png" alt="..." style="height: 75%; display: inline"/>
                    </div>

                    <div class="circle2 btn-center text-center botao" style="">
                        <a href="#" style="color: white;">
                            Saber mais... 
                        </a>
                    </div>

                </div>
            </div>  

        </div>        
        
    </div>
    

@endsection