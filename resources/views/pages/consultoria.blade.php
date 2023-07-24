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
            margin-bottom: 5%;
            margin-top: 8%;
            margin-left: 6%; 
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
                <p style="font-size: 50px; color: white" class="padding">CONSULTORIA</p>
            </div>
        </div>
        
    </div>


    <div style="background-color: white; margin-top: 10%">

        <div class="text-center" style="margin-top: 3%;">
            <p style="font-size: 50px; color: blue">
                <b>Consultoria do Software Cegid ERP Primavera</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                A IT-ANGOLA oferece serviços de consultoria especializados em tecnologia de gestão do software Cegid ERP Primavera.
                Os nossos consultores experientes estão prontos para ajudar a sua empresa a otimizar os seus processos de negócio e 
                a alcançar a máxima eficiência com o software Cegid ERP Primavera.
            </p>             
        </div>  
                   
    </div> 

    <div style="text-align: -webkit-center;">
        <img src="/img/pages/232.png" alt="" style="width: 40%">
    </div>


    <section class="section" style="padding: 0px 0px; background-color:white;">		
        <div class="row" style="padding-left: 5%; padding-bottom: 0%">  

            <div class="col-md-6" style="padding-right: 0%">
                <h3 class="animated-element margin-bottom-20"  style="padding-top: 20%;">
                    <b style="color:blue; font-size:30px;">
                        Benefícios do Software Cegid ERP Primavera
                    </b>								
                </h3>

                <p class="animated-element slow margin-bottom-20" style="color:black; font-size:18px;">
                    O software Cegid ERP Primavera oferece uma série de benefícios para empresas de todos os 
                    tamanhos e setores. Alguns dos principais benefícios incluem:
                    <br>A Melhoria na gestão de processos e fluxo de trabalho
                    <br>O Aumento da eficiência operacional
                    <br>A Integração de departamentos e sistemas
                    <br>Maior visibilidade e controle dos dados empresariais
                    <br>Tomada de decisão mais claras e precisas
                </p>
            </div>                            
                                    
            <div class="col-md-6" style="flex: 0 0 45%; padding-top: 1.5%;">
                <img src="/img/pages/234.png" alt="" style="width: 75%">
            </div>

        </div>			
    </section>

    <section class="section" style="padding: 0px 0px; background-color:white;">	 

        <div style="padding: 0% 5%">
            <h3 class="animated-element text-center"  style="padding-top: 2.5%;">
                <b style="color:blue; font-size:38px;">
                    Porque Escolher A IT-ANGOLA Para Consultoria <br>do Software Cegid ERP Primavera
                </b>								
            </h3>

            <p class="animated-element slow " style="color:black; font-size:21px;">
                A IT-ANGOLA é líder no fornecimento de consultoria em tecnologia de gestão do software Cegid ERP Primavera. 
                Os nossos consultores possuem amplo conhecimento e experiência no ERP Primavera, garantindo que sua empresa 
                obtenha o máximo valor e benefícios dessa solução.
            </p>
        </div>                            
                                
        <div style="flex: 0 0 45%; padding: 0% 5%; text-align: -webkit-center;">
            <img src="/img/pages/209-min.png" alt="" style="width: 100%">
        </div>
 

        <div class="botao_2 botao_cor" style="background-color: blue;">
            <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                Receber Consultoria 
            </a>
        </div>
    </section>

    

@endsection