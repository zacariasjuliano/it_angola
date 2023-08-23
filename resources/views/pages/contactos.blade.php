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
            width: 375px;
            height: 45px;
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
            width: 416px;
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

    <div class="center-text" style="background-color: #dedede; text-align: -webkit-center; padding-top: 5%">
        <h5 style="font-size: 25px; color: black" class="padding"><b>Antedimento e Suporte</b></h5>

        <div class="botao_2 botao_cor" style="background-color: green;">
            <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                (+244) 927316791 
            </a>
        </div>

        <p style="font-size: 30px; color: black" class="padding">Ligue Já!</p>    
        
        
        <div style="margin-bottom: 0%; margin-top: 6%;">
            <div style="padding: 1.5% 25%">             
    
                <div class="card-deck mb-3">
                    <div class="card mb-4 padding" style="border: 0px; margin-right: 6%">
                        <div class="circle3" style="background-color: blue;">
                            <div class="top-part"></div>
                            <p style="font-size:30px; color: white; padding-top: 0%"><b>ITANGOLA</b></p>
                        </div>
        
                        <p style="font-size:23px; color: black;"><b>Benguela (Sede)</b></p>
                        
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">Edifício Acácias</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: -9%">Rua Infante Dom Henriques nº 2</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">(+244) 927316791</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: -9%">(+244) 944908829</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">comercial@it-angola.com</p>                        
                    </div>  
                    
    
                    <div class="card mb-4 padding" style="border: 0px; margin-left: 6%">
                        <div class="circle4" style="background-color: blue;">
                            <div class="top-part"></div>
                            <p style="font-size:30px; color: white; padding-top: 0%"><b>ITANGOLA</b></p>
                        </div>
        
                        <p style="font-size:23px; color: black;"><b>Luanda</b></p>
                        
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">Edifício Atlactic Business Center</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: -9%">Talatona</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">(+244) 927316791</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: -9%">(+244) 944908829</p>
                        <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">comercial@it-angola.com</p>       
                    </div>
                </div>
    
            </div>                
        </div>

            
        <div style="display: flex; justify-content: center; align-items: center" id="localizacao" hidden>

            <div style="text-align: center; border-radius: 25px; background-color: white; margin-right: 1%; padding:6% 3.5%">
                <div class="circle3" style="background-color: blue;">
                    <div class="top-part"></div>
                    <p style="font-size:30px; color: white; padding-top: 4%"><b>ITANGOLA</b></p>
                </div>

                <p style="font-size:23px; color: black;"><b>Benguela (Sede)</b></p>
                
                <p style="text-align: left; font-size:16; color: black; margin-top: 0%">Edifício Acácias <br> Rua Infante Dom Henriques nº 2</p>
                <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">(+244) 927316791 <br> (+244) 944908829 </p>
                <p style="text-align: left; font-size:16px; color: black; margin-top: 0%"><b>comercial@it-angola.com</b></p>
                
            </div>

            <div style="text-align: center; border-radius: 25px; background-color: white; margin-left: 1%; padding:6% 3.5%">
                <div class="circle4" style="background-color: blue;">
                    <div class="top-part"></div>
                    <p style="font-size:30px; color: white; padding-top: 4%"><b>ITANGOLA</b></p>
                </div>

                <p style="font-size:23px; color: black;"><b>Luanda</b></p>
                
                <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">Edifício Atlactic Business Center <br> Talatona</p>
                <p style="text-align: left; font-size:16px; color: black; margin-top: 0%">(+244) 927316791 <br> (+244) 944908829 </p>
                <p style="text-align: left; font-size:16px; color: black; margin-top: 0%"><b>comercial@it-angola.com</b></p>

            </div>

        </div> 

        <div class="center-text" style="text-align: -webkit-center; padding-top: 0%; padding-bottom:5%;" id="whatsapp">
            <p style="font-size: 25px; color: black" class="padding">Puxa no WhatsApp</p>
    
            <div class="botao_2 botao_cor" style="background-color: green;">
                <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                    
                </a>
            </div>
    
        </div>            
        
    </div>

    <div style="background-color:rgb(99, 98, 98); padding-bottom:5%;">
        
        <div class="text-center" style="padding-top: 5%;">  
            <h4 style="font-size: 25px; color:white;"> Quero ser contactado(a) pela ITANGOLA?  
                <br>Identifique o motivo e exponha o seu pedido, de forma a identificarmos
                <br>a equipa mais competente para o contactar.
            </h4>        
            <h4 style="padding: 2.5% 0; font-size: 25px; color:white;"> Dados de contacto </h4>
        </div>  

        <div class="container text-center" style="padding-top: 3%; padding-bottom: 5%; background-color:white; border-radius: 35px; width: 1408px; height: 750px">

            <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">

                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Nome</b>*</label>
                    <input type="text" id="name" name="name" style="width: 864px; height: 56px; border: 1px; margin-left: 6%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center;padding-top: 15px">
                    <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Email</b>*</label>
                    <input type="email" id="email" name="email" style="width: 644px; height: 56px; border: 1px; margin-left: 6.6%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="contacts" style="padding-top: 1.5%; font-size: 18px;"><b>Telefone</b>*</label>
                    <input type="text" id="contacts" name="contacts" style="width: 496px; height: 56px; border: 1px; margin-left: 3.9%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="empresa" style="padding-top: 1.5%; font-size: 18px;"><b>Empresa</b>*</label>
                    <input type="text" id="empresa" name="empresa" style="width: 864px; height: 56px; border: 1px; margin-left: 3.9%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="nif" style="padding-top: 1.5%; font-size: 18px;"><b>NIF</b>*</label>
                    <input type="text" id="nif" name="nif" style="width: 496px; height: 56px; border: 1px; margin-left: 8.5%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="Provincia" style="padding-top: 1.5%; font-size: 18px;"><b>Provincia</b>*</label>
                    <input type="text" id="cargo" name="Provincia" style="width: 496px; height: 56px; border: 1px; margin-left: 3.4%; background-color: rgb(195, 195, 195)">
                </div>
                <div class="col-lg-12 col-md-4" style="display: flex; align-items: center; padding-top: 15px">
                    <label for="message" style="padding-top: 1.5%; font-size: 18px;"><b>Mensagem</b>*</label>
                    <textarea name="message" id="message" style="width: 864px; height: 56px; border: 1px; margin-left: 2%; background-color: rgb(195, 195, 195);" placeholder="" rows="4" cols="4"></textarea>                    
                </div>
                <div class="col-lg-6 col-md-4" style="display: flex; align-items: center; padding-top: 10px; padding-left: 14%;">
                    <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                    <label for="aceito" style="display: flex; align-items: center; padding-left: 3.5%; padding-top: 1%; text-decoration: underline;">Li e Aceito a Política de Privacidade</label>                    
                </div>
                
                <div class="center-text" style="padding: 3% 0 0 14%">
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