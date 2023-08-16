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
            width: 333px;
            height: 66px;
        }
        .botao_cor {
            background-color: black; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 36%; 
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
                <img src="/img/starter/img-2.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img hidden src="/img/starter/starter.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PRIMAVERA PRO LITE</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Rigor na gestão financeira</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 5%; margin-top: 3%">

        <div class="text-center">
            <p style="font-size: 50px; color: blue; padding: 2.5% 0">
                <b>Módulos Da Solução Primavera Pro Lite</b>
            </p> 
            <p style="font-size: 25px; color: black">
                A solução Pro Lite é um produto mono-empresa e o seu licenciamento está limitado a 5 utilizadores.
            </p>           
        </div>

        <div style="padding: 2.5% 7%">        
            <div class="card-deck mb-3">
                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 5%;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Vendas
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Emita faturas, recibos, notas de débito, guias de remessa e de transporte, registe vendas a dinheiro, 
                        adiantamentos e devoluções.
                        Trata do IVA e os requisitos legais, documentos de transporte e envie o ficheiro SAFT ao portal da 
                        Administração Geral Tributária (AGT).
                    </p>  
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #3b00a2; border-radius: 5%">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Bancos
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Facilmente controla os pagamentos (quer sejam feitos em numerário, cheque, cartão de crédito, multicaixa, 
                        ou outros meios de pagamento) e as comissões de vendedores. A gestão de talões também é simples.
                        Alertas de valores a receber e estatísticas sobre a atividade de cada Caixa, movimentos efetuados, vendas, 
                        rentabilidade, e outras.
                    </p>  
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 5%">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Contabilidade
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Acelere a execução e obtenha o máximo rigor contabilístico. A solução PRIMAVERA Pro lite agiliza todo o 
                        processo contabilístico: desde o registo de documentos, passando pela gestão de orçamentos, elaboração 
                        de planos de contas por exercícios, até ao apuramento de resultados.
                    </p>  
                </div>                
            </div>            
        
            <div class="card-deck mb-3">
                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 5%">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Inventários
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Com esta solução as encomendas são mais assertivas, a seleção de fornecedores mais ágil, o tratamento 
                        dos encargos relacionados com as compras mais eficiente, e a receção e conferência de compras mais fácil. 
                        Otimiza a gestão de armazéns, com ferramentas que lhe permitem gerir quantidades de reposição, entregas 
                        parciais, lotes e respetivas movimentações entre armazéns.
                    </p>  
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #3b00a2; border-radius: 5%">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Contas Correntes
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Obtenha uma gestão eficiente dos Compras pagamentos e recebimentos. Reconciliação bancária, transferência 
                        entre contas,liquidação de aplicações financeiras, gestão de cheques pré-datados, transferência de cheques, 
                        entre muitas outras operações bancárias. Controe os limites de crédito por cada cliente,reorganize a carteira 
                        de dívida, através de planos de faturação automática.
                    </p>  
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 5%">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Compras
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Acabe com a rotura de stocks. Elimine o desperdício. Satisfaça os pedidos dos seus clientes com a máxima 
                        eficiência. Otimize ainda a gestão de inventário com ferramentas que auxiliam o controlo de stocks e 
                        respetiva valorização do Preço de Custo Médio em diversos.
                    </p>  
                </div>                
            </div>            
        
            <div class="card-deck mb-3">
                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 5% 0 0 5%; margin-right: 0px">
                 
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #3b00a2; border-radius: 0%; margin-left: 0px; margin-right: 0px">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Encomendas
                    </p> 
                    <p style="font-size: 15px; color: white; line-height: 30px;">
                        Com esta solução as encomendas são mais assertivas, a seleção de fornecedores mais ágil, o tratamento dos 
                        encargos relacionados com as compras mais eficiente, e a receção e conferência de compras mais fácil.
                    </p>  
                </div>

                <div class="card mb-4 padding box_pro_lite" style="background-color: #0f0034; border-radius: 0 5% 5% 0; margin-left: 0px">

                </div>                
            </div>
        </div>
                
    </div> 

    <div style="margin-bottom: 5%;">
               
        <div class="card-deck mb-3" style="padding: 0 7%">
            <div class="card mb-4 padding" style="border: 0px solid rgba(0,0,0,.125);">
                <img class="img-fluid" src="/img/starter/203-min.png" alt="..." style="width: 95%"/>    
            </div>

            <div class="card mb-4 padding" style="padding-left:15px; border: 0px solid rgba(0,0,0,.125);">
                <p style="font-size: 40px; color: black; padding: 0% 6% 0 0; margin-left: 13%"><b>Rigor na contabilidade e rapidez nas exigências fiscais</b></p> 
                <p style="font-size: 25px; color: black; padding: 0% 6% 0 0; margin-left: 13%">
                    Agilize todo o processo contabilístico. Acelere a introdução de documentos, a gestão de orçamentos, os 
                    lançamentos, a elaboração de planos de contas por exercícios, a obtenção de mapas, demonstrações 
                    económico-financeiras periódicas e de final de exercício, demonstrações de fluxo de caixa e funções ou 
                    o apuramento de resultados.
                </p>  
            </div>
                            
        </div>         
                
    </div> 

    <div style="background-color: #9cadcf; margin-bottom: 5%; margin-top: 3%">
               
        <div class="card-deck mb-3" style="background-color: #9cadcf; padding: 2.5% 7%">
            <div class="card mb-4 padding" style="background-color: #9cadcf; padding-left:15px; border: 0px solid rgba(0,0,0,.125);">
                <p style="font-size: 40px; color: black; padding: 15% 6% 0 0;"><b>Gandes vantagesns com o Pro Lite</b></p> 
                <p style="font-size: 25px; color: black; padding: 3% 6% 0 0;">
                    Eficiência na gestão de fornecedores 
                    <br>Foco na satisfação dos seus clientes 
                    <br>Movimentações e valorização da mercadoria 
                    <br>Controlo total sobre os pagamentos e recebimentos 
                    <br>Credibilidade dos números da sua empresa.
                </p>  
            </div>

            <div class="card mb-4 padding" style="background-color: #9cadcf; border: 0px solid rgba(0,0,0,.125);">
                <img class="img-fluid" src="/img/starter/202-min.png" alt="..." style="width: 85%; text-align: -webkit-right; "/>    
            </div>                            
        </div>         
                
    </div>
    
    <div style="height: 480px; position: relative;">        
        <div class="container">
            <p class="text-center" style="font-size:30px; word-spacing: 10px; padding-top: 6%; color: black">
                <b>Tenha acesso ao primavera pro</b> 
            </p>  

            <p style="font-size: 20px; word-spacing: 10px; color: black; padding: 1.5% 0 0 0;">
                O produto Primavera Pro Lite é comercializados através de um contrato de subscrição (anual ou por dois anos), 
                o qual inclui updates de produto. 
            </p>   
            
            <a href="#" class="botao_2 btn-center botao_cor" style="color: white; position: relative; display: flex; justify-content: center;">
                Estou Interessado/a
            </a>

        </div>        
    </div> 
    

@endsection