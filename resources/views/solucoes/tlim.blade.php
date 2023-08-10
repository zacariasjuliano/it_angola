@extends('layout.template')
 
@section('content')
    

    <style>
        .botao {
            background-color: #ff6900; 
            margin-left: 20%; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 10%;
            margin-top: 10%; 
        }
        .ao_centro {            
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-top: 20%; 
            margin-bottom: 2%;
        }        
        .botao_2 {
            background-color: white;
            border-radius: 55px;
            width: 225px;
            height: 50px;
        }
        .botao_cor {
            background-color: #0f0034; 
            display: flex; 
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
            top: 418.8%;
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
        .altura {
            padding-top: 1.5%;
            padding-bottom: 1.5%;
        }       
        ::marker {
            color: rgb(101, 101, 101);
        }
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/solucoes/img-5.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <h3 style="font-size:50px; color: white" class="padding"><b>TLIM</b></h3>
                <p style="font-size: 30px; color: white" class="padding">Solução Para o Comércio a Retalio</p>
                <img src="/img/solucoes/tlim-1.png" alt="Slide 1" class="padding"> 
            </div>
        </div>
        
    </div>

    <div style="background-color: rgb(246, 246, 246);">

        <div class="text-center" style="padding-top: 6%;">
            <p style="font-size: 50px; color: blue;">
                <b>Fidelização de Clientes e Operaçãos de Vendas</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                Usufrua de tecnologia que prepara a sua empresa para a era digital. Um sistema de gestão global, 
                híbrido, que integra com aplicações cloud, inteligente, integrado, tecnologicamente preparado 
                para integrar com qualquer sistema, plataforma ou aplicação e fácil de adaptar à realidade da 
                sua empresa.
            </p>           
        </div>

        <div class="container" style="padding-top: 2.5%;">
            <div class="row" style="border-radius: 0px; border: 0px solid #000; justify-content: center;">
                <a href="#" class="col-2 text-center altura menu_activo" style="max-width: 10%; background-color:blue; color: white;">  
                    <b>MÓDULOS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 10%; background-color:black; color: white;">  
                    <b>ARTIGOS</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 10%; background-color:black; color: white;">  
                    <b>CAIXA</b>        
                </a>
                <a href="#" class="col-2 text-center altura" style="max-width: 10%; background-color:black; color: white;">  
                    <b>CLIENTES</b>        
                </a>    
                <a href="#" class="col-4 text-center altura menu_curvo" style="max-width: 10%; background-color:black; color: white;">  
                    <b>GESTÃO</b>       
                </a>       
            </div>         
        </div>
                
    </div>

    <div style="background-color: rgb(246, 246, 246);">

        <div style="padding: 1.5% 20% 6% 20%;">        
            <div class="card-deck mb-3" >
                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: 0px; margin-right: -3px; border-radius: 25px 0 0 0;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Artigos
                    </h5> 
                    <p style="font-size: 15px; color: white; padding: 0 5%">
                        Com o TlimTM faz uma gestão eficiente de todos os artigos que comercializa no seu estabelecimento. 
                        As reposições são rápidas. O stock otimizado. <br>Cores, tamanhos, dimensões, famílias de artigos, 
                        códigos de barras e outras caraterísticas dos artigos são tratadas de forma intuitiva, para que 
                        facilmente conheça a disponibilidades de stock.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: -3px; border-radius: 0 25px 0 0;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 3%">
                        Caixa
                    </h5> 
                    <p style="font-size: 15px; color: white; padding: 0 5%">
                        As operações de caixa são muito simples com TlimTM. Um ecrã tátil intuitivo simplifica as operações 
                        de venda ao balcão. Qualquer operador, sem formação, facilmente executa operações como abertura/fecho, 
                        entradas/saídas de caixa, fundo de maneio, diversos tipos de pagamentos, devoluções, trocas, entre 
                        outras operações.
                    </p>  
                </div>                
            </div>            
        
            <div class="card-deck mb-3" style="margin-bottom: -3rem!important; margin-top: -3rem!important;">
                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: 0px; margin-right: -3px; border-radius: 0 0 0 25px;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Clientes
                    </h5> 
                    <p style="font-size: 15px; color: white; padding: 0 5%">
                        laneie as suas campanhas promocionais e execute-as sem dificuldade. <br>Com o TlimTM é muito simples 
                        definir períodos especiais com preços diferentes para determinados artigos, quantidades de artigos 
                        ou clientes.
                    </p>  
                </div>

                <div class="card mb-4 padding" style="background-color: #0f0034; margin-left: -3px; margin-right: -3px; border-radius: 0 0 25px 0;">
                    <h5 class="text-center" style="font-size: 30px; color: white; padding-top: 0%">
                        Gestão
                    </h5> 
                    <p style="font-size: 15px; color: white; padding: 0 5%">
                        Desde a assiduidade dos funcionários, até à avaliação dos resultados das vendas, passando pelo controlo 
                        dos custos operacionais. O TlimTM dá-lhe a informação de que precisa para gerir o negócio de forma eficiente.
                    </p>  
                </div>                
            </div>            
        
        </div>
                
    </div>  

    <div style="background-color: #8abce6; height: 450px; position: relative; padding: 0% 0%">
        
        <div class="contanier" style="flex: 1; padding-top: 4%;">
            <h4 style="font-size: 35px; color: black; text-align: -webkit-center;"><b>Impulsione o seu negócio com o Tlim</b></h4> 

            <ul style="text-align: left; color: white; padding-left: 30%">
                <li style="padding-top: 1%; font-size: 23px;">Solução touchscreen intuitiva e fácil de usar</li>
                <li style="padding-top: 1%; font-size: 23px;">Compatível com Windows</li>
                <li style="padding-top: 1%; font-size: 23px;">Produto certificado pela Autoridade Geral Tributária (AGT)</li>
                <li style="padding-top: 1%; font-size: 23px;">Acesso a atualizações contínuas</li>
                <li style="padding-top: 1%; font-size: 23px;">Garantias de cumprimento permanente das obrigações legais e fiscais</li>
                <li style="padding-top: 1%; font-size: 23px;">Suporte técnico garantido</li>
            </ul>

        </div>
        
    </div> 

    <div class="container" style="background-color: white; height: 450px; position: relative; padding-top: 5%;">
        
        <div style="flex: 1; padding-top: 2.5%;">
            <h5 style="font-size: 35px; color: blue;  text-align: -webkit-center;"><b>Conheça As Modalidades De Acesso A Esta Solução.</b></h5> 
            <p style="font-size: 23px; color: black; text-align: -webkit-left; padding-left: 6%;">
                Esta solução está disponível para instalação mediante subscrição. Isto significa que ao subscrever o 
                produto, acede a uma licença de utilização temporária (anual ou por dois anos).
            </p>  
            <p style="font-size: 23px; color: black; text-align: -webkit-left; padding-left: 6%;">
                A subscrição contempla o acesso ao software, assim como à respetiva atualização e manutenção durante 
                o período de acesso escolhido. Para aceder à solução basta efetuar a subscrição nos planos a baixo.
            </p>
        </div>
        
    </div> 

    <div style="background-color: #8abce6; height: 980px; position: relative; padding: 0% 0%">
        
        <div style="flex: 1; padding-left: 0%; padding-top: 7%;">
            <p style="font-size: 40px; color: white; text-align: -webkit-center;"><b>Simplifique a gestão de Caixa.</b></p> 
            <p style="font-size: 25px; color: black; text-align: -webkit-center;">
                Operações rápidas, simples e intuitivas.
            </p>  
            <p style="font-size: 25px; color: white; text-align: -webkit-left; padding: 0% 20%; word-spacing: 10px;">
                Aumente a eficiência do seu negócio com a solução de frente de loja Tlim. Organize facilmente a 
                informação num ecrã tátil, simples e intuitivo. As operações são fáceis e rápidas, promovendo a 
                máxima produtividade de todos os operadores. 
                <br><br>Otimize a gestão de operadores, fundo de maneio, aberturas, entradas, saídas e fecho de Caixa. 
                Com o TlimTM as operações são intuitivas, mas muito rigorosas do ponto de vista do controlo de Caixa.
            </p>
        </div>
        <div style="text-align: -webkit-center;">
            <img class="img-fluid" src="/img/solucoes/Tlim-2.png" alt="..." style="width: 25%"/>  
        </div>
        
    </div> 


    <div style="background-color: #b2b2b2; height: 850px; position: center; padding-top: 6.5%">        
            
        <div style="display: flex; justify-content: center; align-items: center">

            <div style="text-align: center; border-radius: 25px; background-color: white; padding-top: 2.5%; margin-right: 1%; width:25%; height:600px">
                <h5 style="font-size:30px; color: blue;"><b>TLIM EASY</b></h5>
                <h5 style="font-size:30px; color: #a4a3a5;"><b>1 ANO</b></h5>
                <h5 style="font-size:15px; color: black;"><b>PREÇO SOB CONSULTA</b></h5>

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">

                <ul style="text-align: left">
                    <li style="padding-top: 6%">Gestão exclusiva do ponto de venda</li>
                    <li style="padding-top: 6%">Limitado a 1 posto e 2 utilizadores</li>
                    <li style="padding-top: 6%">Atualizações legais e fiscais</li>
                </ul>

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;"> 

                <div class="botao_2 btn-center  botao_cor">
                    <a href="#" style="color: white;">
                        Estou Interessado/a
                    </a>
                </div>
            </div>

            <div style="text-align: center; border-radius: 25px; background-color: white; padding-top: 5%; margin-left: 1%; width:25%; height:600px">
                <div class="circle3" style="background-color: green;">
                    <div class="top-part"></div>
                    <p style="font-size:20px; color: white; padding-top: 4%"><b>RECOMENDADOS</b></p>
                </div>

                <h5 style="font-size:30px; color: blue;"><b>TLIM</b></h5>
                <h5 style="font-size:25px; color: #25006d;" hidden><b>2 ANOS</b></h5>
                <h5 style="font-size:15px; font-style:bond; color: black;"><b>PREÇO SOB CONSULTA</b></h5>
                
                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">                   
                
                <ul style="text-align: left;">
                    <li style="padding-top: 6%">Integra com o ERP e com soluções móveis</li>
                    <li style="padding-top: 6%">Sem limite de postos e utilizadores</li>
                    <li style="padding-top: 6%">Subscrição anual consoante o nº de postos</li>
                    <li style="padding-top: 6%">Atualizações legais e fiscais</li>
                </ul>                

                <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;"> 

                <div class="botao_2 botao_cor">
                    <a href="#" class="btn-center" style="color: white;">
                        Estou Interessado/a 
                    </a>
                </div>
            </div>

        </div>
            
        
    </div>  


@endsection