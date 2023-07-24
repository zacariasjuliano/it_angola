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
            border-radius: 55px;
            width: 225px;
            height: 60px;
        }
        .botao_cor {
            background-color: #0f0034; 
            
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 15%;
            margin-left: 25%; 
        }
        .circle3 {
            width: 475px;
            height: 5%;
            position: absolute;
            top: 423.5%;
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
                <p style="font-size: 50px; color: white" class="padding">CHEGOU A ERA DIGITAL</p>
                <p style="font-size: 30px; color: white" class="padding">A sua empresa já esta preparada para ela?</p>
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="text-center" style="padding-top:60px">
            <h4 style="color:black;"> Cadastre-se e Receber Mais Informações, Sem Qualquer </h4>

            <form class="padding" style="padding-left:4rem !important; padding-right:6rem !important;" method="post" enctype="multipart/form-data">

                <div class="text-left" style="padding-top:20px">
                    <label for="name" style="padding-top: 1.5%; color: blue;">Nome*</label>
                    <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="email" style="padding-top: 1.5%;  color: blue;">Email*</label>
                    <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="contacts" style="padding-top: 1.5%;  color: blue;">Telefone*</label>
                    <input type="text" id="contacts" name="contacts" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="empresa" style="padding-top: 1.5%;  color: blue;">Empresa*</label>
                    <input type="text" id="empresa" name="empresa" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="nif" style="padding-top: 1.5%;  color: blue;">NIF*</label>
                    <input type="text" id="nif" name="nif" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="cargo" style="padding-top: 1.5%;  color: blue;">Cargo*</label>
                    <input type="text" id="cargo" name="cargo" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="nif" style="padding-top: 1.5%;  color: blue;">NIF*</label>
                    <input type="text" id="nif" name="nif" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="funcionarios_n" style="padding-top: 1.5%;  color: blue;">Número de Funcionários*</label>
                    <input type="text" id="funcionarios_n" name="funcionarios_n" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="primavera" style="padding-top: 1.5%;  color: blue;">Utiliza Software Primavera*</label>
                    <input type="text" id="primavera" name="primavera" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="text-left" style="padding-top:20px">
                    <label for="modulo" style="padding-top: 1.5%;  color: blue;">Módulo que necessita*</label>
                    <input type="text" id="modulo" name="modulo" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>

                <div class="botao_2 botao_cor" style="background-color: blue;">
                    <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                        Enviar 
                    </a>
                </div>

            </form>
            
        </div>
    </div>

        
@endsection