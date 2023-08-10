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
            margin-left: 7%; 
        }
        .circle3 {
            width: 475px;
            height: 5%;
            position: absolute;
            top: 474%;
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
        .menu_curvo {
            border-radius: 0 25px 25px 0;  
            transform: skewY(0deg);
        }             
        .altura {
            padding-top: 1.5%;
            padding-bottom: 1.5%;
        }       
        ::marker {
            color: blue;
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/solucoes/img-6.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/solucoes/pssst-1.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PSSST</b></h3>
                <p style="font-size: 30px; color: white" class="padding">POS ao serviços da restauração</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 2%; margin-top: 3%; background-color: white;">

        <div class="text-center">
            <p style="font-size: 50px; color: rgb(91, 50, 50)">
                <b>Garanta a Máxima Eficiência no Atendimento ao Cliente</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                O seu know-how, expertise e conhecimentos do setor são vitais. Mas é necessário que todo o seu vigor, energia 
                e investimento sejam auxiliados por ferramentas de gestão que impulsionem o máximo potencial do negócio.
            </p>           
        </div>

        <div class="container" style="padding-top: 1%">
            <div class="row" style="border-radius: 0px; border: 0px solid #000; justify-content: center;">
                <a href="#" class="col-2 text-center altura menu_activo" style="max-width: 10%; background-color:rgb(35, 35, 245); color: white">  
                    <b>MÓDULOS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 10%; background-color: rgb(92, 50, 50); color: white">  
                    <b>STOCKS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 18%; background-color: rgb(92, 50, 50); color: white">  
                    <b>PREÇOS PEDIDOS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 10%; background-color: rgb(92, 50, 50); color: white">  
                    <b>CAIXA</b>        
                </a>    
                <a href="#" class="col-4 text-center altura" style="max-width: 12%; background-color: rgb(92, 50, 50); color: white">  
                    <b>FIDELIZAÇÃO</b>       
                </a>  
                <a href="#" class="col-4 text-center altura" style="max-width: 11%; background-color: rgb(92, 50, 50); color: white">  
                    <b>CONTROLO</b>       
                </a>   
                <a href="#" class="col-4 text-center altura menu_curvo" style="max-width: 14%; background-color: rgb(92, 50, 50); color: white">  
                    <b>INTERATIVIDADE</b>       
                </a> 
            </div>         
        </div>
                
    </div>

    <div style="margin-bottom: 2%; margin-top: 1%;">

        <div style="padding: 0 15% 3.5% 15%;">        
            <div class="card-deck mb-3" >
                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: 0px; margin-right: -3px; border-radius: 25px 0 0 0;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Stocks
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Gerir as entradas e saídas de stock é muito simples com esta solução. Facilmente pode configurar 
                        alertas com níveis mínimos de reposição. Desta forma, tem sempre a certeza de que vai satisfazer 
                        oportunamente os pedidos dos seus clientes.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: -3px; margin-right: -3px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Preços
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Simplifique ao máximo a gestão de preços com o Pssst!TM. A solução dispõe de um sistema de menus 
                        dinâmico que facilita a gestão de valores diferenciados conforme ingredientes; bem como a composição 
                        estática e dinâmica de artigos; a definição de preços por sala, por cliente, por hora (happy hours) 
                        ou dia da semana.
                    </p>  
                </div>                               

                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: -3px; margin-right: -3px; border-radius: 0 25px 0 0;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Pedidos
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        As operações são muito simples e rápidas com o Pssst! De um modo intuitivo, e sem necessidade de formação, 
                        rapidamente os operadores executam todas as ações no POS.
                    </p>  
                </div> 
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: -3rem!important; margin-top: -3rem!important;">
                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: 0px; margin-right: -3px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Caixa
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Obtenha o máximo rigor na gestão de caixa. 
                        <br>Com o Pssst!TM é muito simples controlar a abertura/fecho de caixa, assim como as entradas e saídas. 
                        A gestão do Fundo de Maneio é mais rigorosa. Controla também com precisão as vendas, através de declarações 
                        de caixa. E avalia os fluxos de caixa com mapas mensais, diários e horários.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: -3px; margin-right: -3px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Fidelização
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Fortaleça a relação com os seus clientes. Implemente facilmente medidas que impulsionam a fidelização. 
                        Com o Pssst!TM é muito fácil gerir cartões de clientes.
                    </p>  
                </div> 

                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: -3px; margin-right: -3px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Controlo
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Obtenha a máxima eficiência na gestão de caixa. Controle detalhadamente as existências de stock. 
                        Otimize as encomendas aos fornecedores. Simplifique a gestão dos colaboradores.
                    </p>  
                </div>               
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: -3rem!important; margin-top: -3rem!important;">
                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: 0px; margin-right: -3px; border-radius: 0 0 0 25px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Interatividade
                    </h5> 
                    <p class="padding" style="font-size: 15px; color: white;">
                        Nove na comunicação com os seus clientes. <br>Proporcione uma experiência interativa verdadeiramente 
                        fascinante. <br>Dê aos seus clientes a possibilidade de efetuarem os seus próprios pedidos através 
                        de equipamentos.
                    </p>  
                </div>  
                
                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: 0px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 0%">                        
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                    </p>  
                </div>  
                
                <div class="card mb-4 padding" style="background-color: rgb(92, 50, 50); margin-left: 0px; margin-right: -3px; border-radius: 0 0 25px 0;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 0%">                        
                    </p> 
                    <p class="padding" style="font-size: 15px; color: white;">
                    </p>  
                </div> 
            </div> 
        </div>
                
    </div>

    <div style="background-color: rgb(5, 5, 65); height: 650px; position: relative; padding: 0% 0%">
        
        <div class="contanier" style="flex: 1; padding-top: 5%;">
            <h5 style="font-size: 35px; color: white; text-align: -webkit-center;"><b>Ative o seu negócio com o Pssst!</b></h5>
            <p style="font-size: 30px; color: white; text-align: -webkit-left; padding: 1% 23%"><b>Dê um grande impulso aos resultados com esta solução inovadora 
                de POS (ponto de venda):</b></p>  

            <ul style="text-align: left; color: white; padding-left: 25%">
                <li style="padding-top: 1%; font-size: 20px;">Gerir o stock é simples</li>
                <li style="padding-top: 1%; font-size: 20px;">Controlar os pedidos e mesas é muito rápido</li>
                <li style="padding-top: 1%; font-size: 20px;">Efetuar movimentos de Caixa é intuitivo</li>
                <li style="padding-top: 1%; font-size: 20px;">Implementar campanhas de fidelização de clientes é célere</li>
                <li style="padding-top: 1%; font-size: 20px;">Interagir com o cliente é uma experiência única</li>
                <li style="padding-top: 1%; font-size: 20px;">Cumprir as exigência legais e fiscais é fácil</li>
            </ul>

        </div>
        
    </div> 

    <div style="background-color: rgb(92, 50, 50); height: 500px; position: relative; padding: 0% 0%">
        
        <div class="contanier " style="flex: 1; padding: 3% 22%">
            <h5 style="font-size: 35px; color: white; text-align: -webkit-center;"><b>Tipos De Acesso A Esta Solução</b></h5> 
            <p style="font-size: 25px; color: white; text-align: -webkit-left; padding-top: 3%">
                Esta solução está disponível para instalação mediante subscrição. Isto significa que ao subscrever o produto, 
                acede a uma licença de utilização temporária (anual ou por dois anos).
            </p>
            <p style="font-size: 25px; color: white; text-align: -webkit-left;">
                A subscrição contempla o acesso ao software, assim como à respetiva atualização e manutenção durante o período 
                de acesso escolhido. Para aceder à solução basta efetuar a subscrição nos planos a baixo.
            </p>

        </div>
        
    </div> 

    <div style="background-color: white; height: 950px; position: relative; padding: 0% 0%">
        
        <div class="contanier padding" style="flex: 1; padding-top: 4%;">
            <h5 style="font-size: 35px; color: black; text-align: -webkit-center; padding-top: 4%;"><b>Ofereça um serviço rápido e eficiente</b></h5>
            <p style="font-size: 25px; color: black; text-align: -webkit-left; padding: 0% 20%">
                Um ambiente de trabalho tátil, simples, moderno e intuitivo permite-lhe otimizar a gestão de pedidos. 
                As operações são fáceis e rápidas, promovendo a máxima produtividade de todos os operadores.
            </p>
            <p style="font-size: 25px; color: black; text-align: -webkit-left; padding: 0% 20%">
                Obtenha a máxima eficiência na gestão de preços. A solução dispõe de um sistema de menus dinâmico que facilita a 
                gestão de valores diferenciados conforme ingredientes, a composição estática e dinâmica de artigos, a definição 
                de preços por sala, por cliente, por hora (happy hours) ou dia da semana, descontos e promoções.
            </p> 
            
            <div style="text-align: -webkit-center;">
                <img class="img-fluid" src="/img/solucoes/231.png" alt="..." style="width: 40%"/>  
            </div>

        </div>
        
    </div> 

    <div style="background-color: #b2b2b2; height: 770px; position: center; padding-top: 5%">        
            
        <div style="display: flex; justify-content: center; align-items: center">

            <div style="text-align: center; border-radius: 25px; background-color: white; padding-top: 2.5%; margin-right: 1%; width:25%; height:600px">
                <h5 style="font-size:30px; color: blue;"><b>PSSST EASY</b></h5>
                <h5 style="font-size:25px; color: #a4a3a5;"><b>1 ANO</b></h5>
                <h5 style="font-size:20px; color: black;"><b>PREÇO SOB CONSULTA</b></h5>

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">

                <ul style="text-align: left; color: rgb(92, 50, 50);">
                    <li style="padding-top: 6%">Gestão exclusiva do ponto de venda</li>
                    <li style="padding-top: 6%">Limitado a 1 posto e 2 utilizadores</li>
                    <li style="padding-top: 6%">Atualizações legais e fiscais</li>
                </ul>

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;"> 

                <div class="botao_2 btn-center  botao_cor">
                    <a href="#" style="color: white;">
                        Estou Interessado/a
                    </a>
                </div>
            </div>

            <div style="text-align: center; border-radius: 25px; background-color: white; padding-top: 5%; margin-left: 1%; width:25%; height:600px">
                <div class="circle3" style="background-color: rgb(92, 50, 50);;">
                    <div class="top-part"></div>
                    <p style="font-size:20px; color: white; padding-top: 4%"><b>RECOMENDADOS</b></p>
                </div>

                <h5 style="font-size:30px; color: blue;"><b>PSSST</b></h5>
                <h5 style="font-size:25px; color: #25006d;" hidden><b>2 ANOS</b></h5>
                <h5 style="font-size:20px; font-style:bond; color: black;"><b>PREÇO SOB CONSULTA</b></h5>
                
                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">                   

                <ul style="text-align: left; color: rgb(92, 50, 50);">
                    <li style="padding-top: 6%">Integra com o ERP e com soluções móveis</li>
                    <li style="padding-top: 6%">Sem limite de postos e utilizadores</li>
                    <li style="padding-top: 6%">Subscrição anual consoante o nº de postos</li>
                    <li style="padding-top: 6%">Atualizações legais e fiscais</li>
                </ul>

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;"> 

                <div class="botao_2 botao_cor">
                    <a href="#" class="btn-center" style="color: white;">
                        Estou Interessado/a 
                    </a>
                </div>
            </div>

        </div>            
        
    </div>

    

@endsection