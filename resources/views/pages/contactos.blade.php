@extends('layout.template')
 
@section('content')
    

    <style>
        .botao {
            background-color: #ff6900; 
            margin-left: 20%; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 10%;
            margin-top: 10%; 
        }
        .ao_centro {  
            justify-content: center; 
            align-items: center;
            margin-top: 20%; 
            margin-bottom: 2%;
        }        
        .botao_2 {
            background-color: white;
            border-radius: 20px;
            width: 300px;
            height: 55px;
        }
        .botao_cor {
            background-color: #0f0034;             
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            /*margin-top: 1.5%;*/
            /*margin-left: 5%;*/
        }
        .circle3 {
            width: 416px; /*332*/
            height: 16%;
            position: absolute;
            top: -13%;
            left: 0%;
            border-radius: 12.5% 12.5% 0 0;
            transform: skewY(0deg);
        }
        .circle4 {
            width: 416px;
            height: 16%;
            position: absolute;
            top: -13%;
            left: 0%;
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
            background-color:blue; 
            color: white;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
        .menu_curvo {
            border-radius: 0 25px 25px 0;  
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
                <img src="/img/pages/img-20.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <h3 style="font-size: 50px; color: white" class="padding"><b>CONTACTOS</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Se chegou até aqui fale connosco</p>
            </div>
        </div>        
    </div>


    <div class="center-text" style="background-color: #dedede; text-align: -webkit-center; padding-top: 3%">
        <h5 style="font-size: 25px; color: black" class="padding"><b>Antedimento e Suporte</b></h5>

        <div class="botao_2 botao_cor" style="background-color: green;">
            <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                (+244) 927316791 
            </a>
        </div>

        <p style="font-size: 30px; color: black" class="padding">Ligue Já!</p>    
        
        
        <div style="margin-bottom: 0%; margin-top: 3%;">
            <div style="padding: 1.5% 25%">             
    
                <div class="card-deck mb-3">
                    <div class="card mb-4 padding" style="border: 0px; margin-right: 6%">
                        <div class="circle3" style="background-color: blue;">
                            <div class="top-part"></div>
                            <p style="font-size:30px; color: white; padding-top: 0%"><b>ITANGOLA</b></p>
                        </div>
        
                        <p style="font-size:23px; color: black;"><b>Benguela (Sede)</b></p> 
                        
                        <div style="position: relative; justify-content: center; padding-left: 9%">
                            
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/img/icon/pin-de-localizacao.png" width="40" height="40" />
                                </svg>
                                <p class="text" style="font-size:16px; color: black; margin-top: -26px;">Edifício Acácias <br>Rua Infante Dom Henriques nº 2</p>
                            </div>
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/img/icon/telefone.png" width="40" height="40" />
                                </svg>
                                <p class="text" style="padding-left: 6px; margin-top: -22px; font-size:16px; color: black;">(+244) 927316791 <br>(+244) 944908829</p>
                            </div>
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">                            
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/svg/email.svg" width="40" height="40" />
                                </svg>
                                <p class="text" style="padding-left: 6px; margin-top: -6px; font-size:16px; color: black;">comercial@it-angola.com</p>
                            </div>
                        </div>
                    </div>  
                    
    
                    <div class="card mb-4 padding" style="border: 0px; margin-left: 6%">
                        <div class="circle4" style="background-color: blue;">
                            <div class="top-part"></div>
                            <p style="font-size:30px; color: white; padding-top: 0%"><b>ITANGOLA</b></p>
                        </div>
        
                        <p style="font-size:23px; color: black;"><b>Luanda</b></p>

                        <div style="position: relative; justify-content: center; padding-left: 9%">
                        
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/img/icon/pin-de-localizacao.png" width="40" height="40" />
                                </svg>
                                <p class="text" style="font-size:16px; color: black; margin-top: -26px;">Edifício Atlactic Business Center <br>Talatona</p>
                            </div>
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/img/icon/telefone.png" width="40" height="40" />
                                </svg>
                                <p class="text" style="padding-left: 6px; margin-top: -22px; font-size:16px; color: black;">(+244) 927316791 <br>(+244) 944908829</p>
                            </div>
                            <div class="icon-text-container" style="display: flex; text-align: left; padding-top: 6%">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <image href="/svg/email.svg" width="40" height="40" />
                                </svg>
                                <p class="text" style="padding-left: 6px; margin-top: -6px; font-size:16px; color: black;">comercial@it-angola.com</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>                
        </div>
       

        <div class="center-text" style="text-align: -webkit-center; padding-top: 0%; padding-bottom:3%;" id="whatsapp">
            <p style="font-size: 25px; color: black" class="padding">Puxa no WhatsApp</p>
    
            <div class="botao_2 botao_cor" style="background-color: green;">
                <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                    <img src="/img/icon/whatssap.png" alt="Slide 1" style="width: 15%; margin-top: 1.5%">
                </a>
            </div>
    
        </div>            
        
    </div>


    <div style="background-color:rgb(255, 255, 255); padding-bottom:5%;" id="formulario">
        
        <div class="text-center" style="padding: 3% 0;">  
            <h4 style="font-size: 25px; color:black;">
                <b> Quero receber mais informações sobre formações Primavera </b>
            </h4>        
        </div>  

        <div class="container text-center" style="padding-top: 3%; padding-bottom: 0%; background-color:white; border: 1px solid black; width: 1408px; ">

            <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">

                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Nome</b><span style="color: #ed0000;">*</span></label>
                    <input type="text" id="name" name="name" style="width: 864px; height: 56px; border: 1px; margin-left: 6%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center;padding-top: 15px">
                    <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Email</b><span style="color: #ed0000;">*</span></label>
                    <input type="email" id="email" name="email" style="width: 644px; height: 56px; border: 1px; margin-left: 6.6%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="contacts" style="padding-top: 1.5%; font-size: 18px;"><b>Telefone</b><span style="color: #ed0000;">*</span></label>
                    <input type="text" id="contacts" name="contacts" style="width: 496px; height: 56px; border: 1px; margin-left: 3.9%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="empresa" style="padding-top: 1.5%; font-size: 18px;"><b>Empresa</b><span style="color: #ed0000;">*</span></label>
                    <input type="text" id="empresa" name="empresa" style="width: 864px; height: 56px; border: 1px; margin-left: 3.9%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="nif" style="padding-top: 1.5%; font-size: 18px;"><b>NIF</b><span style="color: #ed0000;">*</span></label>
                    <input type="text" id="nif" name="nif" style="width: 496px; height: 56px; border: 1px; margin-left: 8.5%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="Provincia" style="padding-top: 1.5%; font-size: 18px;"><b>Provincia</b><span style="color: #ed0000;">*</span></label>
                    <input type="text" id="cargo" name="Provincia" style="width: 496px; height: 56px; border: 1px; margin-left: 3.4%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="message" style="padding-top: 1.5%; font-size: 18px;"><b>Mensagem</b><span style="color: #ed0000;">*</span></label>
                    <textarea name="message" id="message" style="width: 864px; height: 56px; border: 1px; margin-left: 2%; background-color: rgb(195, 195, 195);" placeholder="" rows="4" cols="4"></textarea>                    
                </div>
                <div class="col-lg-6 col-md-4" style="display: flex; align-items: center; padding-top: 10px; padding-left: 14%;">
                    <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                    <label for="aceito" style="display: flex; align-items: center; padding-left: 3.5%; padding-top: 1%; text-decoration: underline;">Li e Aceito a Política de Privacidade</label>                    
                </div>
                
                <div class="center-text" style="padding: 3% 0 3% 14%">
                    <div class="botao_2 botao_cor" style="background-color: blue; text-align: -webkit-cnter;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px; text-align: -webkit-cnter;">
                            Enviar
                        </a>
                    </div>
                </div>

            </form>            
        </div>
        
    </div>

        
@endsection