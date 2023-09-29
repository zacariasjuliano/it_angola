@extends('layout.template')
 
@section('content')

    <style>       
        .botao_formulario_cor {
            background-color: #520030; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 2%; 
        }
        .botao_1 {
            background-color: blue;
            border-radius: 0px;
            width: 500px;
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
            margin-top: 9%;
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
            margin-top: 9%;
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
    
    <div class="container" style="max-width: 1400px;">
        <p style="font-size: 40px; color: #ed0000; padding: 6% 0% 0 0; text-align: -webkit-center;">
            </b>GESTÃO DE ASSIDUIDADE</b>
        </p>
        <p style="font-size: 30px; color: black; text-align: -webkit-left; width: 85%; padding-left: 18%">
            As empresas, de uma forma geral, sentem a necessidade de aferir a pontualidade e efetuar o controlo e gestão 
            de assiduidade dos seus colaboradores.
        </p>

        <div class="card-deck mb-3" style="padding: 6% 0%">            
            <div class="card mb-6" style="border: 0px solid rgba(0,0,0,.125);"> 
                <p style="font-size: 25px; color: black; padding: 0;">
                    <b>SOFTWARE <span style="color: #ed0000;">TIME</span>.TRACK</b>
                </p>  
                <p class="text-justify" style="font-size: 20px; color: black; padding: 0 7% 0 0;">
                    O time.track dá resposta a esta necessidade recorrendo às tecnologias RFID, biométrica e/ou outra tecnologia 
                    de autenticação, em conjunto ou em separado, sendo uma solução robusta e que responde às necessidades das 
                    empresas. Com a solução time.track, pretende-se ultrapassar variadíssimos problemas e lacunas de gestão de 
                    Recursos Humanos existentes em muitas organizações e instituições.
                </p>

                <a href="#" class="botao_1 btn-center botao_cor_1" style="font-size: 30px; color: white; position: relative; display: flex; justify-content: center;">
                    <b>SABER MAIS DO TIME.TRACK</b>
                </a>
            </div>

            <div class="card mb-6" style="padding-left: 25px; border: 0px solid rgba(0,0,0,.125);">
                <img src="/img/parceiros/logicpulse_2.jpg" alt="Slide 1" style="width: 85%"> 
            </div>                            
        </div> 

    </div>
    
    <div style="padding-top: 6%; padding-bottom: 6%; background-color: rgb(224, 224, 224);">
        <div class="container" style="background-color: rgb(224, 224, 224); text-align: center;">
            <p style="font-size: 40px; color: #ed0000; padding: 0;">
                <b>RELÓGIOS DE PONTO</b>
            </p>
            <p style="font-size: 20px; color: black; padding: 0;">
                FORNECEMOS UM CONJUNTO DE TERMINAIS BIOMÉTRICOS DIGITAL E FACIAL
            </p>
    
            <div class="row" style="padding-top: 6%; background-color: rgb(224, 224, 224); justify-content: center;">            
                <div class="col" style="border: 0px solid rgba(0,0,0,.125); background-color: rgb(224, 224, 224); text-align: center;"> 
                    <img src="/img/parceiros/logicpulse_4.png" alt="Slide 1" style="width: 55%;"> 
    
                    <p style="font-size: 25px; color: #ed0000; padding: 0 16% 0 16%;">
                        <b>TERMINAL BIOMÉTRICO DE ENTRADA DE GAMA</b>
                    </p>  
                    <p class="text-justify" style="font-size: 20px; color: black; line-height: 35px; padding: 0 16% 0 16%;">
                        Desenhado para satisfazer as suas necessidades na gestão de assiduidade. Este terminal possui várias carateristicas 
                        que fazem dele um excelente equipamento qualidade vs preço. Permite vários tipos de autenticação e comunicação 
                        tendo a grande vantangem da possibilidade de ligação ADMS, ou seja, é possivel comunicar ao servidor de qualquer 
                        rede internet.
                    </p>
                </div>
    
                <div class="col" style="border: 0px solid rgba(0,0,0,.125); background-color: rgb(224, 224, 224); text-align: center;">
                    <img src="/img/parceiros/logicpulse_3.jpg" alt="Slide 1" style="width: 55%; background-color: transparent;"> 
    
                    <p style="font-size: 25px; color: #ed0000; padding: 0 16% 0 16%;">
                        <b>TERMINAL BIOMÉTRICO, DE RECONHECIMENTO FACIAL E CARTÃO DE PROXIMIDADE</b>
                    </p>  
                    <p class="text-justify" style="font-size: 20px; color: black; line-height: 35px; padding: 0 16% 0 16%;">
                        A maneira mais eficaz para monitorizar a assiduidade na sua empresa. Devido à forma de identificação do utilizador 
                        ser facial, este terminal é recomendado para empresas onde se encontram pessoas de manufatura onde as impressões 
                        digitais sofram algum tipo de desgaste acentuado.
                    </p>
                </div>                            
            </div>
    
            <a href="#" class="botao_2 btn-center botao_cor_2" style="font-size: 20px; color: white; position: relative; display: flex; justify-content: center;">
                <b>QUERO SABER MAIS SOBRE OS BIOMÉTRICOS</b>
            </a> 
        </div> 
    </div>
    
    
    <div class="container" style="max-width: 1400px; padding-top: 6%">
        <p style="font-size: 40px; color: #520030; padding: 0% 6% 0 0; text-align: -webkit-center;">
            <b>CONTROLO DE ACESSO</b>
        </p>

        <div class="card-deck mb-3" style="padding: 6% 0%"> 

            <div class="card mb-6" style="padding-left: 25px; border: 0px solid rgba(0,0,0,.125);">
                <img src="/img/parceiros/logicpulse_5.png" alt="Slide 1" style="width: 85%"> 
            </div>

            <div class="card mb-6" style="border: 0px solid rgba(0,0,0,.125);"> 
                <p style="font-size: 25px; color: black; padding: 0;">
                    <b>SOFTWARE <span style="color: #520030;">ACCESS</span>.TRACK</b>
                </p>  
                <p class="text-justify" style="font-size: 20px; color: black; padding: 0; line-height: 40px; padding: 0% 19% 0% 0%;">
                    O access.track, é um sistema avançado de controlo e gestão de acessos que permite alta segurança ao nível de 
                    acessos à sua empresa/instituição.
                    <br><br>  
                    O access.track - controlo de acessos é a solução que recorre às mais avançadas tecnologias, como sendo o controlo 
                    biométrico (impressão digital, leitura de íris, reconhecimento facial, etc) ou o RFID. A solução de gestão de 
                    acessos atua nas mais variadas várias áreas de ação: | Gestão Geral de Acessos | Controlo e Gestão de Parques de 
                    Estacionamento | Controlo e Gestão de Bilhética | Controlo e Gestão de Visitas | Fechaduras de Hotel.
                </p>

                <a href="#" class="botao_3 btn-center botao_cor_3" style="font-size: 25px; color: white; position: relative; display: flex; justify-content: center;">
                    <b>QUERO SABER MAIS DO ACCESS TRACK</b>
                </a>
            </div>  

        </div> 

    </div>
    
    <div style="padding-top: 6%; padding-bottom: 6%; background-color: #520030;">
        <div class="container" style="background-color: #520030;">
            <p style="font-size: 40px; color: white; padding: 0; text-align: -webkit-center;">
                <b>ACESSORIOS DE ASSIDUIDADE</b>
            </p>

            <div href="#" class="btn-center" style="position: relative; display: flex; justify-content: center;">
                <img src="/img/parceiros/logicpulse_6.png" alt="Slide 1" style="width: 45%; position: relative; justify-content: center;"> 
            </div>

            <p class="text-justify" style="font-size: 20px; color: white; padding-left: 13%; padding-right: 13%; text-align: -webkit-left;">
                Kit de alimentação de acessos para placa ctrl-inbio e ctrl-c. este kit possui uma bateria de backup para 
                quebras de anergia para alimentação de terminais externos e respetivos acessórios.
            </p>

            <a href="#" class="botao_4 btn-center botao_cor_4" style="font-size: 20px; color: #520030; position: relative; display: flex; justify-content: center;">
                <b>QUERO SABER MAIS</b>
            </a> 

        </div> 
    </div>

    <div style="background-color:white; padding-bottom: 9%;">
            
        <div class="text-center" style="padding-top: 5%;">  
            <h4 style="font-size: 25px; color: red;"> 
                <b>PREENCHA O FORMULÁRIO, E RECEBA MAIS INFORMAÇÕES DE UM  
                <br>ESPECIALISTA SEM QUALQUER COMPROMISSO.</b>
            </h4> 
        </div>  

        @include('parceiros.formulario')
        
    </div>

@endsection