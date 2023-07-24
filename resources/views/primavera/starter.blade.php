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
            width: 200px;
            height: 35px;
        }
        .botao_cor {
            background-color: #ff6900; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%; 
        }
        .circle3 {
            width: 314px;
            height: 5%;
            position: absolute;
            top: 452.9%;
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
            background-color: #ff6900; 
            color: black;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/starter/171-min.jpg" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/starter/starter.png" alt="Slide 1" class="padding"> 
                <p style="font-size:50px; color: white" class="padding"><b>PRIMAVERA STARTER</b></p>
                <p style="font-size: 30px; color: white" class="padding">Duas vezes mais facíl para <br> encomendar e vender</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 5%; margin-top: 3%">

        <div class="text-center">
            <p style="font-size: 50px; color: #ff6900">
                <b>Solução Primavera Starter</b>
            </p>            
        </div> 

        <div class="container" style="padding-top: 2.5%">
            <div class="row" style="border-radius: 25px; border: 1px solid #000; justify-content: space-between">
                <a href="#" class="col-2 text-center menu_activo" style="max-width: 15%; color: #131212">  
                    <b>Módulos</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 15%; color: #131212">  
                    <b>VENDAS</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 15%; color: #131212">  
                    <b>INVENTÁRIOS</b>        
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 15%; color: #131212">  
                    <b>BANCOS</b>        
                </a>    
                <a href="#" class="col-4 text-center" style="max-width: 18%; color: #131212">  
                    <b>CONTAS CORRENTES</b>       
                </a>
                <a href="#" class="col-2 text-center" style="max-width: 15%; color: #131212">  
                    <b>ENCOMENDAS</b>        
                </a>       
            </div>         
        </div>

        <div class="container" style="padding-top: 2.5%">
            <div class="row padding" style="border-radius: 25px; border: 1px solid #000;">
                <div class="col-4 text-left">  
                    <p style="font-size: 25px; color: #ff6900"><b>Vendas</b></p>
                    <p style="font-size: 20px; word-spacing: 14px; color: black">
                        Emita faturas, recibos, notas de débito, guias de remessa e de transporte, registe vendas
                        a dinheiro, adiantamentos e devoluções.
                        Trata do IVA e os requisitos legais, documentos de transporte e envie o ficheiro SAFT ao portal da Administração Geral Tributária.
                    </p>     
                </div>
                <div class="col-4 text-left">   
                    <p style="font-size: 25px; color: #ff6900"><b>Inventários</b></p>    
                    <p style="font-size: 20px; word-spacing: 14px; color: black">
                        Com esta solução as encomendas são mais assertivas, a seleção de fornecedores mais ágil,
                        o tratamento dos encargos relacionados com as compras mais eficiente, e a receção e
                        conferência de compras mais fácil.<br><br>
                        Otimiza a gestão de armazéns, com ferramentas que lhe permitem gerir quantidades de reposição, entregas parciais, lotes e respetivas 
                        movimentações entre armazéns.
                    </p> 
                </div>
                <div class="col-4 text-left">   
                    <p style=" font-size: 25px; color: #ff6900"><b>Bancos</b></p>    
                    <p style="font-size: 20px; word-spacing: 14px; color: black">
                        Facilmente controla os pagamentos (quer sejam feitos em numerário, cheque, cartão
                        de crédito, multicaixa, ou outros meios de pagamento) e as comissões de vendedores.
                        A gestão de talões também é simples.<br><br>
                        Alertas de valores a receber e estatísticas sobre a atividade
                        de cada Caixa, movimentos efetuados, vendas, rentabilidade, entre outras análises.
                    </p> 
                </div>
                <div class="col-4 text-left">  
                    <p style="font-size: 25px; color: #ff6900"><b>Contas Correntes</b></p>    
                    <p style="font-size: 20px; word-spacing: 14px; color: black">
                        Obtenha uma gestão eficiente dos pagamentos e recebimentos.
                        Reconciliação bancária, transferência entre contas, liquidação de aplicações
                        financeiras, gestão de cheques pré-datados, transferência de cheques, entre muitas outras
                        operações bancárias.<br><br>
                        Controe os limites de crédito por cada cliente, reorganize a carteira
                        de dívida, através de planos de faturação automática. 
                    </p> 
                </div>    
                <div class="col-4 text-left">  
                    <p style="font-size: 25px; color: #ff6900"><b>Encomendas</b></p>    
                    <p style="font-size: 20px; word-spacing: 14px; color: black">
                        Com esta solução as encomendas são mais assertivas, a seleção
                        de fornecedores mais ágil, o tratamento dos encargos
                        relacionados com as compras mais eficiente, e a receção
                        e conferência de compras mais fácil. 
                    </p> 
                </div>
                
            </div>         
        </div>
                
    </div>  
    
    <div style="background-color: #3b00a2; height: 480px; position: relative;">        
        <div class="container padding">
            <p class="text-center" style="font-size:30px; color: white; word-spacing: 10px; padding-top: 6%">
                <b>Dê asas ao negócio para começar a crescer</b> 
            </p>  

            <p style="font-size:20px; color: white; word-spacing: 10px;">
                A solução PRIMAVERA Starter consolida a gestão de pequenos negócios. É a peça que faltava para dar mais solidez 
                ao seu negócio. Converta o dinamismo em crescimento. Dê asas ao negócio para que possa crescer. 
            </p>     
            
            <ul style="color: white; word-spacing: 10px">
                <li style="font-size:18px;">Aumente a produtividade na gestão de documentos administrativos </li>
                <li style="font-size:18px;">Acelere as vendas com ferramentas simples de gestão de Caixa</li>
                <li style="font-size:18px;">Obtenha uma gestão controlada da Tesouraria</li>
                <li style="font-size:18px;">Cumpra com segurança todos os requisitos legais e fiscais</li>
                <li style="font-size:18px;">Obtenha maior segurança dos dados, através de cópias de segurança automáticas</li>
            </ul>
        </div>        
    </div>

    <div style="height: 400px; position: relative;">
        
        <div class="container padding">
            <p class="text-center" style="font-size:30px; color: #ff6900; word-spacing: 10px; padding-top: 3%;">
                <b>Modalidade de acesso ao Primavera Starter Plus</b> 
            </p>  

            <p class="padding" style="font-size: 14.5px; color: black; word-spacing: 15px; line-height: 200%;">
                Esta solução está disponível para instalação mediante subscrição (Subscription Service Agreement). Isto significa que
                ao subscrever o produto, acede a uma licença de utilização temporária (anual ou por dois anos).
                Poderá ainda evitar custos de atualização imprevisíveis e encargos elevados de manutenção do sistema com o Continuity
                Software Agreement (CSA). Com o CSA tem garantias de usufruir sempre das últimas novidades tecnológicas, e de
                acompanhar a evolução legal e fiscal em diversos mercados, a um custo controlado e competitivo.
            </p> 
            
        </div>
        
    </div>

    <div style="background-color: #3b00a2; height: 600px; position: relative;">
        
        <div class="container" style="max-width: 1400px;">
            
            <div class="padding" style="display: flex;">
                <div style="flex: 1; text-align: -webkit-left; padding-top: 15%">
                    <p style="font-size: 35px; color: white;">Acelere os recebimentos com os Planos de Faturação Automática</p> 
                    <p style="font-size: 20px; color: rgb(230, 227, 227);">Emita facturas para um elevado número de clientes. Basta selecionar uma lista de documentos a facturar 
                        e definir os critérios de recorrência e a data de execução.</p>  
                </div>
                
                <div style="flex: 1; text-align: -webkit-center; padding-top: 8%">
                    <img class="img-fluid" src="/img/starter/starter-plus.png" alt="..." style="width: 90%"/>  
                </div>
            </div>
            
        </div>
        
    </div>

    
    <div style="background-color: #b2b2b2; height: 700px; position: center; padding-top: 4.5%">        
            
        <div style="display: flex; justify-content: center; align-items: center">

            <div style="text-align: center; border-radius: 25px; background-color: white; margin-right: 1%; padding:4% 3%">
                <p style="font-size:30px; color: blue;"><b>STARTER PLUS</b></p>
                <p style="font-size:25px; color: #25006d; margin-top: -10%"><b>1 ANO</b></p>
                <p style="font-size:13px; color: black; margin-top: -10%"><b>PREÇO SOB CONSULTA</b></p>

                <hr style="width: 157%; color: black; border-top: 1.5px solid black; transform: translateX(-18%);">

                <ul style="text-align: left">
                    <li style="padding-top: 6%">3* utilizadores</li>
                    <li style="padding-top: 6%">Limite de 3* Empresas</li>
                    <li style="padding-top: 6%">Suporte Remoto</li>
                    <li style="padding-top: 6%">Suporte Presencial</li>
                    <li style="padding-top: 6%">Formação</li>
                    <li style="padding-top: 6%">Certificado</li>
                </ul>

                <hr style="width: 157%; color: black; border-top: 1.5px solid black; transform: translateX(-18%);"> 

                <div class="botao_2 btn-center  botao_cor">
                    <a href="#" style="color: white;">
                        Estou Interessado/a
                    </a>
                </div>
            </div>

            <div style="text-align: center; border-radius: 25px; background-color: white; margin-left: 1%; padding:4% 3%">
                <div class="circle3" style="background-color: green;">
                    <div class="top-part"></div>
                    <p style="font-size:20px; color: white; padding-top: 4%"><b>RECOMENDADOS</b></p>
                </div>

                <p style="font-size:30px; color: blue;"><b>STARTER PLUS</b></p>
                <p style="font-size:25px; color: #25006d; margin-top: -10%"><b>2 ANOS</b></p>
                <p style="font-size:13px; font-style:bond; color: black; margin-top: -10%"><b>PREÇO SOB CONSULTA</b></p>
                
                <hr style="width: 157%; color: black; border-top: 1.5px solid black; transform: translateX(-18%);">                   

                <ul style="text-align: left;">
                    <li style="padding-top: 6%">3* utilizadores</li>
                    <li style="padding-top: 6%">Limite de 3* Empresas</li>
                    <li style="padding-top: 6%">Suporte Remoto</li>
                    <li style="padding-top: 6%">Suporte Presencial</li>
                    <li style="padding-top: 6%">Formação</li>
                    <li style="padding-top: 6%">Certificado</li>
                </ul>

                <hr style="width: 157%; color: black; border-top: 1.5px solid black; transform: translateX(-18%);"> 

                <div class="botao_2 botao_cor">
                    <a href="#" class="btn-center" style="color: white;">
                        Estou Interessado/a 
                    </a>
                </div>
            </div>

        </div>
            
        
    </div>  
    

@endsection