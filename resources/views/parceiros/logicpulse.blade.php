@extends('layout.template')
 
@section('content')

    <style>       
        .botao_formulario_cor {
            background-color: #520030; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 3%;
            margin-left: 2%; 
        }
        .botao_1 {
            background-color: blue;
            border-radius: 0px;
            width: 400px;
            height: 66px;
        }
        .botao_cor_1 {
            background-color: #1e009a; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 0.1%; 
        }       
        .botao_2 {
            background-color: #ed0000;
            border-radius: 0px;
            width: 500px;
            height: 66px;
        }
        .botao_cor_2 {
            background-color: #ed0000; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 3%;
            margin-left: 25%; 
        }      
        .botao_3 {
            background-color: #520030;
            border-radius: 0px;
            width: 600px;
            height: 66px;
        }
        .botao_cor_3 {
            background-color: #520030; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 2%; 
        }       
        .botao_4 {
            background-color: white;
            border-radius: 0px;
            width: 400px;
            height: 66px;
        }
        .botao_cor_4 {
            background-color: white; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 3%;
            margin-left: 34%; 
        }
        .carousel-center-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }  
        .container_width {
            max-width: 1400px;
        }  
        .card_mb_6 {
            padding-left: 25px;
        }
        .style_style {
            padding: 3% 0; 
        }

        @media screen and (max-width: 768px) {
            .botao_cor_1 {
                background-color: #1e009a; 
                display: flex; 
                justify-content: center; 
                align-items: center;
                margin-bottom: 0%;
                margin-top: 1%;
                margin-left: 0.1%; 
            } 
            .botao_cor_3 {
                background-color: #520030; 
                display: flex; 
                justify-content: center; 
                align-items: center;
                margin-bottom: 0%;
                margin-top: 1%;
                margin-left: 2%; 
            }  
            .container_width {
                max-width: 1200px;
            }  
            .card_mb_6 {
                padding-left: 0px;
            }
            .style_style {
                padding: 0% 0; 
            }                      
        }   
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/parceiros/logicpulse_7.jfif" alt="Slide 1" style="width: 100%">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center; padding-top: 200px">
                <img src="/img/parceiros/logicpulse_1.jpg" alt="Slide 1" style="width: 55%"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PARCEIRO ITANGOLA</b></h3>
                <p style="font-size: 30px; color: white; margin-right: -70px; margin-left: -70px;">SOFTWARE DE GESTÃO DE ASSIDUIDADE E CONTROLO DE ACESSO</p>
            </div>
        </div>    
    </div>
    
    <div class="container container_width">
        <p style="font-size: 40px; color: #ed0000; padding: 6% 0% 0 0; text-align: -webkit-center;">
            </b>GESTÃO DE ASSIDUIDADE</b>
        </p>
        <p style="font-size: 30px; color: black; text-align: -webkit-left; width: 85%; padding-left: 15%">
            As empresas, de maneira geral, sentem a necessidade de aferir a pontualidade e realizar o controle e gestão da assiduidade de seus colaboradores.
        </p>

        <div class="card-deck mb-3 style_style">            
            <div class="card mb-6" style="border: 0px solid rgba(0,0,0,.125);"> 
                <p style="font-size: 25px; color: black; padding: 0;">
                    <b>SOFTWARE <span style="color: #ed0000;">TIME</span>.TRACK</b>
                </p>  
                <p class="text-justify" style="font-size: 20px; color: black; padding: 0 7% 0 0;">
                    O time.track atende a essa necessidade utilizando tecnologias como RFID, biométrica e/ou outras formas de autenticação, seja em conjunto ou 
                    separadamente. Essa é uma solução robusta que satisfaz as demandas das empresas. Com o time.track, busca-se superar diversos problemas e 
                    lacunas na gestão de Recursos Humanos presentes em muitas organizações e instituições.
                </p>

                <a href="#" class="botao_1 btn-center botao_cor_1" style="font-size: 24px; color: white; position: relative; display: flex; justify-content: center;">
                    SABER MAIS DO TIME.TRACK
                </a>
            </div>

            <div class="card mb-6" style="display: flex; justify-content: right; flex-direction: row; border: 0px solid rgba(0,0,0,.125);">
                <img src="/img/parceiros/logicpulse_2.jpg" alt="Slide 1" style="width: 95%"> 
            </div>                            
        </div> 
    </div>
    
    <div style="padding: 3% 0; background-color: rgb(224, 224, 224);">
        <div class="container" style="background-color: rgb(224, 224, 224); text-align: center;">
            <p style="font-size: 40px; color: #ed0000; padding: 0;">
                <b>RELÓGIOS DE PONTO</b>
            </p>
            <p style="font-size: 20px; color: black; padding: 0;">
                FORNECEMOS UM CONJUNTO DE TERMINAIS BIOMÉTRICOS DIGITAL E FACIAL
            </p>
    
            <div class="row style_style" style="background-color: rgb(224, 224, 224); justify-content: center;">            
                <div class="col" style="border: 0px solid rgba(0,0,0,.125); background-color: rgb(224, 224, 224); text-align: center;"> 
                    <img src="/img/parceiros/logicpulse_4.png" alt="Slide 1" style="width: 55%;"> 
    
                    <p style="font-size: 25px; color: #ed0000; padding: 0 16% 0 16%;">
                        <b>TERMINAL BIOMÉTRICO DE ENTRADA DE GAMA</b>
                    </p>  
                    <p class="text-justify" style="font-size: 20px; color: black; line-height: 35px; padding: 0 16% 0 16%;">
                        Desenvolvido para atender às suas necessidades na gestão de assiduidade, este terminal possui várias características que o tornam um 
                        excelente equipamento em termos de qualidade versus preço. Permite diversos tipos de autenticação e comunicação, tendo a grande vantagem 
                        da possibilidade de conexão com o ADMS, ou seja, é possível comunicar com o servidor por meio de qualquer rede de internet.
                    </p>
                </div>
    
                <div class="col" style="border: 0px solid rgba(0,0,0,.125); background-color: rgb(224, 224, 224); text-align: center;">
                    <img src="/img/parceiros/logicpulse_3.jpg" alt="Slide 1" style="width: 55%; background-color: transparent;"> 
    
                    <p style="font-size: 25px; color: #ed0000; padding: 0 16% 0 16%;">
                        <b>TERMINAL BIOMÉTRICO, DE RECONHECIMENTO FACIAL E CARTÃO DE PROXIMIDADE</b>
                    </p>  
                    <p class="text-justify" style="font-size: 20px; color: black; line-height: 35px; padding: 0 16% 0 16%;">
                        A maneira mais eficaz de monitorar a assiduidade na sua empresa. Devido à forma de identificação do utilizador ser facial, este terminal 
                        é recomendado para empresas onde há pessoas envolvidas em manufatura, evitando preocupações relacionadas ao desgaste acentuado das impressões 
                        digitais
                    </p>
                </div>                            
            </div>
    
            <a href="#" class="botao_2 btn-center botao_cor_2" style="font-size: 20px; color: white; position: relative; display: flex; justify-content: center;">
                <b>QUERO SABER MAIS SOBRE OS BIOMÉTRICOS</b>
            </a> 
        </div> 
    </div>
    
    <div class="container" style="max-width: 1400px; padding-top: 3%">
        <p style="font-size: 40px; color: #520030; padding: 0% 6% 0 0; text-align: -webkit-center;">
            <b>SISTEMA DE CONTROLO DE ACESSO</b>
        </p>

        <div class="card-deck mb-3 style_style"> 
            <div class="card mb-6 card_mb_6" style="display: flex; justify-content: left; flex-direction: row; border: 0px solid rgba(0,0,0,.125);">
                <img src="/img/parceiros/logicpulse_5.png" alt="Slide 1" style="width: 95%"> 
            </div>

            <div class="card mb-6" style="border: 0px solid rgba(0,0,0,.125);"> 
                <p style="font-size: 25px; color: black; padding: 0;">
                    <b>SOFTWARE <span style="color: #520030;">ACCESS</span>.TRACK</b>
                </p>  
                <p class="text-justify" style="font-size: 20px; color: black; padding: 0; line-height: 40px; padding: 0% 19% 0% 0%;">
                    O access.track, é um sistema avançado de controlo e gestão de acessos, proporcionando alta segurança para a sua empresa ou instituição.
                    <br><br>  
                    O ACCESS.TRACK - Controlo de Acessos utiliza as tecnologias mais avançadas, incluindo controlo biométrico (impressão digital, 
                    leitura de íris, reconhecimento facial, etc.) e RFID. Essa solução de gestão de acessos atua em diversas áreas, abrangendo 
                    Gestão Geral de Acessos, Controlo e Gestão de Parques de Estacionamento, Controlo e Gestão de Bilhética, Controlo e Gestão de 
                    Visitas, além de Fechaduras de Hotel.
                </p>

                <a href="#" class="botao_3 btn-center botao_cor_3" style="font-size: 25px; color: white; position: relative; display: flex; justify-content: center;">
                    <b>QUERO SABER MAIS DO ACCESS TRACK</b>
                </a>
            </div>  
        </div> 
    </div>    
    
    <div style="padding: 3% 0; background-color: #520030;">
        <div class="container" style="background-color: #520030;">
            <h1 style="font-size: 45px; color: white; padding: 0; text-align: -webkit-center;">
                <b>ACESSORIOS DE ASSIDUIDADE</b>
            </h1>

            <div href="#" class="btn-center" style="position: relative; display: flex; justify-content: center;">
                <img src="/img/parceiros/logicpulse_6.png" alt="Slide 1" style="width: 45%; position: relative; justify-content: center;"> 
            </div>

            <p class="text-justify" style="font-size: 20px; color: white; padding-left: 13%; padding-right: 13%; text-align: -webkit-left;">
                Kit de alimentação de acessos para placas Ctrl-Inbio e Ctrl-C. Este kit inclui uma bateria de backup para quebras de energia, garantindo a 
                alimentação de terminais externos e seus acessórios correspondentes.
            </p>

            <a href="#" class="botao_4 btn-center botao_cor_4" style="font-size: 30px; color: #520030; position: relative; display: flex; justify-content: center;">
                <b>QUERO SABER MAIS</b>
            </a> 

        </div> 
    </div>

    <div style="background-color:white; padding-bottom: 3%;">
        <div class="text-center" style="padding-top: 3%;">  
            <h4 style="font-size: 25px; color: red;"> 
                <b>PREENCHA O FORMULÁRIO, E RECEBA MAIS INFORMAÇÕES DE UM  
                <br>ESPECIALISTA SEM QUALQUER COMPROMISSO.</b>
            </h4> 
        </div>  

        @include('parceiros.formulario')
    </div>

@endsection