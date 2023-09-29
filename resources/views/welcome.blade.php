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
            margin-top: 0%; 
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
            /*display: flex;*/
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 6%;
            /*margin-right: -10%;*/
            /*margin-left: -14.5%;*/
        }
        .btn-center {
            text-align: center;
            margin: 0 auto;
            display: block;
            left: 25%;
            margin-top: 6%;
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
            margin-top: 1%;
            margin-left: -5.3%; 
        }
        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 20%;
        }
        .center_circle {
            padding-top: 50px;
            font-size: 50px; 
            top: -45px; 
            position: relative; 
            display: flex; 
            justify-content: center; 
            height: 150px; 
            width: 150px;
            border-radius: 50%!important;
        }
        .center_circle_margens {
            margin-top: -20%; 
            margin-left: -20%;
            font-size: 20px;
            color: white;
        }
    </style>

    <section class="section padding" style="background-color: #1b0052; height: 700px;">
        
        <div class="container text-center" style="padding-bottom: 4%; padding-top: 4%;">
            <h2 class="section-subheading" style="color: white; font-size:44px; font-family: 'Gothic A1', sans-serif;">
                <b>SOLUÇÕES DE GESTÃO EMPRESÁRIAIS</b>
            </h2>
        </div>

        
        <div class="row justify-content-center" style="padding: 0 9% 0 9%">
            <div class="col">      
                <div class="text-center mb-4" style="padding-left: 40%; margin-top: 1px; position: absolute;">                       
                    <img class="img-fluid fundo" src="/img/home/home_1.jpg" alt="..." style="border-radius: 10px 10px 10px 10px;"/>
                </div>
                            
                <div class="text-justify fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 75%; height: 290px; padding-bottom: 75px; margin-top: 11%">
                    <p class="padding text-left" style="font-size: 15pt; color: black; line-height: 33px; margin-top: 15%">
                        Software utilizado por mais de <b>36.000</b> empresas entre África e Europa
                    </p> 
                    <a href="/consultoria" class="btn_style text-center" style="font-size:15px; background-color:#1663BF; color: white; margin-left: -25%; padding-top: 3%; height: 15%;">
                        Saber mais
                    </a>
                </div>
            </div>

            <div class="col">      
                <div class="text-center mb-4" style="padding-left: 40%; margin-top: 1px; position: absolute;">                       
                    <img class="img-fluid fundo" src="/img/home/home_2.png" alt="..." style="border-radius: 10px 10px 10px 10px; background-color: white"/>
                </div>
                            
                <div class="text-justify fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 75%; height: 290px; padding-bottom: 75px; margin-top: 11%">
                    <p class="padding text-left" style="font-size: 15pt; color: black; line-height: 33px; margin-top: 15%">
                        Software com <b>+1.066</b> utilizadores a níviel nacional
                    </p> 
                    <a href="/cacimbo" class="btn_style text-center" style="font-size:15px; background-color:#d0005f; color: white; margin-top:9%; margin-left: -25%; padding-top: 3%; height: 15%;">
                        Saber mais
                    </a>
                </div>
            </div>   
            
            <div class="col">      
                <div class="text-center mb-4" style="padding-left: 35%; margin-top: 1px; position: absolute;">                       
                    <img class="img-fluid fundo" src="/img/home/home_3.jpg" alt="..." style="width: 55%; height: 55px; border-radius: 10px 10px 10px 10px;"/>
                </div>
                            
                <div class="text-justify fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 75%; height: 290px; padding-bottom: 75px; margin-top: 11%">
                    <p class="padding text-left" style="font-size: 15pt; color: black; line-height: 33px; margin-top: 30px;">
                        Software com mais +150 mil utilizadores entre África e Europa
                    </p> 
                    <a href="/phc" class="btn_style text-center" style="font-size:15px; background-color:#ed0000; color: white; margin-top:10%; margin-left: -25%; padding-top: 3%; height: 15%;">
                        Saber mais
                    </a>
                </div>
            </div>  
            
            <div class="col">      
                <div class="text-center mb-4" style="padding-left: 40%; margin-top: 1px; position: absolute; border-radius: 0.375rem;">                       
                    <img class="img-fluid fundo" src="/img/home/home_4.jpg" alt="..." style="width: 55%; height: 55px; border-radius: 10px 10px 10px 10px;"/>
                </div>
                            
                <div class="text-justify fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 75%; height: 290px; padding-bottom: 75px; margin-top: 11%;">
                    <p class="padding text-left" style="font-size: 15pt; color: black; line-height: 33px; margin-top: 30px;">
                        Software de gestão de assiduidade controlo de acesso
                    </p> 
                    <a href="/logicpulse" class="btn_style text-center" style="font-size:15px; background-color:#1663BF; color: white; margin-top:10%; margin-left: -25%; padding-top: 3%; height: 15%;">
                        Saber mais
                    </a>
                </div>
            </div>
        </div>
        
    </section>
    
            
    <!-- Slides -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="margin-top: -2.1%"> 
        <img src="/img/home/home_5.jfif" alt="Slide 1" style="width: 100%">   
                
        <div class="row carousel-center-text">
            
            <div class="col">
                <p class="center_circle" style="background-color: blue; color: white;">
                    +10 
                </p>
                <p class="text-center center_circle_margens">
                    ANOS DE EXPERIÊNCIA
                </p>   
            </div>

            <div class="col">
                <p class="center_circle" style="background-color: blue; color: white;">
                    +128
                </p>
                <p class="text-center center_circle_margens">
                    CLIENTES PRIMAVERA
                </p>  
            </div>

            <div class="col">
                <p class="center_circle" style="background-color: white; color: blue;">
                    +50 
                </p>
                <p class="text-center center_circle_margens">
                    CLIENTES CACIMBO
                </p>  
            </div> 
                           
        </div> 

    </div>


    <section class="section" style="background-color: white;">
        
        <div class="text-center" style="padding-top: 1.5%">
            <h2 class="section-subheading" style="color:#1b0052; font-size: 50px"><b>QUEM ESTÁ CONNOSCO</b></h2>
        </div>

        <div class="row text-center" style="justify-content: center; padding-top: 6%">

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

            <div class="col-lg-2 col-md-2" hidden>                    
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

            <div class="col-lg-1 col-md-2" hidden>
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/acap.png" alt="..." />
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Cosultoria</b></p>
            </div>

            <div class="col-lg-2 col-md-2">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/clientes/pagaso.png" alt="..."/>
                </span>
                <p style="color: black; font-size: 15pt; padding-top: 15px;"><b>Meios de Pagamento</b></p>
            </div>
        </div>
        
    </section>

    
    <section class="section" style="background-color: #338ed5; height: 500px">

        <div class="text-center" style="justify-content: center; padding-top: 1%">
            <h2 class="section-subheading" style="color: white; font-size: 50px;">ACREDITE NO QUE OS GESOTORES DIZEM</h2>
        </div>

        <div class="row" style="padding-top: 3%">

            <div style="display: flex; align-items: center; padding-left: 25%;">

                <div style="justify-content: center; align-items: center">
                    <img class="img-fluid rounded-circle" src="/img/home/home_6.png" alt="..." style="width: 300px"/>
                </div>

                <div style="color: white; font-size: 20px; padding-left: 3%; padding-right: 42%; text-align: justify!important;">
                    "Com as soluções de gestão da IT-ANGOLA a nossa empresa tem maior controle de todos os processos que relaizamos, 
                    tanto de mercadoria, clientes e forncedores. O que nos permite ter uma gestão mais centralizada."
                </div>

            </div>

        </div>
        
    </section>

    	
    <div class="row" style="background-color:rgb(15, 0, 52); padding-top: 11%; padding-bottom: 6%; padding-left: 0%; margin-right: 0px">

        <div class="col" style="padding-left: 13%">
            <h3 style="color: white; font-size:48px; font-family: 'Gothic A1', sans-serif; width: 150%;">                        
                SOFTWARES LEGALMENTE CETIFICADOS PELA AGT                        								
            </h3>

            <p style="color: white; font-size: 20px; line-height: 30px; width: 80%; font-family: 'Gothic A1', sans-serif; text-align: justify!important;">
                Os nossos softwares estão certificados pela Administração Geral Tributária (AGT), de maneira que você trabalhe 
                sem se preocupar com estas questões legais e fiscais.
            </p>							
        </div>                
                            
        <div class="col" style="padding-left: 16%">
            <img src="/img/clientes/agt.png" alt="" style="width: 40%;">
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
                <div style="text-align: -webkit-left; padding: 0 11%; font-family: 'Gothic A1', sans-serif; text-align: justify!important;">
                    Toda empresa precisa de uma infra-estrura de rede cabeada ou wi-fi, para que haja comunicação 
                    interna e acesso a internet, de modo que os departamentos se comuniquem de forma eficiente.
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_8.png" alt="..." style="width: 50%"/>
                </span>
                <h5 style="padding-right: 4%; color: black;"><b>SEGURANÇA INFORMÁTICA</b></h5>
                <div style="text-align: -webkit-left; padding: 0 11%; text-align: justify!important;">
                    Mantenha os computadores da sua empresa seguros. Instalando antivírus, configurando políticas 
                    de privacidade para que invasores não tenham acesso a informações previligiadas do seu negócio. 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_9.jpg" alt="..." style="width: 50%"/>
                </span>
                <h5 style="padding-right: 0%; color: black;"><b>SUPORTE INFORMÁTICO</b></h5>
                <div style="text-align: -webkit-left; padding: 0 11%; text-align: justify!important;">
                    Mantenha o sistema operativo seguro e operacional. 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_10.png" alt="..." style="width: 50%"/>
                </span>
                <h4 class="my-3" style="color: black;"><b>FORMAÇÃO</b></h4>
                <div style="text-align: -webkit-left; padding: 0 11%; text-align: justify!important;">
                    Capacitamos funcionário e entidades independentes nas mais diversas soluções de gestão que oferecemos. 
                    Primavera, Cacimbo e PHC. Com certificados reconhecidos pelo INEFOP 
                </div>
            </div>

            <div class="grid-item">
                <span class="fa-stack fa-3x">                           
                    <img class="img-fluid" src="/img/home/home_11.jpg" alt="..." style="width: 50%"/>
                </span>
                <h4 class="my-3" style="color: black;"><b>CONSULTORIA</b></h4>
                <div style="text-align: -webkit-left; padding: 0 11%; text-align: justify!important;">
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

            <a href="/contactos#formulario" class="botao_1 btn-center botao_cor_1" style="position: initial; align-items: center; justify-content: center; font-size: 35px; color: black;">
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
                    <input type="text" id="cargo" name="cargo" class="subilinhado" style="padding-top: 3%">
                </div>
                <div class="col-lg-6 col-md-4" style="text-align: left; padding-top: 8%">
                    <label for="message" style="font-size: 18px;" class="paragrafo_espacamento"><b>Mensagem</b>*</label>
                    <textarea name="message" id="message" class="subilinhado" style="width: 100%;" placeholder="" rows="2" cols="4"></textarea> 
                </div>
                
                
                <div class="col-lg-6 col-md-4" style="display: flex; align-items: flex-start; padding-top: 3%; padding-left: 2.5%;">
                    <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                    <label for="aceito" style="display: flex; align-items: center; padding-left: 3.5%; margin-top: -1.2%;">Li e concordo com as <span style="color: blue; padding-left: 3px"> Política de Privacidade</span></label>                    
                </div>
                
                <div class="center-text" style="padding: 9% 0 0 2.7%">
                    <a href="#" class="botao_3 botao_cor_3 btn-center" style="color: white; font-size: 25px; left: 26%; text-align: -webkit-cnter;">
                        Enviar
                    </a>
                </div> 

            </div>
        </form> 
                       
    </div>

    
    

@endsection