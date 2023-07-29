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
            width: 225px;
            height: 60px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 15%;
            margin-left: 25%; 
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
                <h3 style="font-size: 60px; color: white" class="padding">SOBRE NÓS</h3>
            </div>
        </div>
        
    </div>

    <div style="background-color: white; margin: 10% 0%;">

        <div class="text-center" style="margin-top: 3%;">
            <h3 style="font-size: 50px; color: blue">
                <b>Quem Somos</b>
            </h3>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                A IT-ANGOLA é uma empresa angolana especializada em Serviços da Tecnologia de Gestão vocacionada para o 
                planeamento, venda, implementação, prevenção, correção, formação, e consultória de em sistemas de gestão 
                empresarial. Dotamos negócios com soluções eficazes que agilizam os processos operacionais das empresas.
            </p> 
            <p style="font-size: 25px; color: black">
                Disponibilizamos um serviço de suporte personalizado e próximo para que retire o máximo valor da 
                ecnologia com a mínima preocupação.<br> 
                Trabalhamos para que o seu foco seja o crescimento da empresa e não a resolução das questões técnicas 
                do dia-a-dia, <br>Disponibilizamos uma equipa comprometida com as necessidades técnicas da sua organização 
                e empenhada no apoio diário para a melhor utilização possível do software PRIMAVERA.
                <br>Prestamos serviços de assistência e suporte informático via telefónica, remota ou local com o objectivo 
                de proactivamente despistar e resolver qualquer incidente.

            </p>          
        </div>         
    </div>

        
@endsection