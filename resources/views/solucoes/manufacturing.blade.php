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
            height: 70px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 5%;
            margin-top: 5%;
            margin-left: 37%; 
        }
        .circle3 {
            width: 475px;
            height: 5%;
            position: absolute;
            top: 459.5%;
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
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/solucoes/img-10.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/solucoes/manufature.png" alt="Slide 1" class="padding"> 
                <p style="font-size:50px; color: white" class="padding"><b>MANUFACTURING</b></p>
                <p style="font-size: 30px; color: white" class="padding">Entre na era da produção inteligente 4.0</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 2%; margin-top: 3%; background-color: white;">

        <div class="text-center">
            <p style="font-size: 50px; color: #3f726d">
                <b>Acelere a Cadeia de Prudução</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                A PRIMAVERA disponibiliza-lhe uma solução integrada, na qual o sistema de gestão da produção (MES) está incorporado 
                no ERP, permitindo-lhe ligar digitalmente o "Shop Floor” ao "Top Floor”, construindo uma espécie de "torre de 
                controlo” a partir da qual gere toda a cadeia de valor, desde as operações fabris até às áreas de marketing e vendas, 
                compras, inventário, recursos humanos e gestão contabilística e financeira.
            </p>           
        </div>

        <div class="container" style="padding-top: 2.5%">
            <div class="row" style="border-radius: 0px; border: 0px solid #000; justify-content: space-between">
                <a href="#" class="col-2 text-center menu_activo" style="max-width: 25%; background-color:rgb(44, 75, 104); color: white">  
                    <b>MÓDULOS</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 25%; background-color: #3f726d; color: white">  
                    <b>PRODUÇÃO</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 30%; background-color: #3f726d; color: white">  
                    <b>PLANEJAMENTO</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 25%; background-color: #3f726d; color: white">  
                    <b>QUALIDADE</b>        
                </a>    
                <a href="#" class="col-4 text-center menu_curvo" style="max-width: 35%; background-color: #3f726d; color: white">  
                    <b>TRACK & TRACE</b>       
                </a> 
            </div>         
        </div>
                
    </div>

    <div style="margin-bottom: 2%; margin-top: 1%;">

        <div style="padding: 1.5% 7%">        
            <div class="card-deck mb-3" >
                <div class="card mb-4 padding" style="background-color: #3f726d; margin-left: 0px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Produção
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Há uma nova dinâmica à sua espera na preparação e gestão da produção. Fichas técnicas de produtos 
                        fáceis de criar, incluindo toda a informação necessária: listas de materiais, operações para cada 
                        ordem de fabrico (Bill Of Material), componentes do produto principal e respetivas composições, 
                        quantidades, subprodutos e produtos intermédios.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #3f726d; margin-left: -3px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Planejamento
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Através de um planeamento gráfico, distribui no tempo as operações pelos diversos centros de trabalho, 
                        de forma simples e ágil. Se preferir, pode recorrer ao algoritmo de planeamento que sugere a melhor 
                        alternativa de escalonamento para as operações. Poderá simular planos de produção alternativos e 
                        executar diagnósticos que lhe permitem decidir sobre a opção mais ajustada a cada momento.
                    </p>  
                </div>                                
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: -3rem!important; margin-top: -3rem!important;">
                <div class="card mb-4 padding" style="background-color: #3f726d; margin-left: 0px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Track & Trace
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Aceda em temporeal aos dados operacionais doshopfloor e saiba o que se passa no chão de fábrica a partir 
                        de qualquer lugar.
                        <br>Através de uma espécie de Cockpit, disponível para todo o tipo de monitores, consegue visualizar os 
                        centros de trabalho e respetivo estado das ordens de fabrico, e ainda aceder a um conjunto de 
                        indicadores de performance sobre cada centro de trabalho e acompanhar o.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #3f726d; margin-left: -3px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Qualidade
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Tenha a certeza de que entrega produtos de altíssima qualidade aos seus clientes. A diferenciação pela 
                        qualidade ganha cada vez mais terreno, por isso, não ponha em causa o negócio devido a fatores que 
                        pode muito bem controlar.
                    </p>  
                </div> 
               
            </div>            
         
        </div>
                
    </div>

    <div style="background-color: #99cc99; height: 650px; position: relative; padding: 0% 0%">
        
        <div class="contanier" style="flex: 1; padding-top: 10%;">
            <p style="font-size: 35px; color: white; text-align: -webkit-center;">
                <b>Entre na era digital de forma simples</b>
            </p>
            <p class="padding" style="font-size: 35px; color: black; text-align: -webkit-center;">
                <b>As soluções da PRIMAVERA para o setor industrial garantem-lhe essa abrangência e integração, permitindo-lhe:</b>
            </p>  

            <ul style="text-align: left; color: black; padding-left: 25%">
                <li style="padding-top: 1%; font-size: 20px;">Integrar equipamentos ligados a sensores (IoT)</li>
                <li style="padding-top: 1%; font-size: 20px;">Extrair a máxima capacidade operacional dos equipamentos</li>
                <li style="padding-top: 1%; font-size: 20px;">Desenvolver aplicações à medida</li>
                <li style="padding-top: 1%; font-size: 20px;">Organizar e preparar rapidamente a expedição da mercadoria</li>
                <li style="padding-top: 1%; font-size: 20px;">Consultar Dashboards com análises da produção em tempo real</li>
                <li style="padding-top: 1%; font-size: 20px;">Aceder à informação em qualquer lugar</li>
            </ul>

        </div>
        
    </div> 

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/solucoes/ativo-19.png" alt="Slide 1">                
            </div>

            <div class="carousel padding" style="text-align: -webkit-center;">
                <p style="font-size:50px; color: white; margin-top: 10%" class="padding"><b>Rentabilize a produção, salvaguarde a qualidade</b></p>
                

                <div class="container" style="border-radius: 25px; text-align: -webkit-left; background-color: white; width: 50%">

                    <ul style="text-align: left; color: black;">
                        <li style="font-size: 20px; padding-top: 5%;">Rapidez na preparação das fichas técnicas</li>
                        <li style="font-size: 20px;">Celeridade no planeamento e programação das ordens de fabrico</li>
                        <li style="font-size: 20px;">Efeciência no controlo de execução</li>
                        <li style="font-size: 20px;">Aumento da capacidade de produção instalada</li>
                        <li style="font-size: 20px;">Agilidade na gestão de meios materiais e humanos</li>
                        <li style="font-size: 20px;">Redução dos custos de produção</li>
                        <li style="font-size: 20px;">Elevado nível de controlo logístico e financeiro</li>
                        <li style="font-size: 20px;">Simplicidade de acesso a informação financeira</li>
                        <li style="font-size: 20px; padding-bottom: 5%;">Informação de apoio à tomada de decisão</li>
                    </ul>

                </div>
                
            </div>
        </div>
        
    </div>

    <div style="background-color: white; height: 400px; position: relative; padding: 0% 0%">
        
        <div class="contanier " style="flex: 1; padding: 7%; 5%">
            <p style="font-size: 35px; color: black; text-align: -webkit-center;">
                <b>Mais transparência. Maior mobilidade. Melhor visibilidade da produção</b>
            </p> 
            <p style="font-size: 25px; color: black; text-align: -webkit-left;">
                Através de dashboards sempre atualizados é possível aceder, em tempo real e através de qualquer dispositivo, 
                a dados operacionais do shopfloor, sejam eles introduzidos pelos operadores ou obtidos, via integração, 
                diretamente das máquinas, bem como a um conjunto relevante de indicadores de desempenho, para cada um dos 
                centros de trabalho existentes.
            </p>
        </div>
        
    </div> 

    <div style="background-color: #6aa8a1; height: 690px; position: relative; padding: 0% 0%">
        
        <div class="contanier padding" style="flex: 1; padding-top: 4%;">
            <p style="font-size: 35px; color: white; text-align: -webkit-center; padding-top: 10%;"><b>Acesso</b></p>
            <p style="font-size: 25px; color: white; text-align: -webkit-left;">
                Obtenha uma licença perpétua de utilização da solução.
                <br>Aceda à sua solução de gestão na modalidade mais convencional: On-premises.
                <br>Com esta modalidade terá acesso a uma licença perpétua de utilização do software.
            </p>
            <p style="font-size: 25px; color: white; text-align: -webkit-left;">
                Poderá ainda evitar custos de atualização imprevisíveis e encargos elevados de manutenção do sistema 
                com o Continuity Software Agreement (CSA). Com o CSA tem garantias de usufruir sempre das últimas 
                novidades tecnológicas, e de acompanhar a evolução legal e fiscal em diversos mercados, a um custo 
                controlado e competitivo.
            </p> 
        </div>
        
    </div> 

    <div class="botao_2 botao_cor" style="background-color: green;">
        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
            Estou Interessado/a 
        </a>
    </div>    

@endsection