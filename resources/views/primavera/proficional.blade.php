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
            width: 500px;
            height: 70px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 25%; 
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
        .modulo {
            text-align: -webkit-left; 
            color: white;
            padding-top: 9%; 
            padding-bottom: 13%;
            padding-left: 13%; 
            padding-right: 5%;
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/starter/img-7.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/starter/primavera.png" alt="Slide 1" class="padding" style="width:22.5%"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PRIMAVERA PROFICIONAL</b></h3>
                <p style="font-size: 30px; color: white" class="padding">O caminho inteligente para as médias empresas que procuram grandes resultados</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 1.5%; margin-top: 6%">

        <div class="text-center">
            <p style="font-size: 50px; color: black">
                <b>Gestão Inteligente Para Negócios Com Futuro</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 1% 15%"> 
            <p style="font-size: 25px; color: black">
                A solução PRIMAVERA Professional é o motor das PME que exigem o sucesso como resultado final. 
                Uma tecnologia inovadora que simplifica o acesso à informação. As operações são mais rápidas. 
                Os dados mais rigorosos. E as equipas mais produtivas.
            </p>           
        </div>
                
    </div>


    <div class="row" style="padding-left: 20%; padding-top: 1.5%; padding-bottom: 1%">
            
        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Logística </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao10.png'); height: 220px;">   
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; padding-top: 6%">   
                    Vedas
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -9%;">   
                    Inventário 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -7%;">   
                    Compras 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -7%;">   
                    Encomendas 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -8%;">   
                    Requisições Internas 
                </p>   
            </div>
        </div>  

        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Finanças  </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao12.png'); height: 220px;"> 
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; padding-top: 6%">   
                    Tesouraria/Contas C
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -9%;">   
                    Tesouraria/Bancos 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -7%;">   
                    Contabilidade Base 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -7%;">   
                    Contabilidade Gestão 
                </p>
            </div>
        </div> 

        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Relatórios </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao16.png'); height: 220px;">                 
                <p class="modulos_info" style="font-size: 15pt; line-height: 212px;">
                    Dashboards de Gestão
                </p> 
            </div>
        </div> 

    </div>

    <div class="row" style="padding-left: 20%; padding-top: 1.5%; padding-bottom: 1%">
            
        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> ERM </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao17.png'); height: 220px;">                
                <p class="modulos_info" style="font-size: 15pt; line-height: 215px;">
                    Contactos, OPV, Cobranças
                </p>      
            </div>
        </div>  

        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Projectos/Serviços  </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao14.png'); height: 220px;">                
                <p class="modulos_info" style="font-size: 15pt; line-height: 115px;">
                    Serviços Técnicos
                </p>
                <p class="modulos_info" style="font-size: 15pt; margin-top: -90px; line-height: 115px;">
                    Projetos/Obras
                </p> 
            </div>
        </div> 

        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Instrumentos de Gestão </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao15.png'); height: 220px;">                
                <p class="modulos_info" style="font-size: 15pt; line-height: 115px;">
                    Controlo Financeiro de Projetos
                </p> 
                <p class="modulos_info" style="font-size: 15pt; line-height: 115px; margin-top: -90px;">
                    Gestão de Contratos
                </p>  
            </div>
        </div> 

    </div>

    <div class="row" style="padding-left: 20%; padding-top: 1.5%; padding-bottom: 5%">
            
        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Equipamentos & Activos </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao13.png'); height: 220px;">                
                <p class="modulos_info" style="font-size: 15pt; line-height: 215px;">
                    Ativos
                </p>      
            </div>
        </div>  

        <div class="col-md-4 text-center" style="max-width: 25%;">
            <p style="font-size: 25px; color: blue">
                <b> Recursos Humanos  </b>
            </p>
            <div style="background-image: url('/img/starter/Subtracao11.png'); height: 220px;">                                
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; padding-top: 6%">   
                    RH Até 20 Colaboradores
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -9%;">   
                    RH Até 100 Colaboradores 
                </p>
                <p class="modulos_info" style="font-size: 15pt; line-height: 45px; margin-top: -7%;">   
                    RH (Ilimitado) 
                </p>                
            </div>
        </div> 

    </div>

    
    <div style="background-color: #9cadcf; height: 750px; position: relative; padding: 0% 0%">
            
        <div class="padding" style="display: flex;">
            
            <div style="flex: 1; text-align: -webkit-center; padding-top: 8%;">
                <img class="img-fluid" src="/img/starter/218-min.png" alt="..." style="width: 75%"/>  
            </div>

            <div style="flex: 1; text-align: -webkit-left; padding-left: 3%; padding-top: 9.5%;">
                <p style="font-size: 35px; color: black;"><b>Inteligência Artificial</b></p> 
                <p style="font-size: 20px; color: black; padding-right: 35%;">
                    O ECHO é o assistente pessoal de negócios que trabalha por si, de forma autónoma e contínua, analisando permanentemente 
                    os dados do ERP PRIMAVERA para verificar padrões, analisar dados e dinâmicas de negócio e correlacioná-los , de forma 
                    a alertar para incongruências de dados e erros na informação.
                </p>  
            </div>
            
        </div>
        
    </div>

    <div style="height: 650px; position: relative;">
        
        <div class="container" style="max-width: 1400px;">
            
            <div class="padding" style="display: flex;">
                <div style="flex: 1; padding-top: 5%;">
                    <p style="font-size: 35px; color: black; text-align: -webkit-center;"><b>Descubra o que esta solução lhe garante</b></p> 
                    <p style="font-size: 22px; color: black; padding-left: 9%; padding-right: 9%;">
                        O Primavera Professional impulsiona os resultados através de mecanismos de produtividade. As operações são rápidas. 
                        Os processos seguros. E a informação fidedigna. O negócio acontece mais rapidamente. Os resultados surgem de forma 
                        mais expressiva. Descubra uma solução de gestão que lhe garante:
                    </p> 
                    <ul style="padding-left: 12%;">
                        <li style="font-size: 20px; color: black;">Toda a informação que precisa sempre à mão</li>
                        <li style="font-size: 20px; color: black;">Mais rentabilidade, novas oportunidades de negócio</li> 
                        <li style="font-size: 20px; color: black;">Segurança no cumprimento das obrigações fiscais</li> 
                        <li style="font-size: 20px; color: black;">Simplicidade de utilização, facilidade de adaptação às regras do negócio</li> 
                        <li style="font-size: 20px; color: black;">Operações mais rápidas, informação mais fidedigna</li> 
                        <li style="font-size: 20px; color: black;">Mais eficiência</li> 
                        <li style="font-size: 20px; color: black;">Máxima capacidade de controlo do negócio</li> 
                        <li style="font-size: 20px; color: black;">Adaptação fácil a qualquer área de atividade e modelo de negócio</li> 
                        <li style="font-size: 20px; color: black;">Atualizações automáticas contínuas</li> 
                    <ul>  
                </div>
            </div>
            
        </div>
        
    </div>

    <div style="background-color: #9cadcf; height: 750px; position: relative; padding: 0% 0%">
               
        <div class="card-deck mb-3" style="padding: 10% 7%;">
            <div class="card mb-4 padding" style="border: 0px solid rgba(0,0,0,.125); background-color: #9cadcf;  justify-content: right;">
                <img class="img-fluid" src="/img/starter/youtube.png" alt="..." style="width: 45%;"/>      
            </div>

            <div class="card mb-4 padding" style="padding-left:15px; border: 0px solid rgba(0,0,0,.125); background-color: #9cadcf;">
                <p style="font-size: 35px; color: black;"><b>Análises de performance em tempo</b></p> 
                <p style="font-size: 20px; color: black; padding-right: 24%;">
                    Otimize a gestão estratégica da sua empresa através do acesso a um conjunto de dashboards de 
                    gestão com métricas e indicadores sobre as principais áreas operacionais da empresa, 
                    nomeadamente, as vendas, compras, inventário, financeira e recursos humanos.
                </p>   
            </div>
                            
        </div>         
                
    </div> 
        
    <div style="height: 700px; position: relative; padding: 3% 0%; background-color: #e1e1e1;">
            
        <div class="container padding" style="display: flex;">

            <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;">
                <p style="font-size: 40px; color: black;"><b>TENHA ACESSO AO PRIMAVERA PROFESSIONAL</b></p> 
                
                <p style="font-size: 22px; color: black;">
                    <b>On-premises</b><br>
                    Obtenha uma licença perpétua de utilização da solução. Aceda à sua solução de gestão na modalidade mais 
                    convencional: On-premises. Com esta modalidade terá acesso a uma licença perpétua de utilização do software. 
                    Poderá ainda evitar custos de atualização imprevisíveis e encargos elevados de manutenção do sistema com o 
                    Continuity Software Agreement (CSA). Com o CSA tem garantias de usufruir sempre das últimas novidades 
                    tecnológicas, e de acompanhar a evolução legal e fiscal em diversos mercados, a um custo controlado e 
                    competitivo. 
                </p>
                <p style="font-size: 22px; color: black;">
                    <b>Subscrição Anual</b><br> 
                    Obtenha uma licença de subscrição anual para dois 2 utilzadores inicialmente. 
                </p>  
            </div>
            
        </div>
        
    </div>
    
    <div style="height: 200px; position: relative;">        
        <div class="container padding">  
            
            <div class="botao_2 btn-center botao_cor" style="text-align: -webkit-center;">
                <a href="#" style="color: white; position: relative; display: flex; justify-content: center;">
                    Obter esta solução
                </a>
            </div>

        </div>        
    </div> 
        
    
    

@endsection