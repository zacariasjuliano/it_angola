@extends('layout.template')
 
@section('content')

    @include('layout.slide')


    <style>
        .fundo {            
            box-shadow: 0px 0px 11px 2px rgb(150, 150, 150, 0.36);
        }

        .equal-column {
            width: 90%;
            height: 60%;
            border: 1px solid #000;
            padding: 10px;
        }

        .btn-center {
            position: absolute;
            left: 35%;
            height: 8%;
        }
        .customform input, .customform textarea {
            /*border: 20 !important;*/
            background: rgb(255 252 252 / 4%) !important;
        }

        .linha_input {
            /*border-bottom: 1px solid black;*/
            border: none; 
            border-bottom: 1px solid black;
        }

        .screem-size {
            padding-left: 1%; 
            padding-right: 1%;
        }
    </style>

    <div>

        <section class="section" style="color:black; padding-top: 6%; padding-bottom: 6%;">		
            <div class="row" style="padding-left: 5%">

                <div class="col-md-6" style="padding-right: 10%">
                    <h3 style="flex: 0 0 45%; color:rgb(33, 177, 243); font-size:45px;">
                        <b>
                            Soluções para automatizar processos  manuais e fornecer informações em tempo real para tomada de decisão
                        </b>								
                    </h3>

                    <p style="color:black; font-size:23px;">
                        Gerencie com eficiência as operações do seu negócio com tecnologias de gestão preparadas para a nova era digital e para o futuro.
                    </p>							
                </div>                
                                    
                <div class="col-md-4 margin-m-bottom-30">
                    <img src="/img/home/pcitangoal.png" alt="" style="width: 85%;">
                </div>  

            </div>			
        </section>


        <section class="section" style="padding: 0px 0px; background-color:#8abce6;">		
            <div class="row" style="padding-left: 5%">                             
                                        
                <div class="col-md-8" style="flex: 0 0 45%; padding-top: 3.5%;">
                    <img src="/img/home/40.png" alt="">
                </div>

                <div class="col-md-4" style="padding-right: 5%">
                    <h3 class="animated-element margin-bottom-20"  style="padding-top: 20%;">
                        <b style="color:white; font-size:38px;">
                            Tome decisões com base em dados reias que farão o seu negócio prosperar
                        </b>								
                    </h3>

                    <p class="animated-element slow margin-bottom-20" style="color:black; font-size:21px;">
                        Escolha a solução de gestão de acordo ao tamanho do seu negócio, não importa se a sua companhia é uma micro, 
                        pequena, média ou grandes empresas. Temos as tecnologias de gestão, certas para si.
                    </p>							
                </div> 
    
            </div>			
        </section>


        <section class="section padding" style="background-color: rgb(246, 246, 246); padding-top: 4%; padding-bottom: 15%; height: 700px;">
            <div class="padding">
                <div class="text-center" style="padding-bottom: 4%">
                    <h3 class="section-subheading" style="color:#3d3dff; font-size:45px;  padding-left: 25%; padding-right: 25%;">Um conjunto de soluções, prontas para entregar os resultados que você procura</h3>
                </div>

                <div class="row text-center" style="margin-left: 15%; margin-right: 15%">
                    <div class="col-lg-3 col-md-4">                             
                        <img class="img-fluid" src="/img/home/Camada-3.png" alt="..." style="height: 13%; display: inline;"/>
                                    
                        <h4 class="my-3" style="color:#29598d;"><b>Logística</b></h4>
                        <div class="text-justify padding fundo" style="background-color: white; border: 1px solid #cfc9c9;">
                            <h6 style="padding-right: 20%; padding-left: 30%;">Vendas</h6> 
                            <h6 style="padding-right: 20%; padding-left: 30%;">Inventário</h6> 
                            <h6 style="padding-right: 20%; padding-left: 30%;">Compras</h6> 
                            <h6 style="padding-right: 20%; padding-left: 30%;">Encomendas</h6> 
                            <h6 hidden style="padding-right: 20%; padding-left: 30%;">Requisições Internas</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">                          
                        <img class="img-fluid" src="/img/home/Camada-4.png" alt="..." style="height: 13%; display: inline"/>
                        
                        <h4 class="my-3" style="color:#29598d;"><b>Finanças</b></h4>
                        <div class="text-justify equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9; margin-left: 5%; margin-right: 8%; padding-top: 5%">
                            <h6 style="padding-top: 5%; padding-right: 10%; padding-left: 18%;">Tesouraria Contas/C</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Tesouraria Bancos</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Contabilidade Base</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Contabilidade Gestão</h6> 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">                          
                        <img class="img-fluid" src="/img/home/Camada-1.png" alt="..." style="height: 10%; display: inline; margin-top: 5%"/>
                        
                        <h4 class="my-3" style="color:#29598d;"><b>Recursos Humanos</b></h4>
                        <div class="text-justify padding equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9;">
                            <h6 style="padding-right: 5%; padding-left: 18%;">Salário / Honorários</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Gestão de contratos</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Processamento</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Operações financeiras</h6> 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">                         
                        <img class="img-fluid" src="/img/home/Camada-2.png" alt="..." style="height: 10%; display: inline; margin-top: 5%"/>
                        
                        <h4 class="my-3" style="color:#29598d;"><b>Equipamentos e activos</b></h4>
                        <div class="text-justify padding equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9;">
                            <h6 style="padding-top: 25%; padding-left: 35%;">Activos</h6> 
                        </div>
                    </div>
                </div>

                <div class="circle btn-center text-center p-4" style="font-size:20px; background-color:#3d3dff; width: 25%; height: 10%;">
                    <a href="#" style="color: white; paddinh-top:15px">
                        Saber mais sobre estas soluções
                    </a>
                </div>
            </div>
        </section>


        <section class="section" style="background-color:#8abce6;">
            <div class="container padding">
                <div class="text-center" style="color:white;">
                    <h2 class="section-subheading" style="font-size: 40px">Nossos clientes de referência</h2>
                </div>

                <div class="row text-center padding">
                    <div class="col-lg-2 col-md-2"  style="text-align: -webkit-center;">                    
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/maptss.png" alt="..."/>
                        </span>                    
                        <h5>Sector Público</h5>
                    </div>

                    <div class="col-lg-2 col-md-2" style="text-align: -webkit-center;">
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/carrilho.png" alt="..." style="display: revert;"/>
                        </span>
                        <h5>Indústria</h5>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/secil.png" alt="..."/>
                        </span>
                        <h5>Indústria</h5>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/inap.png" alt="..."/>
                        </span>
                        <h5>Sector Público</h5>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/poliobra.png" alt="..."/>
                        </span>
                        <h5>Construção</h5>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <span class="fa-stack fa-3x">                           
                            <img class="img-fluid" src="/img/clientes/pagaso.png" alt="..." style="display: revert;"/>
                        </span>
                        <h5>Telecomunicações</h5>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="section" style="padding: 0rem 1rem;">
            <div class="line" style="background-color:rgb(246, 246, 246); padding: 3rem 1.25rem;">

                <div style="padding-top: 3%">
                    <p class="text-center" style="color:#338ed5; font-size:22px">
                        Veja os resultodos dos gestores que confiam nas soluções
                    </p>
                    <p class="text-justify" style="color:black; font-size:20px; padding-right: 35%; padding-left: 35%">
                        "Com as soluções de gestão da IT-ANGOLA o nosso acompanhamento dos dados dentro da ferramenta de
                        gestão, mudou completamente a nossa visão de gerir o nosso negócio"
                    </p>
                </div>                                   

                <div class="text-center" style="padding-left: 20%; background-color: transparent">                    
                    <img class="img-fluid rounded-circle" src="/img/home/face.png" alt="..." style="width: 40%; padding-left: 32%;"/>                     
                </div>

            </div>
        </section>


        <div class="row">
            <div class="col-lg-6 col-md-4" style="background-color:#899cc6; padding-bottom:270px; flex: 0 0 45%;">         
                <p style="color:white; font-size:35px; padding-top:270px; padding-left:200px; padding-right:200px; word-spacing: 20px;">                          
                    Você esta a um paço de garantir que o seu negócio começe a factura com rapidez e eficiência
                </p>
            </div> 
            <div class="col-lg-6 col-md-4 text-center" style="padding-top:60px">
                <h4 style="color:black;"> Envie a sua mensagem </h4>

                <form class="padding" style="padding-left:4rem !important; padding-right:6rem !important;" method="post" enctype="multipart/form-data">

                    <div style="display: flex; align-items: center; padding-top:20px">
                        <label for="name" style="padding-top: 1.5%;">Nome*</label>
                        <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black; margin-left:5%;">
                    </div>
                    <div style="display: flex; align-items: center; padding-top:20px">
                        <label for="email" style="padding-top: 1.5%;">Email*</label>
                        <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black; margin-left:5%;">
                    </div>
                    <div style="display: flex; align-items: center; padding-top:20px">
                        <label for="contacts" style="padding-top: 1.5%;">Telefone*</label>
                        <input type="text" id="contacts" name="contacts" style="width: 100%; border: none; border-bottom: 1px solid black; margin-left:3%;">
                    </div>
                    <div style="display: flex; align-items: center; padding-top:20px">
                        <label for="message" style="padding-top: 6.5%;">Mensagem</label>
                        <textarea name="message" id="message"  style="width: 100%; border: none; border-bottom: 1px solid black; margin-left:1%;" placeholder="" rows="4" cols="4"></textarea>                    
                    </div>
                    
                    <div class="circle btn-center" style="background-color:blue; width: 35%; left: 35%; margin-top:5%;">
                        <a href="#" class="padding" style="color: white;">
                            Enviar mensagem
                        </a>
                    </div>

                </form>
                
            </div>
        </div>

    </div>

@endsection