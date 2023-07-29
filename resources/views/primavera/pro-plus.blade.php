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
            height: 73px;
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
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/starter/img-3.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img hidden src="/img/starter/starter.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PRIMAVERA PRO PLUS</b></h3>
                <p style="font-size: 30px; color: white" class="padding">O segredo da gestão sólida <br>dos pequenos negócios</p>
            </div>
        </div>
        
    </div>

    <div style="margin-bottom: 1.5%; margin-top: 6%">

        <div class="text-center">
            <p style="font-size: 50px; color: black">
                <b>Módulos Da Solução Primavera Pro Plus</b>
            </p>            
        </div> 

        <div class="container" style="padding-top: 2.5%">
            <table class="table table-bordered" style="border-radius: 25px ;">
                <thead style="background-color: white">
                    <tr>
                        <th style="color: blue;">VENDAS</th>
                        <th style="color: blue;">INVENTÁRIOS</th>
                        <th style="color: blue;">BANCOS</th>
                        <th style="color: blue;">CONTAS CORRENTES</th>
                        <th style="color: blue;">ENCOMENDAS</th>
                        <th style="color: blue;">COMPRAS</th>
                        <th style="color: blue;">CONTABILIDADE</th>
                        <th style="color: blue;">RECURSOS HUMANOS</th>
                    </tr>
                </tbody>
            </table>        
        </div>
        
        <div class="text-left" style="padding: 2% 6.5%"> 
            <p style="font-size: 25px; color: black">
                A solução Primavera Pro Plus é um produto mono-empresa e o seu licenciamento está limitado a 6 utilizadores. 
                No módulo de Recursos Humanos, disponível na oferta Pro Plus, há um segundo nível de licenciamento por número 
                de colaboradores, que controla o nº máximo de 20 colaboradores da empresa.
            </p>           
        </div>
                
    </div>
    

    <div style="margin-bottom: 5%;">

        <div style="padding: 1.5% 7%">        
            <div class="card-deck mb-3" >
                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: 0px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Vendas
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Emita faturas, recibos, notas de débito, guias de remessa e de transporte, registe vendas a dinheiro, 
                        adiantamentos e devoluções.
                        Trata do IVA e os requisitos legais, documentos de transporte e envie o ficheiro SAFT ao portal da 
                        Administração Geral Tributária (AGT).
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Bancos
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Facilmente controla os pagamentos (quer sejam feitos em numerário, cheque, cartão de crédito, multicaixa, 
                        ou outros meios de pagamento) e as comissões de vendedores. A gestão de talões também é simples.
                        Alertas de valores a receber e estatísticas sobre a atividade de cada Caixa, movimentos efetuados, vendas, 
                        rentabilidade, e outras.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: 0px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Contabilidade
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Acelere a execução e obtenha o máximo rigor contabilístico. A solução PRIMAVERA Pro lite agiliza todo o 
                        processo contabilístico: desde o registo de documentos, passando pela gestão de orçamentos, elaboração 
                        de planos de contas por exercícios, até ao apuramento de resultados.
                    </p>  
                </div>                
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: -3rem!important; margin-top: -3rem!important;">
                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: 0px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Inventários
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Com esta solução as encomendas são mais assertivas, a seleção de fornecedores mais ágil, o tratamento 
                        dos encargos relacionados com as compras mais eficiente, e a receção e conferência de compras mais fácil. 
                        Otimiza a gestão de armazéns, com ferramentas que lhe permitem gerir quantidades de reposição, entregas 
                        parciais, lotes e respetivas movimentações entre armazéns.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: -3px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Contas Correntes
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Obtenha uma gestão eficiente dos Compras pagamentos e recebimentos. Reconciliação bancária, transferência 
                        entre contas, liquidação de aplicações financeiras, gestão de cheques pré-datados, transferência de cheques, 
                        entre muitas outras operações bancárias. Controe os limites de crédito por cada cliente,reorganize a carteira 
                        de dívida, através de planos de faturação automática.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: 0px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Recursos Humanos
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Trata automaticamente o processamento de salários e outras remunerações, sistemas contributivos e retenções, 
                        avenças, comissões, indemnizações e outros encargos.
                    </p>  
                </div>                
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: 0rem!important; margin-top: 0rem!important;">
                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: 0px; margin-right: 0px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Compras
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Acabe com a rotura de stocks. Elimine o desperdício. Satisfaça os pedidos dos seus clientes com a máxima 
                        eficiência. Otimize ainda a gestão de inventário com ferramentas que auxiliam o controlo de stocks e 
                        respetiva valorização do Preço de Custo Médio em diversos.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -6px; margin-right: -1px;">
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: 5%">
                        Encomendas
                    </p> 
                    <p style="font-size: 15px; color: white;">
                        Com esta solução as encomendas são mais assertivas, a seleção de fornecedores mais ágil, o tratamento dos 
                        encargos relacionados com as compras mais eficiente, e a receção e conferência de compras mais fácil.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: 0px;">

                </div>                
            </div>
        </div>
                
    </div> 
    
    <div style="height: 750px; position: relative; padding: 0% 0%">
            
        <div class="padding" style="display: flex;">
            
            <div style="flex: 1; text-align: -webkit-center;">
                <img class="img-fluid" src="/img/starter/208-min.png" alt="..." style="width: 75%"/>  
            </div>

            <div style="flex: 1; text-align: -webkit-left; padding-left: 3%; padding-top: 9%;">
                <p style="font-size: 35px; color: black;"><b>Renovação e fim de contrato</b></p> 
                <p style="font-size: 20px; color: black;  padding-right: 43%;">
                    No que respeita à gestão de contratos de trabalho, torna-se tudo muito mais rápido e assertivo. 
                    A solução simplifica toda a gestão contratual: desde o controlo dos períodos experimentais, passando 
                    pela renovação e fins de contrato.
                </p>  
            </div>
            
        </div>
        
    </div>
    
    <div style="height: 860px; position: relative; padding: 0% 0%">
            
        <div class="padding" style="display: flex;">

            <div style="flex: 1; text-align: -webkit-left; padding-top: 13%; padding-left: 7%;">
                <p style="font-size: 35px; color: black;"><b>Formação de colaboradores</b></p> 
                <p style="font-size: 20px; color: black; padding-right: 20%;">
                    A gestão da formação é outra das preocupações do departamento de gestão de Recursos Humanos, mas só é uma 
                    preocupação se não tiver suporte tecnológico. Esta solução identifica facilmente as necessidades de formação 
                    dos colaboradores, de acordo com os requisitos de cada cargo, e suporta todos os processos de formação de 
                    forma integrada.
                </p>  
            </div>
            
            <div style="flex: 1; text-align: -webkit-center; padding-top: 7%; padding-right: 5%;">
                <img class="img-fluid" src="/img/starter/204-min.png" alt="..." style="width: 75%;"/>  
            </div>
            
        </div>
        
    </div>

    <div style="background-color: #9cadcf; height: 650px; position: relative;">
        
        <div class="container" style="max-width: 1400px;">
            
            <div class="padding" style="display: flex;">
                <div style="flex: 1; padding-top: 10%;">
                    <p style="font-size: 35px; color: black; text-align: -webkit-center; "><b>Dinamismo e crescimento no seu negócio</b></p> 
                    <p style="font-size: 23px; color: black; text-align: -webkit-left; padding-left: 20%">
                        Libertar-se do trabalho administrativo de gestão dos recursos humanos 
                        <br>Acelere as vendas com ferramentas simples de gestão de Caixa
                        <br>Gestão de Tesouraria 
                        <br>Cumprimento de todos os requisitos legais e fiscais 
                        <br>Expansão do negócio, com adaptabilidade para diversos mercados
                        <br>Cópias de segurança automáticas
                        <br>Efetue encomendas de forma simples e rápida
                        <br>Cálculo das necessidades de compra automaticamente
                        <br>Eficiência na gestão de stocks e armazéns
                        <br>Análises para auxiliam na condução do negócio
                    </p>  
                </div>
            </div>
            
        </div>
        
    </div>
    
    <div style="height: 790px; position: relative; padding: 5% 0%; background-color: #e1e1e1;">
            
        <div class="padding" style="display: flex;">
            
            <div style="flex: 1; text-align: -webkit-center;">
                <img class="img-fluid" src="/img/starter/212-min.png" alt="..." style="width: 60%"/>  
            </div>

            <div style="flex: 1; text-align: -webkit-left; padding-top: 10%;">
                <p style="font-size: 35px; color: black; padding-right: 47%;"><b>Informação financeira para tomar decisões acertivas</b></p> 
                <p style="font-size: 20px; color: black; padding-right: 40%;">
                    A solução PRO PLUS permite-lhe gerir de forma automática os processos operacionais de contabilidade, recursos humanos, 
                    vendas, compras, inventário, gestão de stocks, caixa, stock, e acima de tudo, dá-lhe ferramentas de análises 
                    operacional que lhe permitirão tomar melhores decisões.
                </p>  
            </div>
            
        </div>
        
    </div>
    
    <div style="height: 480px; position: relative;">        
        <div class="container padding">
            <p class="text-center" style="font-size:35px;  word-spacing: 10px; padding-top: 6%; color: black">
                <b>COMO TER ACESSO AO PRIMAVERA PRO LITE</b> 
            </p>  

            <p style="font-size: 20px; word-spacing: 10px; color: black; width: 80%; margin-left: 10%">
                O produto Primavera Pro Lite é comercializados através de um contrato de subscrição (anual ou por dois anos), 
                o qual inclui atualizações de produto. 
            </p>   
            
            
            <a href="#" class="botao_2 btn-center botao_cor" style="text-align: -webkit-center; color: white; position: relative; display: flex; justify-content: center;">
                Estou Interessado/a
            </a>

        </div>        
    </div> 
        
    
    

@endsection