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
                <p style="font-size: 50px; color: white" class="padding">SUPORTE</p>
            </div>
        </div>
        
    </div>


    <section class="section" style="padding: 0px 0px; background-color:white;">		
        <div class="row" style="padding-left: 5%; padding-bottom: 7%">  

            <div class="col-md-6" style="padding-right: 5%">
                <h3 class="animated-element margin-bottom-20"  style="padding-top: 20%;">
                    <b style="color:blue; font-size:38px;">
                        Serviços de suporte técnico
                    </b>								
                </h3>

                <p class="animated-element slow margin-bottom-20" style="color:black; font-size:21px;">
                    A IT-ANGOLA oferece suporte técnico especializado para o software Cegid ERP Primavera e de 
                    informática. A Nossa equipe de especialistas está pronta para ajudá-lo a resolver problemas, 
                    otimizar o desempenho e maximizar o uso dessas soluções em seu negócio.
                </p>

                <b style="color:black; font-size:20px;">
                    Alguns dos nossos principais serviços de suporte incluem:
                </b>                               

                <ul style="text-align: left">
                    <li style="padding-top: 1%">Resolução de problemas técnicos</li>
                    <li style="padding-top: 1%">Atualizações e manutenção do software</li>
                    <li style="padding-top: 1%">Otimização de desempenho e configuração</li>
                    <li style="padding-top: 1%">Suporte remoto e presencial</li>
                    <li style="padding-top: 1%">Treinamento e capacitação dos usuários</li>
                </ul>

                <p class="animated-element slow margin-bottom-20" style="color:black; font-size:21px;">
                    Nossa equipe técnica experiente está disponível para ajudar sua empresa a obter o máximo 
                    de sua tecnologia de gestão do software Cegid ERP Primavera e informática. Entre em contato 
                    conosco hoje mesmo para saber mais sobre nossos serviços de
                </p>

                <div class="botao_2 botao_cor" style="background-color: blue;">
                    <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                        Estou Interessado/a 
                    </a>
                </div>
            </div>                            
                                    
            <div class="col-md-6" style="flex: 0 0 45%; padding-top: 3.5%;">
                <img src="/img/pages/1000-min.png" alt="" style="width: 75%">
            </div>

        </div>			
    </section>

    

@endsection