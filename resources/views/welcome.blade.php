@extends('layout.template')
 
@section('content')

    @include('layout.slide')


    <style>
        .fundo {            
            box-shadow: 0px 0px 11px 2px rgb(150, 150, 150, 0.36);
        }
        /*
        .equal-column {
            width: 80%;
            height: 60%;
            border: 1px solid #000;
            padding: 10px;
        }
        */
        .btn-center {
            position: absolute;
            left: 40%;
            height: 6%;
        }
        /*
        .customform input, .customform textarea {
            //border: 20 !important;
            background: rgb(255 252 252 / 4%) !important;
        }
        .linha_input {
            //border-bottom: 1px solid black;
            border: none; 
            border-bottom: 1px solid black;
        }
        .screem-size {
            padding-left: 1%; 
            padding-right: 1%;
        }
        .solucoes {
            padding: 8.5% 0;
            margin: 0 15.5%;
        }
        */
        .btn_style {
            width: 45%; 
            height: 16%; 
            margin-top: 6%; 
            margin-left: -30%;
            position: absolute;
            left: 40%;
            height: 11%;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Três colunas de largura igual */
            gap: 10px; /* Espaçamento entre os elementos */
        }
        .grid-container1 {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Três colunas de largura igual */
            gap: 10px; /* Espaçamento entre os elementos */
        }

        .grid-item {
            /*background-color: #ddd;*/
            padding: 5px;
            text-align: center;
        }
        .botao_1 {
            background-color: white;
            border-radius: 0px;
            width: 950px;
            height: 75px;
        }
        .botao_cor_1 {
            background-color: white; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 6%;
            margin-right: -10%;
            margin-left: -14.5%;
        }
        .subilinhado {
            width: 100%; border: none; border-bottom: 1px solid black; margin-left:3%;
        }
        .paragrafo_espacamento {
            padding-left: 3%; 
            margin-bottom: 0%;
        }
        .botao_3 {
            background-color: #d0005f;
            border-radius: 0px;
            width: 300px;
            height: 66px; 
        }
        .botao_cor_3 {
            background-color: blue; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 10%;
            margin-left: -198%; 
        }
    </style>

    <section class="section padding" style="background-color: #1b0052; padding-top: 4%; padding-bottom: 15%; height: 650px;">
        <div class="padding">
            <div class="text-center" style="padding-bottom: 4%">
                <h3 class="section-subheading" style="color: white; font-size:44px;">
                    SOLUÇÕES DE GESTÃO EMPRESÁRIAIS
                </h3>
            </div>

            <div class="row text-center" style="margin-left: 5%; margin-right: 5%">
                <div class="col-lg-3 col-md-4">      
                    <div style="padding-left: 36%; margin-top: 1px; position: absolute; border-radius: 5%;">                       
                        <img class="img-fluid fundo" src="/img/home/home_1.jpg" alt="..."/>
                    </div>
                                
                    <div class="text-justify solucoes fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%; padding-bottom: 75px; margin-top: 11%">
                        <p class="padding" style="font-size: 15pt; color: black; line-height: 25px; margin-top: 15%">
                            Software utilizado por mais de <b>36.000</b> empresas entre África e Europa
                        </p> 
                        <a href="#" class="btn_style text-center" style="font-size:20px; background-color:#1663BF; color: white;">
                            Saber mais
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">      
                    <div style="padding-left: 36%; margin-top: 1px; position: absolute; border-radius: 5%;">                       
                        <img class="img-fluid fundo" src="/img/home/home_2.png" alt="..." style="background-color: white"/>
                    </div>
                                
                    <div class="text-justify solucoes fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%; padding-bottom: 75px; margin-top: 11%">
                        <p class="padding" style="font-size: 15pt; color: black; line-height: 35px; margin-top: 15%">
                            Software com <b>+1.066</b> utilizadores a níviel nacional
                        </p> 
                        <a href="#" class="btn_style text-center" style="font-size:20px; background-color:#d0005f; color: white;">
                            Saber mais
                        </a>
                    </div>
                </div>   
                
                <div class="col-lg-3 col-md-4">      
                    <div style="padding-left: 36%; margin-top: 1px; position: absolute; border-radius: 5%">                       
                        <img class="img-fluid fundo" src="/img/home/home_3.jpg" alt="..."/>
                    </div>
                                
                    <div class="text-justify solucoes fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%; padding-bottom: 75px; margin-top: 11%">
                        <p class="padding" style="font-size: 15pt; color: black">
                            Software com mais +150 mil utilizadores entre África e Europa
                        </p> 
                        <a href="#" class="btn_style text-center" style="font-size:20px; background-color:#ed0000; color: white;">
                            Saber mais
                        </a>
                    </div>
                </div>  
                
                <div class="col-lg-3 col-md-4">      
                    <div style="padding-left: 36%; margin-top: 1px; position: absolute; border-radius: 5%">                       
                        <img class="img-fluid fundo" src="/img/home/home_4.jpg" alt="..."/>
                    </div>
                                
                    <div class="text-justify solucoes fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%; padding-bottom: 75px; margin-top: 11%">
                        <p class="padding" style="font-size: 15pt; color: black">
                            Software de gestão de assiduidade controlo de acesso
                        </p> 
                        <a href="#" class="btn_style text-center" style="font-size:20px; background-color:#1663BF; color: white;">
                            Saber mais
                        </a>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
    
            
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/home/home_5.jpg" alt="Slide 1">                
        </div>  

        <div hidden class="row" style="padding-left: 60px; padding-top: 45px; position: relative; display: flex; justify-content: center;">
            <div class="col-lg-3 col-md-4">     
                <img class="img-fluid" src="/img/clientes/maptss.png" alt="..."/>
                <p style="font-size: 15pt; padding-top: 12px; line-height: 40px;">                    
                    ANOS DE EXPERIÊNCIA
                </p>
            </div>

            <div class="col-lg-3 col-md-4">
                <img class="img-fluid" src="/img/clientes/maptss.png" alt="..."/>
                <p style="font-size: 15pt; line-height: 40px;"> 
                    CLIENTES PRIMAVERA
                </p>
            </div>

            <div class="col-lg-3 col-md-4">
                <img class="img-fluid" src="/img/clientes/maptss.png" alt="..."/>
                <p style="font-size: 15pt; line-height: 40px;"> 
                    CLIENTES CACIMBO
                </p>
            </div>
        </div>
    </div>


    <section class="section" style="background-color: white;">
        
        <div class="text-center" style="padding-top: 3%">
            <h2 class="section-subheading" style="color:#1b0052; font-size: 50px"><b>QUEM ESTÁ CONNOSCO</b></h2>
        </div>

        <div class="row text-center" style="justify-content: center; padding-top: 3%">

            <div class="col-lg-2 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/carrilho.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Indústria</b></p>
            </div>

            <div class="col-lg-1 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/inap.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Ensino</b></p>
            </div>

            <div class="col-lg-2 col-md-2">                    
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/maptss.png" alt="..."/>
                </span>                    
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Sector Público</b></p>
            </div>

            <div class="col-lg-1 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/poliobra.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Construção</b></p>
            </div>

            <div class="col-lg-2 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/secil.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Indústria</b></p>
            </div>

            <div class="col-lg-1 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/acap.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Cosultoria</b></p>
            </div>

            <div class="col-lg-2 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/pagaso.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Telecomunicações</b></p>
            </div>
        </div>
        
    </section>

    
    <section class="section" style="background-color: #338ed5; height: 450px">

        <div class="text-center" style="justify-content: center; padding-top: 1%">
            <h2 class="section-subheading" style="color: white; font-size: 50px;">ACREDITE NO QUE OS GESOTORES DIZEM</h2>
        </div>

        <div class="row" style="padding-top: 3%">

            <div style="display: flex; align-items: center; padding-left: 25%;">

                <div style="justify-content: center; align-items: center">
                    <img class="img-fluid rounded-circle" src="/img/home/home_6.png" alt="..." style="width: 300px"/>
                </div>

                <div style="color: white; font-size: 20px; padding-left: 3%; padding-right: 47%;">
                    "Com as soluções de gestão da IT-ANGOLA a nossa empresa tem maior controle de todos os processos que relaizamos, 
                    tanto de mercadoria, clientes e forncedores. O que nos permite ter uma gestão mais centralizada."
                </div>

            </div>

        </div>
        
    </section>

    	
    <div class="row" style="background-color:rgb(15, 0, 52); padding-top: 11%; padding-bottom: 6%; padding-left: 10%">

        <div class="col-md-6">
            <h3 style="flex: 0 0 45%; color: white; font-size:48px; font-family: 'Gothic A1', sans-serif;">                        
                SOFTWARES LEGALMENTE CETIFICADOS PELA AGT                        								
            </h3>

            <p style="color: white; font-size: 30px; width: 80%; font-family: 'Gothic A1', sans-serif;">
                Os nossos softwares estão certificados pela Administração Geral Tributária (AGT), de maneira que você trabalhe 
                sem se preocupar com estas questões legais e fiscais.
            </p>							
        </div>                
                            
        <div class="col-md-6" style="padding-left: 10%">
            <img src="/img/clientes/agt.png" alt="" style="width: 30%;">
        </div>  

    </div>	


    <div style="background-color: rgb(246, 246, 246);">
        <div style="padding-top: 6%;" class="text-center">
            <p style="font-size: 50px; color: black">
                <b>SERVIÇOS</b>
            </p>            
        </div>

        <hr style="width: 25%; color: black; border-top: 3px solid black;">

        <div class="grid-container" style="padding: 3% 9%">
            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_7.png" alt="..." style="width: 50%"/>
                </span>                    
                <h5 style="padding-right: 5%; color: black;"><b>REDES DE COMPUTADORES</b></h5>
                <div style="text-align: -webkit-left; padding: 0 11%">
                    Toda empresa precisa de uma infra-estrura de rede cabeada ou wi-fi, para que haja comunicação 
                    interna e acesso a internet, de modo que os departamentos se comuniquem de forma eficiente.
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_8.png" alt="..." style="width: 50%"/>
                </span>
                <h5 style="padding-right: 4%; color: black;"><b>SEGURANÇA INFORMÁTICA</b></h5>
                <div style="text-align: -webkit-left; padding: 0 11%">
                    Mantenha os computadores da sua empresa seguros. Instalando antivíros, configurando políticas 
                    de privacidade para que invasores não tenham acesso a informações previligiadas do seu negócio. 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_9.jpg" alt="..." style="width: 50%"/>
                </span>
                <h5 style="padding-right: 0%; color: black;"><b>SUPORTE INFORMÁTICO</b></h5>
                <div style="text-align: -webkit-left; padding: 0 11%">
                    Mantenha o sistema operativo seguro e operacional. 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_10.png" alt="..." style="width: 50%"/>
                </span>
                <h4 class="my-3" style="color: black;"><b>FORMAÇÃO</b></h4>
                <div style="text-align: -webkit-left; padding: 0 11%">
                    Capacitamos funcionário e entidades independentes nas mais diversas soluções de gestão que oferecemos. 
                    Primavera, Cacimbo e PHC. 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_11.jpg" alt="..." style="width: 50%"/>
                </span>
                <h4 class="my-3" style="color: black;"><b>CONSULTORIA</b></h4>
                <div style="text-align: -webkit-left; padding: 0 11%">
                    Montamos um diagnóstico com as melhores soluções para a necessidade da sua empresa. 
                </div>
            </div>
        </div>       
                       
    </div>


    <div style="height: 600px; position: relative; background-color: rgb(15, 0, 52)">        
        <div class="container">

            <p class="text-center" style="font-size: 35px; word-spacing: 10px; padding-top: 9%; color: white">
                VOCÊ PROCURA POR SOLUÇÕES DE GESTÃO E SERVIÇOS DE INFORMÁTICA A MEDIDA DO SEU NEGÓCIO?
            </p>   
            
            <a href="#" class="botao_1 btn-center botao_cor_1" style="font-size: 35px; color: black;">
                <b>PEÇA UM LEVANTAMENTO SEM COMPROMISSO</b>
            </a>                

        </div>        
    </div>


    <div style="background-color: white; height: 1050px">
        <div style="padding: 6% 19%; 0 19%;" class="text-center">
            <p style="font-size: 30px; color: black">
                <b>PREENCHA O FORMULÁRIO, E RECEBA MAIS INFORMAÇÕES DE UM ESPECIALISTA SEM QUALQUER COMPROMISSO.</b>
            </p>            
        </div>
        
        <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">
            <div class="row" style="padding-right: 15%; padding-left: 15%">

                <div class="col-lg-6 col-md-8" style="text-align: left;">
                    <label for="name" style="font-size: 18px;" class="paragrafo_espacamento"><b>Nome</b>*</label>
                    <input type="text" id="name" name="name" class="subilinhado">
                </div>
                <div class="col-lg-6 col-md-8" style="text-align: left;">
                    <label for="contacts" style="font-size: 18px;" class="paragrafo_espacamento"><b>Telefone</b>*</label>
                    <input type="text" id="contacts" name="contacts" class="subilinhado">
                </div>
                <div class="col-lg-6 col-md-4" style="text-align: left; padding-top: 9%">
                    <label for="email" style="font-size: 18px;" class="paragrafo_espacamento"><b>Email</b>*</label>
                    <input type="email" id="email" name="email" class="subilinhado">
                </div>
                <div class="col-lg-6 col-md-4" style="text-align: left; padding-top: 9%">
                    <label for="empresa" style="font-size: 18px;" class="paragrafo_espacamento"><b>Empresa</b>*</label>
                    <input type="text" id="empresa" name="empresa" class="subilinhado">
                </div>
                <div class="col-lg-6 col-md-4" style="text-align: left; padding-top: 9%">
                    <label for="cargo" style="font-size: 18px;" class="paragrafo_espacamento"><b>Cargo</b>*</label>
                    <input type="text" id="cargo" name="cargo" class="subilinhado" style="padding-top: 13%">
                </div>
                <div class="col-lg-6 col-md-4" style="text-align: left; padding-top: 9%">
                    <label for="message" style="font-size: 18px;" class="paragrafo_espacamento"><b>Mensagem</b>*</label>
                    <textarea name="message" id="message" class="subilinhado" style="width: 560px;" placeholder="" rows="4" cols="4"></textarea> 
                </div>
                
                
                <div class="col-lg-6 col-md-4" style="display: flex; align-items: flex-start; padding-top: 3%; padding-left: 2.5%;">
                    <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                    <label for="aceito" style="display: flex; align-items: center; padding-left: 3.5%; margin-top: -1.2%;">Li e concordo com as <span style="color: blue;"> Política de Privacidade</span></label>                    
                </div>
                
                <div class="center-text" style="padding: 6% 0 0 2.7%">
                    <div class="botao_3 botao_cor_3" style="text-align: -webkit-left;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px; left: 26%; text-align: -webkit-cnter;">
                            Enviar
                        </a>
                    </div>
                </div> 

            </div>
        </form> 
                       
    </div>
    

@endsection