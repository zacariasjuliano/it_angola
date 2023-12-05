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
            margin-left: 9%; 
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


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 3%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/pages/img-20.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <h3 style="font-size: 50px; color: white" class="padding"><b>CONSULTORIA</b></h3>
            </div>
        </div>        
    </div>


    <div style="background-color: white; margin-top: 3%">
        <div class="text-center" style="margin-top: 3%;">
            <h5 style="font-size: 50px; color: blue">
                <b>Consultoria do Software Cegid ERP Primavera</b>
            </h5>            
        </div> 
        
        <div class="text-justify" style="padding: 2% 14%"> 
            <p style="font-size: 23px; color: black">
                A IT-ANGOLA oferece serviços de consultoria especializados em tecnologia de gestão, especialmente 
                no software Cegid ERP Primavera. Nossos consultores experientes estão prontos para ajudar sua empresa 
                a otimizar os processos de negócio e alcançar a máxima eficiência com o software Cegid ERP Primavera.
            </p>             
        </div>                     
    </div> 

    <div style="text-align: -webkit-center;">
        <img src="/img/pages/232.png" alt="" style="width: 30%">
    </div>

    	
    <div class="row" style="padding: 0px 9%; background-color:white;">  

        <div class="col" style="padding-right: 0%">
            <h5 class="animated-element margin-bottom-20" style="padding-top: 10%; color:blue; font-size:35px; width: 111%;">
                <b>
                    Benefícios do Software Cegid ERP Primavera
                </b>								
            </h5>

            <p class="animated-element slow text-justify" style="color:black; font-size:20px; margin: 0 13% 0 0; padding-top:3%">
                O software Cegid ERP Primavera oferece uma série de benefícios para empresas de todos os tamanhos e setores. Alguns dos principais incluem:
            </p>
            
            <ul class="animated-element slow margin-bottom-20 text-justify" style="color:black; font-size:20px; margin-top: 3%; padding-left: 6%; line-height: 40px;">
                <li>Melhoria na gestão de processos e fluxo de trabalho</li>
                <li>Aumento da eficiência operacional</li>
                <li>Integração de departamentos e sistemas</li>
                <li>Maior visibilidade e controle dos dados empresariais</li>
                <li>Tomada de decisões mais claras e precisas</li>
            </ul>
        </div>                            
                                
        <div class="col" style="padding: 1% 0;">
            <img src="/img/pages/234.png" alt="" style="width: 65%;">
        </div>

    </div>	


    <section class="section" style="padding: 0px 0px; background-color:white;">	 

        <div style="padding: 0% 0%">
            <h3 class="animated-element text-center"  style="padding: 0; line-height: 65px;">
                <b style="color:blue; font-size:38px;">
                    Porque que escolher o parceiro IT-ANGOLA para consultoria <br>do software Cegid ERP Primavera
                </b>								
            </h3>

            <p class="animated-element slow text-justify" style="color:black; font-size:21px; padding: 0 14%;">
                A IT-ANGOLA é líder no fornecimento de consultoria em tecnologia de gestão do software Cegid ERP Primavera. 
                Nossos consultores são certificados pela Cegid ERP Primavera, possuindo amplo conhecimento e experiência. 
                Isso garante que sua empresa obtenha o máximo valor e benefícios dessa solução.
            </p>
        </div>                            
                                
        <div style="padding: 0% 0%; text-align: -webkit-center;">
            <img src="/img/pages/209-min.png" alt="" style="width: 72%">
        </div>

        <div style="padding-left: 6%">
            <a href="/contactos#formulario" class="btn-center botao_2 botao_cor" style="color: white; font-size: 18px;">
                Receber Consultoria 
            </a>
        </div>
    </section>

    

@endsection