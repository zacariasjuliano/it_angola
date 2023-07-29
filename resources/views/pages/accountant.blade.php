@extends('layout.template')
 
@section('content')
    

    <style>
        .botao {
            background-color: #ff6900; 
            margin-left: 20%; 
            
            justify-content: center; 
            align-items: center;
            margin-bottom: 10%;
            margin-top: 10%; 
        }
        .ao_centro {            
            
            justify-content: center; 
            align-items: center;
            margin-top: 20%; 
            margin-bottom: 2%;
        }        
        .botao_2 {
            background-color: white;
            border-radius: 20px;
            width: 375px;
            height: 60px;
        }
        .botao_cor {
            background-color: #0f0034; 
            
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            /*margin-top: 1.5%;*/
            /*margin-left: 5%;*/
        }
        .circle3 {
            width: 356px;
            height: 8%;
            position: absolute;
            top: 120.9%;
            left: 51%;
            border-radius: 12.5% 12.5% 0 0;
            transform: skewY(0deg);
        }
        .circle4 {
            width: 356px;
            height: 8%;
            position: absolute;
            top: 120.9%;
            left: 25.6%;
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
                <img src="/img/pages/img-8.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <h3 style="font-size: 50px; color: white" class="padding">ACCOUNTANT SUITE</h3>
                <p style="font-size: 30px; color: white" class="padding">Com esta solução as contas estão sempre em dia</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 5%; margin-top: 9%">

        <div class="text-center">
            <h5 style="font-size: 50px; color: black">
                <b>Accountant Suite</b>
            </h5>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                A Accountant Suite inclui apenas as ferramentas necessárias para tratar os processos dos seus clientes de forma 
                ágil, sem funcionalidades extra que não usa. Assim, tem a certeza de que estará a pagar apenas a tecnologia que 
                usa e controla os custos fixos de operação. 
            </p>  

            <p style="font-size: 25px; color: black">
                Esta solução é constituída por um conjunto de módulos integrados entre si, o que garante mais rapidez e 
                fiabilidade dos dados. Permite-lhe tratar de forma ágil os processos de Contabilidade Gestão, Recursos Humanos,
                Ativos, Vendas e Contas Correntes. 
            </p>           
        </div>
                
    </div>


    <div style="background-color: #98b2cb; height: 900px; position: relative; padding: 0% 0%">
        
        <p class="text-center" style="font-size: 35px; color: black; padding-top: 7%"><b>A Escolha de Milhares de Escritórios de Contabilidade</b></p> 
            
        <div class="padding" style="display: flex;">
            
            <div style="flex: 1; text-align: -webkit-center;">
                <img class="img-fluid" src="/img/pages/236-min.png" alt="..." style="width: 60%"/>  
            </div>

            <div style="flex: 1; text-align: -webkit-left; padding-right: 7%">
                <p style="font-size: 25px; color: black;">
                    Garanta rapidez e segurança nas operações contabilísticas e financeiras
                    <br><br>Processe salários em lote, de forma rápida e sem erros
                    <br><br>Acelere o cumprimento das obrigações legais e fiscais
                    <br><br>Simplifique a gestão de contratos de vínculo
                    <br><br>Agilize a gestão dos bens de imobilizado
                    <br><br>Sistematize os processos de faturação recorrentes
                    <br><br>Aumente a eficiência na gestão das compras
                    <br><br>Elimine a carga administrativa com a faturação eletrónica
                    <br><br>Obtenha inputs do sistema que garantem mais produtividade
                    <br><br>Aceda a relatórios de gestão sempre atualizados
                </p>  
            </div>
            
        </div>
        
    </div>


    <div style="margin-bottom: 5%; margin-top: 3%">

        <div class="text-center" style="text-align: -webkit-center;">
            <h5 style="font-size: 30px; color: black">
                <b>COMO TER ACESSO A ESTA SOLUÇÃO</b>
            </h5>            
        </div> 
        
        <div class="text-center" style="padding: 2% 0%;"> 
            <p style="font-size: 20px; color: black">
                São aceites encomendas de empresas ou pessoas singulares que estejam inscritas na OCPCA. 
            </p>             
        </div>
                

        <div class="center-text" style="text-align: -webkit-center;">

            <div class="botao_2 botao_cor" style="background-color: blue;">
                <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                    Saber mais sobre esta solução
                </a>
            </div>

        </div>
                
    </div>

    

        
@endsection