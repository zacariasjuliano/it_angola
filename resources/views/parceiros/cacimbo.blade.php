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
            margin-left: 18%; 
        }
        .botao_2 {
            background-color: white;
            border-radius: 0px;
            width: 333px;
            height: 66px;
        }
        .botao_cor {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 33%; 
        }
        .botao_cor_3 {
            background-color: #d0005f; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 5%;
            margin-left: 2%; 
        }
    </style>
    
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/parceiros/cacimbo.jpg" alt="Slide 1" style="width: 100%">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <img hidden src="/img/starter/starter.png" alt="Slide 1" class="padding"> 
                <h3 style="font-size:50px; color: white" class="padding"><b>PARCEIRO ITANGOLA</b></h3>
                <p style="font-size: 30px; color: white" class="padding">SOFTWARE FACTURAÇÃO E GESTÃO</p>
            </div>
        </div>    
    </div>

                  
    <div class="card-deck mb-3" style="margin-right: 0px;">
        <div class="card mb-4" style="border: 0px solid rgba(0,0,0,.125); background-color: #d0005f; border-radius: 0px;">
            <p style="font-size: 30px; color: black; padding: 6% 6% 0 0; margin-left: 13%"><b>SOLUÇOES CACIMBO ERP</b></p> 
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

        <div class="card mb-8" style="padding-left:0px; border: 0px solid rgba(0,0,0,.125); border-radius: 0px;">
            <p style="font-size: 30px; color: #d0005f; padding: 16% 0% 0 0; position: relative; display: flex; justify-content: center;">
                <b>SOLUÇÃO CERTA PARA O SEU NEGÓCIO</b>
            </p> 
            <hr style="margin-left: 30%; position: relative; display: flex; justify-content: center; width: 30%; border: 1.5px solid #d0005f">
            <p style="font-size: 22px; color: black; padding: 0 21% 0 15%; position: relative; display: flex; justify-content: center;">
                EDUCAÇÃO, COMÊRCIO A RETALHO, RESTAURAÇÃO, LAVANDARIA, HOTELARIA, BOMBAS DE COBUSTÍVEL E OUTROS
            </p> 
            <p style="font-size: 25px; color: black; padding: 0 13% 0 14%; position: relative; display: flex; justify-content: center;">
                Software de facturação e gestão, que permite alcancar os resultados que você almeja para o seu negócio.
            </p> 
            <a href="#" class="botao_2 btn-center botao_cor" style="font-size: 25px; position: relative; color: white">
                <b>ESCOLHER UM MÓDULO</b>
            </a>
        </div>                            
    </div> 


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="margin-top: -2.1%"> 
        <img src="/img/parceiros/cacimbo_1.jpg" alt="Slide 1" style="width: 100%">       
    </div>

    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="margin-top: -2.1%"> 
        <img src="/img/parceiros/cacimbo_2.jpg" alt="Slide 1" style="width: 100%">     
    </div>
    

    <div style="height: 450px; position: relative; background-color: rgb(45, 44, 44)">        
        <div class="container">
            <p class="text-center" style="font-size: 40px; word-spacing: 10px; padding-top: 11%; color: white">
                <b>GARANTA JÁ O SEU SOFWARE CACIMBO ERP</b> 
            </p>   
            
            <a href="/contactos#formulario" class="botao_1 btn-center botao_cor_1" style="font-size: 35px; color: white; position: relative; display: flex; justify-content: center;">
                Quero uma demostração do cacimbo erp
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