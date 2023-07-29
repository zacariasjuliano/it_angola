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
            top: 296.7%;
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
        ::marker {
            color: blue;
        }
        .altura {
            padding-top: 0.5%;
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/starter/18.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img src="/img/starter/starter.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PRIMAVERA STARTER EASY</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Começe a facturar e não pare <br> nunca mais</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 5%; margin-top: 3%">

        <div class="text-center">
            <p style="font-size: 50px; color: blue">
                <b>Solução Primavera Starter Easy</b>
            </p>            
        </div> 

        <div class="container" style="padding-top: 2.5%">
            <div class="row" style="border-radius: 25px; border: 1px solid #000; justify-content: space-between; height: 35px;">
                <a href="#" class="col-2 text-center menu_activo altura" style="max-width: 50%; color: #131212">  
                    <b>Módulos</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 50%; color: #131212">  
                    <b>VENDAS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 50%; color: #131212">  
                    <b>INVENTÁRIOS</b>        
                </a>    
                <a href="#" class="col-4 text-center altura" style="max-width: 50%; color: #131212">  
                    <b>CONTAS CORRENTES</b>       
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
                
            </div>         
        </div>
                
    </div>  
    
    <div style="background-color: #3b00a2; height: 480px; position: relative;">        
        <div class="container padding">
            <p class="text-center" style="font-size:30px; color: white; word-spacing: 10px; padding-top: 6%">
                <b>O impluso para o seu negócio crescer</b> 
            </p>  

            <p style="font-size:20px; color: white; word-spacing: 10px;">
                O PRIMAVERA Starter Easy é a solução de faturação mais rápida, simples e intuitiva para 
                a gestão de pequenos negócios. Dê um grande impulso ao seu negócio com esta solução:  
            </p>     
            
            <ul style="color: white; word-spacing: 10px">
                <li style="font-size:18px;">O custo é reduzido e diluído no tempo</li>
                <li style="font-size:18px;">Fácil de usar</li>
                <li style="font-size:18px;">Atualizações automáticas e permanentes</li>
                <li style="font-size:18px;">Acompanha sempre a evolução fiscal</li>
                <li style="font-size:18px;">Emite faturas rapidamente</li>
                <li style="font-size:18px;">Controle facilmente o fluxo diário de Caixa</li>
            </ul>
        </div>        
    </div>

    <div style="height: 400px; position: relative;">
        
        <div class="container padding">
            <p class="text-center" style="font-size:30px; color: blue; word-spacing: 10px; padding-top: 3%;">
                <b>Como ter acesso a solução Primaveras Starter Easy</b> 
            </p>  

            <p class="padding" style="font-size: 16px; color: black; word-spacing: 15px; line-height: 200%;">
                Esta solução está disponível para instalação mediante subscrição. Isto significa que ao subscrever o produto, acede a 
                uma licença de utilização temporária (anual ou por dois anos). <br><br> 
                A subscrição contempla o acesso ao software, assim como à respetiva atualização e manutenção durante o período de 
                acesso escolhido. Para aceder à solução basta efetuar a subscrição nos planos a baixo.
            </p> 
            
        </div>
        
    </div>

    
    <div style="background-color: #b2b2b2; height: 750px; position: center; padding-top: 4.5%">        
            
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