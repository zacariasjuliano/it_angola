@extends('layout.template')
 
@section('content')

    <style>     
        .botao_formulario_cor {
            background-color: #ed0000; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }     
        .botao_1 {
            background-color: white;
            border-radius: 0px;
            width: 650px;
            height: 66px;
        }
        .botao_cor_1 {
            background-color: white; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 0.1%; 
        }
        .botao_2 {
            background-color: white;
            border-radius: 0px;
            width: 333px;
            height: 66px;
        }
        .botao_cor {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 33%; 
        }
        .botao_cor_3 {
            background-color: #ed0000; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }
        .texto_p {
            font-size: 15px; 
            color: #ed0000; 
            padding: 0; 
            margin-left: 9%; 
            margin-bottom: -2%; 
            text-decoration: underline;
        }
        .estilo_a {
            font-size: 19px; 
            color: white; 
            background-color: #ed0000;
        }
        .estilo_b {
            font-size: 19px; 
            color: white; 
            background-color: #ff8f92;
        }
        .carousel-center-text {
            position: absolute;
            top: 45%;
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
                <img src="/img/parceiros/phc.jfif" alt="Slide 1" style="width: 100%">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center; padding-top: 290px">
                <img src="/img/parceiros/phc_0.jpg" alt="Slide 1" style="width: 90%;"> 
                <h3 style="font-size:50px; color: white"><b>PARCEIRO ITANGOLA</b></h3>
            </div>
        </div>    
    </div>


    <div class="card-deck mb-3" style="margin-right: 0px;">
        <div class="card mb-6" style="padding-left: 35px; border: 0px solid rgba(0,0,0,.125); background-color: #ed0000; margin-right: 0; margin-bottom: 3%; border-radius: 0px;">
            <p style="font-size: 40px; color: white; padding: 30% 25% 0 13%; position: relative; display: flex; justify-content: center;">
                SOFTWARE FEITO PARA PEQUENOS, MÉDIOS E GRANDES NEGÓCIOS
            </p>
            <p style="font-size: 25px; color: white; padding: 0 25% 0 10%; position: relative; display: flex; justify-content: center;">
                Ganhe vantagens com uma destas soluções
            </p> 
        </div> 
        
        <div class="card mb-6" style="border: 0px solid rgba(0,0,0,.125); background-color: #ff8f92; margin-left: 0; margin-right: 0px; margin-bottom: 3%; border-radius: 0px;">
            <p style="font-size: 30px; color: #ed0000; padding: 6% 6% 0 0; margin-left: 9%; margin-bottom: -1rem;"><b>SOLUÇÕES SECTORIAIS</b></p> 
            <p class="texto_p">
                Clínicas
            </p>  
            <p class="texto_p">
                Construção Civil
            </p>
            <p class="texto_p">
                Indústria e Produção
            </p>
            <p class="texto_p">
                Logística e Distribuição
            </p>
            <p class="texto_p">
                Restauração
            </p>
            <p class="texto_p">
                Retalho
            </p>

            <p style="font-size: 30px; color: #ed0000; padding: 6% 6% 0 0; margin-left: 9%; margin-bottom: -1rem;"><b>SOLUÇÕES TRANVERSAIS</b></p> 
            <p class="texto_p">
                Gestão na Cloud
            </p>  
            <p class="texto_p">
                Gestão
            </p>
            <p class="texto_p">
                Financeira
            </p>
            <p class="texto_p">
                Suporte Técnico
            </p>
            <p class="texto_p">
                CRM
            </p>
            <p class="texto_p">
                Equipas e Projetos
            </p>
            <p class="texto_p">
                Gestão de Capital Humano
            </p>
            <p class="texto_p">
                Vencimentos e Segurança no Trabalho
            </p>
            <p class="texto_p" style="padding-bottom: 9%">
                Frotas
            </p>
        </div>                           
    </div>


    <div style="background-color: white; height: position: relative;">        
        <div class="container" style="max-width: 1400px;">
            
            <div class="padding" style="display: flex;">
                
                <div style="flex: 1; text-align: -webkit-center; padding-top: 6%">
                    <img class="img-fluid" src="/img/parceiros/phc_1.jpg" alt="..." style="width: 100%"/>  
                </div>

                <div style="flex: 1; text-align: -webkit-left; padding-top: 6%">
                    <p class="text-justify" style="font-size: 45px; color: #ed0000; margin-left: 6%; margin-right: 25%">
                        <b>UM SOFTWARE QUE SE ADAPTA A CADA EMPRESA</b>
                    </p> 
                    <p class="text-justify" style="font-size: 20px; color: black; margin-left: 6%; margin-right: 25%; line-height: 40px; padding-top: 3%">
                        Cada empresa é única e tem necessidades de
                        gestão próprias. E, por isso, precisa de um
                        software capaz de se adaptar à exata medida das
                        especificidades do seu negócio. É esse o principal
                        fator distintivo do PHC CS: a elasticidade da sua
                        framework potente, 100% customizável aos
                        processos e à forma de trabalhar única de cada
                        empresa.
                    </p>  
                </div>

            </div>
            
        </div>        
    </div>

    
    <div style="margin-bottom: 5%; margin-top: 1%;">
        <div style="padding-top: 7% "> 
            
            <h2 class="text-center" style="font-size: 45px">
                <b> QUAL É O TAMANHO DA SUA EMPRESA</b> 
            </h2>   
            <p class="text-center" style="font-size: 16pt; color: black">
                Uma solução para o tamanho de qualquer empresa de qualquer sector de actividade
            </p>
            
            <div class="card-deck mb-3" style="padding: 3% 10% 0 10%; margin-right: 0px; margin-left: 0px;">
                <div class="card mb-4 panel_itens" style="margin-left: 0px; margin-right: 7px; border-radius: 55px 55px 0 0;">
                    <div class="text-right" style="font-size: 20px; color: white; padding: 3% 0; position: relative; display: flex; justify-content: center;">
                        <img class="img-fluid" src="/img/parceiros/phc_corporate.jpg" alt="..." style="width: 35%;"/> 
                    </div> 
                    <p class="padding estilo_a">
                        Pequenas empresas de qualquer sector de atividade
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%">
                        Até 5 utilizadores
                    </p> 
                    <p class="padding estilo_a" style="margin-top: -3.3%">
                        Formação
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%; margin-bottom: -3%">
                        Suporte
                    </p> 
                </div>  
                
                <div class="card mb-4 panel_itens" style="margin-left: 7px; margin-right: 7px; border-radius: 55px 55px 0 0;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%; position: relative; display: flex; justify-content: center;">
                        <img class="img-fluid" src="/img/parceiros/phc_advanced.png" alt="..." style="width: 35%;"/> 
                    </p> 
                    <p class="padding estilo_a">
                        Médias empresas de qualquer sector de atividade
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%">
                        Sem limite de
                    </p> 
                    <p class="padding estilo_a" style="margin-top: -3.3%">
                        Formação
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%; margin-bottom: -3%">
                        Suporte
                    </p> 
                </div>

                <div class="card mb-4 panel_itens" style="margin-left: 7px; margin-right: 0px; border-radius: 55px 55px 0 0;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%;  position: relative; display: flex; justify-content: center;">
                        <img class="img-fluid" src="/img/parceiros/phc_enterprise.jpg" alt="..." style="width: 35%;"/> 
                    </p> 
                    <p class="padding estilo_a">
                        Grandes empresas de qualquer sector de atividade
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%">
                        Sem limite de
                    </p> 
                    <p class="padding estilo_a" style="margin-top: -3.3%">
                        Formação
                    </p> 
                    <p class="padding estilo_b" style="margin-top: -3.3%; margin-bottom: -3%">
                        Suporte
                    </p>  
                </div>
            </div> 

        </div>                
    </div>

    <div style="height: 550px; position: relative; background-color: rgb(45, 44, 44)">        
        <div class="container">

            <p class="text-left" style="font-size: 45px; word-spacing: 10px; padding-top: 9%; padding-right: 6%; color: white">
                SOFTWARE CERTIFICADO A RECONHECIDO PELA 11º VEZ COMO O MELHOR SOFTWARE DE GESTÃO
            </p>   
            
            <a href="/contactos#formulario" class="botao_1 btn-center botao_cor_1" style="font-size: 35px; color: black; position: relative; display: flex; justify-content: center;">
                <b>Peça uma demonstração</b>
            </a>

        </div>        
    </div>

    <div style="background-color:white; padding-bottom: 6%;">
            
        <div class="text-center" style="padding-top: 5%;">  
            <h4 style="font-size: 25px; color: black;"> 
                <b>PREENCHA O FORMULÁRIO, E RECEBA MAIS INFORMAÇÕES DE UM  
                <br>ESPECIALISTA SEM QUALQUER COMPROMISSO.</b>
            </h4> 
        </div>  

        @include('parceiros.formulario')
        
    </div>


@endsection