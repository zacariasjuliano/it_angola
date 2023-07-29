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
            height: 60px;
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
            width: 383.5px;
            height: 8%;
            position: absolute;
            top: 110.3%;
            left: 51.1%;
            border-radius: 12.5% 12.5% 0 0;
            transform: skewY(0deg);
        }
        .circle4 {
            width: 389px;
            height: 8%;
            position: absolute;
            top: 110.3%;
            left: 28.7%;
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

            
        <div style="display: flex; justify-content: center; align-items: center" id="localizacao">

            <div style="text-align: center; border-radius: 25px; background-color: white; margin-right: 1%; padding:6% 4.1%">
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

        <div class="center-text" style="text-align: -webkit-center; padding-top: 5%; padding-bottom:5%;" id="whatsapp">
            <p style="font-size: 25px; color: black" class="padding"><b>Puxa no WhatsApp</b></p>
    
            <div class="botao_2 botao_cor" style="background-color: green;">
                <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                    
                </a>
            </div>
    
        </div>            
        
    </div>

    <div style="background-color:rgb(99, 98, 98); padding-bottom:5%;">
        
        <div class="text-center" style="color:white; padding-top: 5%;">  
            <h4 style="font-size: 25px;"> Quero ser contactado(a) pela ITANGOLA?  
                <br>Identifique o motivo e exponha o seu pedido, de forma a identificarmos
                <br>a equipa mais competente para o contactar.
            </h4>        
            <h4 style="padding: 2.5% 0; font-size: 25px;"> Dados de contacto </h4>
        </div>  

        <div class="container text-center" style="padding-top: 3%; padding-bottom: 5%; background-color:white; border-radius: 35px;">

            <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">

                <div col-lg-6 col-md-4 style="display: flex; align-items: center; padding-top:20px">
                    <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Nome</b>*</label>
                    <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div col-lg-6 col-md-4 style="display: flex; align-items: center;padding-top:20px">
                    <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Email</b>*</label>
                    <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div col-lg-6 col-md-4 style="display: flex; align-items: center; padding-top:20px">
                    <label for="contacts" style="padding-top: 1.5%; font-size: 18px;"><b>Telefone</b>*</label>
                    <input type="text" id="contacts" name="contacts" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div col-lg-6 col-md-4 style="display: flex; align-items: center; padding-top:20px">
                    <label for="empresa" style="padding-top: 1.5%; font-size: 18px;"><b>Empresa</b>*</label>
                    <input type="text" id="empresa" name="empresa" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div col-lg-6 col-md-4 style="display: flex; align-items: center; padding-top:20px">
                    <label for="nif" style="padding-top: 1.5%; font-size: 18px;"><b>NIF</b>*</label>
                    <input type="text" id="nif" name="nif" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div col-lg-6 col-md-4 style="display: flex; align-items: center; padding-top:20px">
                    <label for="Provincia" style="padding-top: 1.5%; font-size: 18px;"><b>Provincia</b>*</label>
                    <input type="text" id="cargo" name="Provincia" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div style="display: flex; align-items: center; padding-top:20px">
                    <label for="message" style="display: flex; align-items: center; padding-top: 6.5%; font-size: 18px;"><b>Mensagem</b></label>
                    <textarea name="message" id="message"  style="width: 100%; border: none; border-bottom: 1px solid black; margin-left:1%;" placeholder="" rows="4" cols="4"></textarea>                    
                </div>
                <div style="display: flex; align-items: center; padding-top: 10px; padding-left: 10.7%;">
                    <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                    <label for="aceito" style="display: flex; align-items: center; padding-left: 1.5%; padding-top: 1%;">Li e Aceito a Política de Privacidade</label>                    
                </div>
                

                <div class="center-text padding" style="text-align: -webkit-center;">
                    <div class="botao_2 botao_cor" style="background-color: blue;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Enviar
                        </a>
                    </div>

                </div>

            </form>            
        </div>
        
    </div>

        
@endsection