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
            width: 300px;
            height: 50px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            /*margin-bottom: 1.5%;*/
            /*margin-top: 1.5%;*/
            margin-left: 19%; 
        }
                
        .botao_3 {
            background-color: white;
            border-radius: 55px;
            width: 350px;
            height: 55px;
        }
        .botao_cor3 {
            background-color: #0f0034; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 5%;
            margin-top: 5%;
            margin-left: 39%; 
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
        .panel_itens {
            background-color: #134577;
            color: white;
            border-radius: 25px; 

        }
        .curvas {
            /*background-color: white;*/
            /*border-radius: 25px;*/ 
            border: 1px solid white;
            border-radius: 55px;
            padding-top: 1.5%;
            padding-bottom: 1.5%;
            padding-left: 2.5%;
            /*
            width: 350px;
            height: 55px;
            */
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/academy/img-11.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img hidden src="/img/solucoes/manufature.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>IT-ACADEMY</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Formação do Software Cegid Erp Primavera</p>
            </div>
        </div>        
    </div>


    <div style="margin-bottom: 2%; margin-top: 7%; background-color: white;">
        <div class="text-center">
            <p style="font-size: 50px; color: rgb(48, 48, 145)">
                <b>Procura Por Uma Formação Primavera?</b>
            </p>  
            <p style="font-size: 25px; color: black">
                Com a ITANGOLA você tem a o portunidade de receber formação nos mais diversos modulos do Sofware Cegid ERP 
                <br>Primavera com profissionais de elvada experiência, que analisam e solucionam problemas de clientes todos os dias.
            </p>          
        </div> 

        <div class="text-center">
            <p style="font-size: 35px; color: blue">
                <b>Conheça o Nosso Plano de Foramação</b>
            </p>  
            <p style="font-size: 25px; color: black">
                O que você pode aprender:
            </p>          
        </div>                
    </div>
    

    <div style="margin-bottom: 5%; margin-top: 1%;">
        <div style="padding: 1.5% 7%">        
            
            <div class="card-deck mb-3">
                <div class="card mb-4 padding panel_itens" style="margin-left: 0px; margin-right: 7px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        16 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        RECURSOS HUMANOS
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Criação da Ficha do Funcionário;
                        <br>Processamentos;
                        <br>Recibos/Pagamentos;
                        <br>Registo de alterações mensais;
                        <br>Subsídio de férias e Natal;
                        <br>Forma de Pagamento de subsídios;
                        <br>Gestão de Férias;
                        <br>Outras Funcionalidades;
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb; margin-top:20%">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>  
                
                <div class="card mb-4 padding panel_itens" style="margin-left: 7px; margin-right: 7px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        16 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        CONTABILIDADE
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Criação da Ficha do Funcionário;
                        <br>Introdução de Movimentos;
                        <br>Centros de Custo;
                        <br>Demonstrações Económico-;
                        <br>Financeiras;
                        <br>Extratos de Conta;
                        <br>Mapas e Funções de Gestão;
                        <br>Movimentos Diferidos
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb; margin-top:20%">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>

                <div class="card mb-4 padding panel_itens" style="margin-left: 7px; margin-right: 0px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        16 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        INVENTÁRIO
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Enquadramento;
                        <br>Processamentos;
                        <br>Dados Mestre;
                        <br>Registo de Movimento de Stock;
                        <br>- Operações de Expedição e Receção;
                        <br>Valorização do Stock;
                        <br>Atributos dos Artigos;
                        <br>Processo de Inventariação;
                        <br>Mapas de Análise;
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb; margin-top:15%">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>
            </div> 

            <div class="card-deck mb-3">
                <div class="card mb-4 padding panel_itens" style="margin-left: 0px; margin-right: 7px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        8 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        FINANÇAS
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Tesouraria;
                        <br>Pagamentos e Recebimentos;
                        <br>Gestão de Bancos/Caixa;
                        <br>Documentos de Tesouraria;
                        <br>Reimpressão de Documentos;
                        <br>Abertura/Fecho de Caixa;
                        <br>Estado de Caixa;
                        <br>Reconciliação Bancária/Automática;
                        <br>Exploração.
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>  
                
                <div class="card mb-4 padding panel_itens" style="margin-left: 7px; margin-right: 7px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        8 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        LOGÍSTICA
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Vendas;
                        <br>Ficha de Clientes;
                        <br>Artigos;
                        <br>Contas Correntes;
                        <br>Outros;
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb; margin-top:40%">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>

                <div class="card mb-4 padding panel_itens" style="margin-left: 7px; margin-right: 0px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        8 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        COMPRAS
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Ficha de Fornecedores;
                        <br>Artigos;
                        <br>Contas Correntes;
                        <br>Gestão de Inventário;;
                        <br>Outros;
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb; margin-top:40%">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>
            </div>

            <div class="card-deck mb-3">
                <div class="card mb-4 padding" style="margin-left: 0px; margin-right: 7px; border: 0px">
                     
                </div>  
                
                <div class="card mb-4 padding panel_itens" style="margin-left: 7px; margin-right: 7px;">
                    <p class="text-right" style="font-size: 20px; color: white; padding-top: 3%">
                        8 horas
                    </p> 
                    <h5 class="text-left curvas" style="font-size: 30px; color: white;">
                        EQUIPAMENTOS
                    </h5>
                    <p class="padding" style="font-size: 19px; color: white;">
                        Criação da Ficha do Imobilizado;
                        <br>Identificação do Activo/Bem;;
                        <br>Centro de Custo;
                        <br>Estatísticas e Mapas de Gestão;
                    </p> 

                    <div class="botao_2 botao_cor" style="background-color: #2680eb;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Estou Interessado/a 
                        </a>
                    </div> 
                </div>

                <div class="card mb-4 padding" style="margin-left: 7px; margin-right: 0px; border: 0px">
                    
                </div>
            </div>

        </div>                
    </div>


    <div style="background-color: #042447; height: 980px; position: relative; padding: 0% 0%">        
        <div class="contanier" style="flex: 1; padding-top: 7%;">
            <p style="font-size: 40px; color: white; text-align: -webkit-center;">
                <b>Certificado + Bonus</b>
            </p>
            <p class="padding" style="font-size: 20px; color: white; text-align: -webkit-center;">
                <b>No final da formação receba o seu certificado e o matérial do curso</b>
            </p> 
            
            <div style="display: flex; justify-content: center; align-items: center">
                <img src="/img/academy/certificado.png" alt="Slide 1" style="width: 45%; display: flex; justify-content: center; align-items: center">
            </div>

        </div>        
    </div> 


    <div style="display: flex; justify-content: center; align-items: center; padding-bottom: 7%;">
        <p style="font-size:40px; color: white; margin-top: 6.3%; background-color: blue; height: 140px; padding: 4% 0.5% 0 0.5% ">
            + 120 
        </p>
        <p style="font-size:40px; color: black; margin-top: 10%; margin-left: -1%" class="padding">
            <b>PROFISSIONAIS FORMADOS</b>
        </p>
    </div>

    
    <div style="background-color: #6aa8a1; height: 500px; position: relative;">        
        <div class="container padding">
            <h5 class="text-center" style="font-size: 35px; color: black; word-spacing: 10px; padding-top: 8%;">
                <b>O Que Falam Os Formandos</b> 
            </h5>  
            
            <p class="text-center" style="font-size: 20px; color: black; word-spacing: 10px; padding: 0 14%;">
                “o starter plus é como um amigo que podemos confiar, que quando precisamos contar algum segredo do nosso negócio ele esta aí para 
                nos ouvir. o starter plus dá-nos uma visão ampla daquilo que fazemos no nosso dia a dia na empresa, é uma ferramenta muito 
                importante para nós.” 
            </p> 
            
            <div style="display: flex;">
                <div style="flex: 1;" style="text-align: -webkit-center;">
                    <img class="img-fluid rounded-circle" src="/img/home/face.png" alt="..." style="width: 15%;  margin-left: 83%;"/> 
                </div>
                <div style="flex: 1; padding-top: 1.5%; margin-right: 15%;">
                  <p style="font-size:20px; color: white;"><b>Jorge Centeno - PagaSó</b></p>
                </div>
            </div>
            
        </div>        
    </div>


    <div class="botao_3 botao_cor3" style="background-color: #2680eb;">
        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
            Estou Interessado/a 
        </a>
    </div>    

@endsection