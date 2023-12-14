@extends('layout.template')
 
@section('content')

    <style>     
        .botao_formulario_cor {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }
        .botao_1 {
            background-color: white;
            border-radius: 55px;
            width: 720px;
            height: 66px;
        }
        .botao_cor_1 {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 20%; 
        }
        .botao_2 {
            background-color: white;
            border-radius: 0px;
            width: 350px;
            height: 66px;
        }
        .botao_cor_2 {
            background-color: #d0005f; 
            margin: 0 auto; 
        }
        .carousel-center-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
        .carousel-left-text {
            position: absolute;
            top: 55%;
            left: 65%;
            transform: translate(-50%, -50%);
            text-align: left;
            color: #fff;
        }           
        .small_screen_p {
            padding: 16% 0% 0 0;
        }          
        .small_screen_pa {
            padding: 6% 6% 0 0;
        }
        .small_screen_padding {
            margin-top: 0%;
        }
        .small_screen_pad {
            padding: 0 13% 6% 14%
        }

        @media screen and (max-width: 768px) {           
            .small_screen_p {
                padding: 3% 0% 0 0;
            }           
            .small_screen_pa {
                padding: 3% 3% 0 0;
            } 
            .small_screen_padding {
                margin-top: 1.5%;
            }
            .small_screen_pad {
                padding: 0 13% 1.5% 14%
            }                    
        }
    </style>     
    
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <img src="/img/parceiros/cacimbo.jfif" alt="Slide 1" style="width: 100%">                
                </div>

            
                <div style="margin-top: 0%">
                    <div class="carousel-center-text" style="text-align: -webkit-center;">
                        <img src="/img/parceiros/cacimbo_0.png" alt="Slide 1" class="padding" style="width: 60%">                         
                        <h3 style="font-size: 45px; color: white" class="padding"><b>PARCEIRO ITANGOLA</b></h3>
                        <p style="font-size: 40px; color: white" class="">SOFTWARE FACTURAÇÃO E GESTÃO</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>

                  
    <div class="card-deck mb-3" style="margin-right: 0px; margin-bottom: 0rem!important;">
        <div class="card mb-4" style="border: 0px solid rgba(0,0,0,.125); background-color: #d0005f; border-radius: 0px; margin-bottom: 0rem!important;">
            <p class="small_screen_pa" style="font-size: 30px; color: black; margin-left: 13%"><b>SOLUÇOES CACIMBO ERP</b></p> 
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO GESTÃO
            </p>  
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO DE VENDAS
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO DE COMPRAS
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO DE TESOURARIA
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO DE POS
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - MODULO QUIOSQUE
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - GESTÃO BOMBAS
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - INSTITUCIONAL
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO - HOTELARIA
            </p>
            <p style="font-size: 15px; color: white; padding: 0; margin-left: 13%; text-decoration: underline;">
                CACIMBO -RECURSOS HUMANOS
            </p> 
        </div>

        <div class="card mb-8" style="padding-left:0px; border: 0px solid rgba(0,0,0,.125); border-radius: 0px; margin-bottom: 0rem!important;">
            <p class="small_screen_p" style="font-size: 30px; color: #d0005f; position: relative; display: flex; justify-content: center;">
                <b>A SOLUÇÃO CERTA PARA O SEU NEGÓCIO</b>
            </p> 
            <hr style="margin: 0 auto; width: 30%; border: 1.5px solid #d0005f;">
      
            <p style="font-size: 22px; color: black; padding: 3% 17% 0 15%; position: relative; display: flex; justify-content: center;">
                EDUCAÇÃO, COMÊRCIO A RETALHO, RESTAURAÇÃO, LAVANDARIA, HOTELARIA, BOMBAS DE COBUSTÍVEL E OUTROS
            </p> 
            <p class="small_screen_pad" style="font-size: 20px; color: black; position: relative; display: flex; justify-content: center; line-height: 35px;">
                Software de facturação e gestão, que permite alcançar os resultados que você almeja para o seu negócio.
            </p> 
            <a href="#" class="botao_2 btn-center botao_cor_2" style="display: flex; justify-content: center; align-items: center; font-size: 25px; position: relative; color: white">
                <b>ESCOLHER UM MÓDULO</b>
            </a>
        </div>                            
    </div> 


    <div id="carouselExample" class="carousel slide small_screen_padding" data-ride="carousel"> 
        <img src="/img/parceiros/cacimbo_1.jfif" alt="Slide 1" style="width: 100%"> 

        <div class="carousel-left-text">
            <h3 style="font-size:50px; color: #d0005f"><b>TENHA AS INFORMAÇÕES DO SEU NEGÓCIO NA PLANA DA MÃO</b></h3>
            <p style="font-size: 26px; color: white; line-height: 36px;">Não importa o tamanho da sua empresa, você terá as informações necessárias para tomar as melhores decisões.</p>
        </div>   
    </div>

    
    <!-- MELHORAR -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="margin-top: 0%;"> 
        <img src="/img/parceiros/cacimbo_2.jfif" alt="Slide 1" style="width: 100%">           

        <div class="carousel-center-text" style="top: 50%;">
        
            <h3 style="font-size: 45px; color: white">
                <b>ACOMPANHAMENTO CONTÍNUO</b>
            </h3>
            <p style="font-size: 25px; color: white;">Receba o apoio necessário para que o seu sistema funcione às mil maravilhas</p>
            
                    
            <div class="row" style="padding-top: 90px; display: flex; justify-content: space-between;">
               
                <div class="col" style="background-color: #d0005f; margin-right: 9px;">
                    <div class="rounded-circle" style="font-size: 20px; top: -45px; position: relative; justify-content: center;">
                        <img class="img-fluid rounded-circle" src="/img/home/home_10.jpg" alt="..." style="width: 35%;"/> 
                    </div>

                    <p class="text-center" style="font-size: 25px; color: white; padding-top: -20%">
                        Formação ao Utilizador
                    </p> 
                    <p class="text-left" style="font-size: 15px; color: white; line-height: 30px;">
                        Damos formação aos seus colaboradores para que tenham maior dinamismo nas operações do dia a dia do seu negócio.
                    </p>  
                </div>

                <div class="col" style="background-color: black; margin-right: 9px;">
                    <div class="rounded-circle" style="font-size: 20px; top: -45px; position: relative; justify-content: center; ">
                        <img class="img-fluid rounded-circle" src="/img/home/home_9.jpg" alt="..." style="width: 35%;"/> 
                    </div>
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: -20%">
                        Suporte Técnico
                    </p> 
                    <p class="text-left" style="font-size: 15px; color: white; line-height: 30px;">
                        Garantimos um suporte de qualidade por duas via, presencial e remota.
                    </p>  
                </div>

                <div class="col" style="background-color: #d0005f;">
                    <div class="rounded-circle" style="font-size: 20px; top: -45px; position: relative; justify-content: center; ">
                        <img class="img-fluid rounded-circle" src="/img/home/home_11.jpg" alt="..." style="width: 35%;"/> 
                    </div>
                    <p class="text-center" style="font-size: 30px; color: white; padding-top: -20%">
                        Consultoria
                    </p> 
                    <p class="text-left" style="font-size: 15px; color: white; line-height: 30px;">
                        Montamos um diagnóstico com as melhores soluções para as necessidades da sua empresa.
                    </p>  
                </div> 
                            
            </div> 
        </div>            

    </div>
    

    <div style="height: 450px; position: relative; background-color: rgb(45, 44, 44)">        
        <div class="container">
            <p class="text-center" style="font-size: 40px; word-spacing: 10px; padding-top: 11%; color: white">
                <b>GARANTA JÁ O SEU SOFWARE CACIMBO ERP</b> 
            </p>   
            
            <a href="/contactos#formulario" class="botao_1 btn-center botao_cor_1" style="margin-left: 12%; width: 812px; position: initial; align-items: center; justify-content: center; font-size: 35px; color: white;">
                Quero uma demostração do Cacimbo ERP
            </a>

        </div>        
    </div> 


    <div style="background-color:white; padding-bottom:5%;">
        
        <div class="text-center" style="padding-top: 5%;">  
            <h4 style="font-size: 25px; color: #d0005f;"> 
                <b>PREENCHA O FORMULÁRIO, E RECEBA MAIS INFORMAÇÕES DE UM  
                <br>ESPECIALISTA SEM QUALQUER COMPROMISSO.</b>
            </h4> 
        </div>  

        @include('parceiros.formulario')
        
    </div>
    

@endsection