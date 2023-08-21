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
            width: 400px;
            height: 60px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 15%;
            margin-left: 33%; 
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
        ::marker {
            color: blue;
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/starter/img-9.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/starter/primavera.png" alt="Slide 1" class="padding" style="width:22.5%">
                <h3 style="font-size:50px; color: white" class="padding"><b>PRIMAVERA EXECUTIVE</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Para grandes empresas que procuram por grandes resultados</p>
            </div>
        </div>        
    </div>

    <div style="background-color: rgb(246, 246, 246);">
        <div style="padding-top: 6%;" class="text-center">
            <p style="font-size: 50px; color: blue">
                <b>Adaptado a Realidade dos Grandes Negócios</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 0"> 
            <p style="font-size: 25px; color: black; padding: 0 20%">
                Usufrua de tecnologia que prepara a sua empresa para a era digital. Um sistema de gestão global, híbrido, que 
                integra com aplicações cloud, inteligente, integrado, tecnologicamente preparado para integrar com qualquer 
                sistema, plataforma ou aplicação e fácil de adaptar à realidade da sua empresa.
            </p>           
        </div>

        <hr style="width: 37%; color: black; border-top: 1.5px solid black;">
       
        <div class="row text-center" style="margin-top:2.5%; position: relative; display: flex; justify-content: center;">
            <div class="col-lg-3 col-md-4">                             
                <img class="img-fluid" src="/img/home/Camada-3.png" alt="..." style="height: 20%; display: inline;"/>
                            
                <h4 class="my-3" style="color:#29598d;"><b>Logística</b></h4>
                <div class="text-center">
                    <h6>Vendas</h6> 
                    <h6>Inventário</h6> 
                    <h6>Compras</h6> 
                    <h6>Encomendas</h6> 
                    <h6 hidden >Requisições Internas</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">                          
                <img class="img-fluid" src="/img/home/Camada-4.png" alt="..." style="height: 18%; display: inline"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Finanças</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Tesouraria Contas/C</h6> 
                    <h6>Tesouraria Bancos</h6> 
                    <h6>Contabilidade Base</h6> 
                    <h6>Contabilidade Gestão</h6> 
                </div>
            </div>

            <div class="col-lg-3 col-md-4">                          
                <img class="img-fluid" src="/img/home/Camada-1.png" alt="..." style="height: 18%; display: inline;"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Recursos Humanos</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>RH Até 20 Colaboradores</h6> 
                    <h6>RH Até 100 Colaboradores</h6> 
                    <h6>RH (Ilimitado)</h6> 
                    <h6>Formação (Ilimitado)</h6> 
                </div>
            </div>
        </div>

        <div class="row text-center" style="position: relative; display: flex; justify-content: center;">         
            <div class="col-lg-3 col-md-4">                         
                <img class="img-fluid" src="/img/home/Camada-2.png" alt="..." style="height: 20%; display: inline;"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Equipamentos e activos</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Activos</h6> 
                </div>
            </div>

            <div class="col-lg-3 col-md-4">                          
                <img class="img-fluid" src="/img/home/Camada-4.png" alt="..." style="height: 20%; display: inline"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Projectos/Serviços</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Serviços Técnicos</h6> 
                    <h6>Projetos/Obras</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">                          
                <img class="img-fluid" src="/img/home/Camada-1.png" alt="..." style="height: 20%; display: inline;"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Instrumentos de Gestão</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Controlo Financeiro de Projetos</h6> 
                    <h6>Gestão De Contratos</h6> 
                </div>
            </div>
        </div>

        <div class="row text-center" style="margin-left: 13.2%;">         
            <div class="col-lg-3 col-md-4">                         
                <img class="img-fluid" src="/img/home/Camada-2.png" alt="..." style="height: 20%; display: inline;"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>Relatórios</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Dashboards de Gestão</h6> 
                </div>
            </div>

            <div class="col-lg-3 col-md-4" style="margin-left: 4.2%;">                          
                <img class="img-fluid" src="/img/home/Camada-4.png" alt="..." style="height: 20%; display: inline"/>
                
                <h4 class="my-3" style="color:#29598d;"><b>ERM</b></h4>
                <div class="text-center equal-column fundo">
                    <h6>Contactos, OPV, Cobranças</h6> 
                </div>
            </div>
        </div>                
    </div>

    <div style="background-color: white; height: 650px; position: relative;">
        <div style="display: flex;">            
            <div style="flex: 1; text-align: -webkit-center;">
                <img class="img-fluid" src="/img/starter/221.png" alt="..." style="width: 75%"/>  
            </div>

            <div style="flex: 1; text-align: -webkit-left; padding-top: 9.5%;">
                <p style="font-size: 35px; color: black;"><b>Inteligência Artificial</b></p> 
                <p style="font-size: 20px; color: black; padding-right: 45%">
                    O ECHO é o assistente pessoal de negócios que trabalha por si, de forma autónoma e contínua, 
                    analisando permanentemente os dados do ERP PRIMAVERA para verificar padrões, analisar dados 
                    e dinâmicas de negócio e correlacionálos , de forma a alertar para incongruências de dados 
                    e erros na informação.
                </p>  
            </div>            
        </div>        
    </div>  

    <div class="container" style="background-color: white; height: 600px; position: relative;">        
        <div style="flex: 1; text-align: -webkit-center; padding-top: 10%;">
            <p style="font-size: 30px; color: black;"><b>Impulsione a preformance da sua empresa</b></p> 
            <p style="font-size: 20px; color: black; text-align: -webkit-left; padding: 0 14%;">
                O erp primavera executive é uma solução global de gestão que fortalece a performance das organizações 
                de grande dimensão, destacando-se pela:
            </p> 

            <ul style="text-align: left; font-size: 20px;">
                <li style="padding-top: 1%;">Profunda capacidade de adaptação com baixos custos de customização</li>
                <li style="padding-top: 1%;">Integração de todos os processos de negócio</li>
                <li style="padding-top: 1%;">Rápida resposta à fiscalidade</li>
                <li style="padding-top: 1%;">Atualização contínua</li>
                <li style="padding-top: 1%;">Facilidade de obtenção de informação consolidada do negócio</li>
                <li style="padding-top: 1%;">Simplicidade e rapidez de reporting</li>
            </ul>

        </div>        
    </div> 
    
    <div style="background-color: #8abce6; height: 750px; position: relative;">        
        <div class="container" style="max-width: 1400px;">
            
            <div class="padding" style="display: flex;">
                <div style="flex: 1; text-align: -webkit-left; padding-top: 9%">
                    <p style="font-size: 32.1px; color: black;">
                        <b>Agilidade, robustez e segurança para gerir o seu negócio de forma transversal:</b>
                    </p> 
                    <p style="font-size: 20px; color: black;">
                        Uma solução sólida com mais de 25 anos de experiência
                        <br>Integre todas as aplicações e sistemas num ERP sólido
                        <br>Reduza custos de customização do seu negócio
                        <br>Usufrua de mecanismos inteligentes que simplificam as operações
                        <br>Garanta agilidade no cumprimento das exigências legais e fiscais
                        <br>Aceda à informação em qualquer lugar através do telemóvel
                        <br>Suporte técnico de excelência
                    </p>  
                </div>
                
                <div style="flex: 1; text-align: -webkit-center; padding-top: 6%">
                    <img class="img-fluid" src="/img/starter/223-min.png" alt="..." style="width: 80%"/>  
                </div>
            </div>
            
        </div>        
    </div>    
    
    <div style="height: 800px; position: relative;">        
        <div class="container padding">
            <h3 class="text-center" style="font-size: 36px; word-spacing: 10px; padding-top: 6%; color: blue;">
                <b>Acesso Ao Primavera Executive</b> 
            </h3>  

            <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;"> 
                <p style="font-size: 23px; color: black;">
                    <b>On-premises</b><br>
                    Obtenha uma licença perpétua de utilização da solução. 
                    <br><br>Aceda à sua solução de gestão na modalidade mais 
                    convencional: On-premises. Com esta modalidade terá acesso a uma licença perpétua de utilização do software. 
                    <br><br>Poderá ainda evitar custos de atualização imprevisíveis e encargos elevados de manutenção do sistema com o 
                    Continuity Software Agreement (CSA). Com o CSA tem garantias de usufruir sempre das últimas novidades 
                    tecnológicas, e de acompanhar a evolução legal e fiscal em diversos mercados, a um custo controlado e 
                    competitivo. 
                </p> 
                <p style="font-size: 23px; color: black;">
                    <b>Subscrição Anual</b><br>
                    Obtenha uma licença de subscrição anual para dois 2 utilzadores inicialmente. 
                </p>  
            </div>   
        </div>        
    </div>
    

    <div style="height: 350px; position: relative;">        
        <div class="container padding">  
            
            <div class="botao_2 btn-center botao_cor" style="text-align: -webkit-center;">
                <a href="#" style="color: white; position: relative; display: flex; justify-content: center;">
                    Obter esta solução
                </a>
            </div>

        </div>        
    </div> 

@endsection