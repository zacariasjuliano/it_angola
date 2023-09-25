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
            width: 350px;
            height: 60px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 15%;
            margin-left: 2.5%; 
        }
        .circle3 {
            width: 475px;
            height: 5%;
            position: absolute;
            top: 423.5%;
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
            background-color:blue; 
            color: white;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
        .menu_curvo {
            border-radius: 0 25px 25px 0;  
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
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/pages/img-20.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <h3 style="font-size: 50px; color: white" class="padding"><b>SUPORTE</b></h3>
            </div>
        </div>        
    </div>


    <section class="section" style="padding: 0px 0px; background-color:white;">		
        <div class="row" style="padding-left: 12%; padding-bottom: 9%">  

            <div class="col-md-6" style="padding-right: 9%; padding-top: 13%;">
                <h2 class="animated-element margin-bottom-20"  style="color:blue; font-size: 55px;">                   
                    Serviços de suporte técnico                    								
                </h2>

                <p class="animated-element slow margin-bottom-20" style="color:black; font-size:21px;">
                    A IT-ANGOLA oferece suporte técnico especializado para os softwares Cegid ERP Primavera, Cacimbo, PHC, logicpulse e de 
                    informática. A Nossa equipe de especialistas está pronta para ajudá-lo a resolver problemas, 
                    otimizar o desempenho e maximizar o uso dessas soluções em seu negócio.
                </p>

                <b style="color:black; font-size:20px;">
                    Alguns dos nossos principais serviços de suporte incluem:
                </b>                               

                <ul style="text-align: left; padding-top: 2%">
                    <li style="padding-top: 1%; font-size: 18px;">Resolução de problemas técnicos</li>
                    <li style="padding-top: 1%; font-size: 18px;">Atualizações e manutenção do software</li>
                    <li style="padding-top: 1%; font-size: 18px;">Otimização de desempenho e configuração</li>
                    <li style="padding-top: 1%; font-size: 18px;">Suporte remoto e presencial</li>
                    <li style="padding-top: 1%; font-size: 18px;">Treinamento e capacitação dos usuários</li>
                </ul>

                <p class="animated-element slow margin-bottom-20" style="color:black; font-size:21px; padding-right: 9%;">
                    Nossa equipe técnica experiente está disponível para ajudar sua empresa a obter o máximo 
                    de sua tecnologia de gestão do software Cegid ERP Primavera e informática. Entre em contato 
                    conosco hoje mesmo para saber mais sobre nossos serviços de
                </p>

                <div class="botao_2 botao_cor" style="background-color: blue;">
                    <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                        Receber Suporte
                    </a>
                </div>
            </div>                            
                                    
            <div class="col-md-6" style="flex: 0 0 45%; padding-top: 13%;">
                <img src="/img/pages/1000-min.png" alt="" style="width: 70%">
            </div>

        </div>			
    </section>



    <section class="section" style="padding: 0 0 9% 0;">	           
            
        <div style="position: relative; justify-content: center;"> 
            <h2 class="animated-element margin-bottom-20 text-center" style="color:#0a4275; font-size: 55px;">                   
                <i class="fa fa-download" style="color: #0a4275;"></i> Softwares de auxilio                    								
            </h2>
            
            <p class="h2 text-center pt-5" style="padding-left: 0%; padding-right: 0%" >
                Aqui pode adqurir o software necessário para que possamos ajudá-lo da melhor maneira.
            </p>
        </div> 
        

        <div class="row" style="position: relative; display: flex; justify-content: center;"> 

            <div class="col-md-6" style="flex: 0 0 30%; padding-top: 3%;">
                <div class="card mb-4 box-shadow" style="background-color:#e8f2f5">
                    <div class="card-header" hidden>
                        <h4 class="my-0 font-weight-normal text-center"><b>Free</b></h4>
                    </div>
                    <div class="card-body">
                        <img src="img/parceiros/any_desk.png" class="card-img" style="position: relative; display: flex; justify-content: center;">
                        <h1 class="card-title pricing-card-title text-center">Windows</h1>
                        <ul class="list-unstyled mt-3 mb-4 text-center">
                            <li>Free</li>
                            <li>Real-Time</li>
                            <li>Online</li>
                            <li>Leve</li>
                            <li>Versão 64-bit</li>
                        </ul>
                        <a href="https://anydesk.com/pt/downloads/thank-you?dv=win_exe" target="_blank" class="btn btn-lg btn-block btn-outline-primary">Download <i class="fa fa-download"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="flex: 0 0 30%; padding-top: 3%;">
                <div class="card mb-4 box-shadow" style="background-color:#e8f2f5">
                    <div class="card-header" hidden>
                        <h4 class="my-0 font-weight-normal text-center"><b>Free</b></h4>
                    </div>
                    <div class="card-body">
                        <img src="img/parceiros/team_viewer.png" class="card-img" style="width: 90%; position: relative; display: flex; justify-content: center;">
                        <h1 class="card-title pricing-card-title text-center">Windows</h1>
                        <ul class="list-unstyled mt-3 mb-4 text-center">
                            <li>Free</li>
                            <li>Real-Time</li>
                            <li>Online</li>
                            <li>Chat Incluido</li>
                            <li>Versão 64-bit</li>
                        </ul>
                        <a href="https://download.teamviewer.com/download/TeamViewer_Setup_x64.exe" target="_blank" class="btn btn-lg btn-block btn-outline-primary">Download <i class="fa fa-download"></i></a>
                    </div>
                </div>
            </div>

        </div>			
    </section>    

    

@endsection