@extends('layout.template')
 
@section('content')

    @include('layout.slide')


    <style>
        .fundo {            
            box-shadow: 0px 0px 11px 2px rgb(150, 150, 150, 0.36);
        }
        .equal-column {
            width: 80%;
            height: 60%;
            border: 1px solid #000;
            padding: 10px;
        }
        .btn-center {
            position: absolute;
            left: 40%;
            height: 6%;
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
        .solucoes {
            padding: 8.5% 0;
            margin: 0 15.5%;
        }
    </style>

    <div>

        <section class="section" style="color:black; padding-top: 11%; padding-bottom: 6%;">		
            <div class="row" style="padding-left: 5%">

                <div class="col-md-6">
                    <h3 style="flex: 0 0 45%; color: rgb(38, 128, 235); font-size:48px;">
                        
                        Soluções para automatizar processos  manuais e fornecer informações em tempo real para tomada de decisão
                        								
                    </h3>

                    <h6 style="color:black; font-size:26px; width: 80%">
                        Gerencie com eficiência as operações do seu negócio com tecnologias de gestão preparadas para a nova era digital e para o futuro.
                    </h6>							
                </div>                
                                    
                <div class="col-md-6">
                    <img src="/img/home/pcitangoal.png" alt="" style="width: 100%;">
                </div>  

            </div>			
        </section>


        <section class="section" style="padding: 0px 0px; background-color:#8abce6;">		
            <div class="row" style="padding-left: 5%">                             
                                        
                <div class="col-md-6" style="flex: 0 0 45%; padding-top: 3.5%;">
                    <img src="/img/home/40.png" alt="">
                </div>

                <div class="col-md-6" style="padding-right: 1.5%;">
                    <h3 class="animated-element margin-bottom-20"  style="padding-top: 20%; width:75%">
                        <b style="color:white; font-size:42px;">
                            Tome decisões com base em dados reias que farão o seu negócio prosperar
                        </b>								
                    </h3>

                    <p class="animated-element slow margin-bottom-20" style="color:black; font-size:25px; width:63%">
                        Escolha a solução de gestão de acordo ao tamanho do seu negócio, não importa se a sua companhia é uma micro, 
                        pequena, média ou grandes empresas. Temos as tecnologias de gestão, certas para si.
                    </p>							
                </div> 
    
            </div>			
        </section>


        <section class="section padding" style="background-color: rgb(246, 246, 246); padding-top: 4%; padding-bottom: 15%; height: 850px;">
            <div class="padding">
                <div class="text-center" style="padding-bottom: 4%">
                    <h3 class="section-subheading" style="color:#3d3dff; font-size:45px;  padding-left: 20%; padding-right: 20%;">Um conjunto de soluções, prontas para entregar os resultados que você procura</h3>
                </div>

                <div class="row text-center" style="margin-left: 5%; margin-right: 5%">
                    <div class="col-lg-3 col-md-4">                             
                        <img class="img-fluid" src="/img/home/Camada-3.png" alt="..." style="height: 13%; display: inline;"/>
                                    
                        <h4 class="my-3" style="color:#29598d;"><b>Logística</b></h4>
                        <div class="text-justify solucoes fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%;">
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
                        <div class="text-justify equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 65%; margin: 0 15.5%; padding: 5% 0;">
                            <h6 style="padding-top: 5%; padding-right: 10%; padding-left: 18%;">Tesouraria Contas/C</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Tesouraria Bancos</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Contabilidade Base</h6> 
                            <h6 style="padding-right: 10%; padding-left: 18%;">Contabilidade Gestão</h6> 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">                          
                        <img class="img-fluid" src="/img/home/Camada-1.png" alt="..." style="height: 10%; display: inline; margin-top: 5%"/>
                        
                        <h4 class="my-3" style="color:#29598d;"><b>Recursos Humanos</b></h4>
                        <div class="text-justify equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 75%; margin: 0 12.5%; height: 58%;">
                            <h6 style="padding-top: 7%; padding-right: 5%; padding-left: 18%;">Salário / Honorários</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Gestão de contratos</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Processamento</h6> 
                            <h6 style="padding-right: 5%; padding-left: 18%;">Operações financeiras</h6> 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">                         
                        <img class="img-fluid" src="/img/home/Camada-2.png" alt="..." style="height: 10%; display: inline; margin-top: 5%"/>
                        
                        <h4 class="my-3" style="color:#29598d;"><b>Equipamentos e activos</b></h4>
                        <div class="text-justify equal-column fundo" style="background-color: white; border: 1px solid #cfc9c9; width: 80%; margin: 0 10%; height: 58%;">
                            <h6 style="padding-top: 25%; padding-left: 40%;">Activos</h6> 
                        </div>
                    </div>
                </div>

                <a href="#" class="circle btn-center text-center" style="font-size:20px; background-color:#3d3dff; width: 20%; margin-top: 2.5%; color: white; padding-top: 10px">
                    Saber mais sobre estas soluções
                </a>
                
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
        

        <section class="section" style="background-color:rgb(246, 246, 246); padding: 0rem 1rem;">
            <div class="line" style="padding: 3rem 1.25rem;">

                <div style="padding-top: 3%">
                    <p class="text-center" style="color:#338ed5; font-size:25px">
                        Veja os resultodos dos gestores que confiam nas soluções
                    </p>
                    <p class="text-justify" style="color:black; font-size:20px; padding: 0 32%;">
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
                <p style="color:white; font-size:35px; padding: 20% 25%; word-spacing: 20px;">                          
                    Você esta a um paço de garantir que o seu negócio começe a factura com rapidez e eficiência
                </p>
            </div> 
            <div class="col-lg-6 col-md-4 text-center" style="padding-top:60px">
                <h2 style="color:black;"></b>Envie a sua mensagem</b></h2>

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
                    
                    
                    <a href="#" class="circle btn-center text-center" style="font-size:20px; color: white; background-color:blue; width: 25%; left: 40%; margin-top:5%;">
                        Enviar mensagem
                    </a>

                </form>
                
            </div>
        </div>

    </div>

@endsection