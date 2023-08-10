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
            width: 600px;
            height: 66px;
        }
        .botao_cor {
            background-color: blue; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 0%;
            margin-top: 9%;
            margin-left: 0%; 
        }
        .circle3 {
            width: 314px;
            height: 5%;
            position: absolute;
            top: 293.5%;
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
            background-color: #ff6900; 
            color: black;
            border-radius: 25px 0 0 25px;  
            transform: skewY(0deg);
        }
    </style>
 

    <div style="background-color: white; position: relative; padding: 13% 0%">
        
        <div class="container" style="max-width: 1400px;">
            
            <div style="display: flex;">
                <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;">
                    <h3 style="font-size: 61px; color: blue;">
                        Software ERP Evolution, a revolução tecnológica para a sua pequena empresa!
                    </h3> 
                    <h6 style="font-size: 20px; color: black; padding-top: 2.5%">
                        <b> FACTURAÇÃO, GESTÃO COMERCIAL E GESTÃO DO NEGÓCIO </b> 
                    </h6>  
                </div>
                
                <div style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/evolution/1.png" alt="..." style="width: 95%"/>  
                </div>
            </div>
            
        </div>
        
    </div>


    <div style="background-color: rgb(220, 220, 220); position: relative; padding: 1.5% 0%">
        
        <div class="container" style="max-width: 1400px;">
            
            <div style="display: flex;">                
                <div style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/evolution/2.png" alt="..." style="width: 55%; transform: rotate(25deg);"/>  
                </div>

                <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;">
                    <h3 style="font-size: 61px; color: blue;">
                        Destrave o Potencial da Sua Empresa
                    </h3> 
                    <h6 style="font-size: 20px; color: black; padding-top: 2.5%">
                        A sua pequena empresa possui um potencial incrível, mas para alcançar o sucesso é 
                        necessário contar com a tecnologia certa. O Software ERP Evolution é a chave para 
                        destravar todo o potencial oculto do seu negócio. Deixe a sua concorrência para 
                        trás e comece a sua jornada rumo ao crescimento e a prosperidade.
                    </h6>  

                    <a href="#" class="botao_2 btn-center botao_cor" style="color: white; position: relative; display: flex; justify-content: center;">
                        Quero Destravar o Potencial da Minha Empresa!
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>


    <div style="background-color: rgb(30, 30, 122); position: relative; padding: 0% 0%">
        
        <div class="container" style="max-width: 1400px;">
            
            <div style="display: flex; max-width: 1400px;"> 

                <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;">
                    <h3 style="font-size: 61px; color: white;">
                        Torne a sua Empresa Mais Produtiva
                    </h3> 
                    <h6 style="font-size: 20px; color: white; padding-top: 2.5%">
                        Tempo é dinheiro, e com o ERP Evolution, você poderá aumentar a produtividade da sua equipe e 
                        optimizar os seus processos internos. Com recursos avançados de gestão e automação, você verá 
                        a sua empresa a decolar e a colher os frutos de um trabalho mais eficiente.
                    </h6>  

                    <ul style="font-size: 20px; color: white;">
                        <li>Rapidez nos processos de venda (ao balcão ou outros)</li>
                        <li>Simplicidade de gestão de caixa, preços e vendedores</li>
                        <li>Facilidade na gestão de clientes e contas correntes</li>
                    </ul>

                    <a href="#" class="botao_2 btn-center botao_cor" style="color: white; position: relative; display: flex; justify-content: center;">
                        Quero Aumentar a Produtividade da Minha Empresa!
                    </a>
                </div>   

                <div style="flex: 1; text-align: -webkit-center; padding-top: 13%;">
                    <img class="img-fluid" src="/img/evolution/3.png" alt="..." style="width: 89%"/>  
                </div>
            </div>
            
        </div>
        
    </div>


    <div style="background-color: rgb(251, 251, 251); position: relative; padding: 6% 0%">
        
        <div class="container" style="max-width: 1400px;">
            
            <div style="display: flex;">                
                <div style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/evolution/4.png" alt="..." style="width: 95%"/>  
                </div>

                <div style="flex: 1; text-align: -webkit-left; padding-top: 3%;">
                    <h3 style="font-size: 61px; color: blue;">
                        Controle Total do seu Stock e do Inventário!
                    </h3> 
                    <h6 style="font-size: 20px; color: black; padding-top: 2.5%">
                        Descubra a chave para otimizar os seus processos internos e conquistar uma gestão empresarial 
                        mais precisa e eficiente. Com o stock, você terá em suas mãos uma ferramenta poderosa para 
                        controlar a inventariação a receção e expedições de artigos, a gestão de reservas, as encomendas 
                        de clientes e as transferências entre armazéns, para evitar desperdícios e maximizar o seus lucros. <br>
                        Diga adeus às incertezas e alavanque o seu negócio para um novo patamar de sucesso. experimente 
                        agora e transforme a forma como você gerencia o seu inventário!
                    </h6>  
                </div>
            </div>
            
        </div>
        
    </div>
    

    <div style="background-color: rgb(30, 30, 122); position: relative; padding: 6% 0%">
        
        <div class="container" style="max-width: 1400px;">
            <h3 class="text-center" style="font-size: 55px; color: white;">
                Sinta a Transformação Tecnológica em seu Negócio
            </h3> 

            <h5 style="font-size: 20px; color: white;">
                O mercado evolui constantemente, e a sua empresa também precisa acompanhar essa mudança. O Software Evolution
                traz a mais recente inovação e tecnologia de ponta para o seu negócio. com funcionalidades avançadas e atualizações
                constantes, você estará preparado para enfrentar qualquer desafio tomando as decições certas com base no
            </h5>
            
            <div style="display: flex;">                
                <div style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/evolution/5.png" alt="..." style="width: 95%"/>  
                </div>

                <div style="flex: 1; text-align: -webkit-left; padding-top: 6%;">
                    <ul style="color: white;">
                        <li style="font-size: 25px;">Resultados das vendas</li>
                        <li style="font-size: 25px;">Top 5 de clientes</li>
                        <li style="font-size: 25px;">Melhores artigos</li>
                        <li style="font-size: 25px;">Análise por secções</li>
                        <li style="font-size: 25px;">Melhores vendedores</li>
                        <li style="font-size: 25px;">Relatórios à medida</li>
                    </ul>
                </div>
            </div>            

            <div style="justify-content: center;">  
                <a href="#" class="botao_2 btn-center botao_cor" style="color: white; position: relative; display: flex; justify-content: center;">
                    Quero Transformar Meu Negócio com a Inovação do Software Evolution!
                </a>
            </div> 
            
        </div>
        
    </div>


    <section class="section padding" style="background-color: rgb(246, 246, 246);">
        <div class="padding" style="margin-top: 6%;">
            <div class="text-center" style="padding-bottom: 4%">
                <h3 class="section-subheading" style="color:black; font-size:45px;  padding-left: 10%; padding-right: 10%;">
                    Ganhe produtividade e promova a evolução do seu negócio
                </h3>
            </div>

            <div style="display: flex;">                
                <div class="padding" style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/home/Camada-3.png" alt="..." style="height: 13%; display: inline;"/>
                                
                    <h4 class="my-3" style="color:#29598d;"><b>Dê resposta obrigações fiscais</b></h4>
                    <h4 class="my-3" style="color:black; text-align: -webkit-left;">
                        Usufrua de um software de faturação certificado, que cumpre todas os requisitos 
                        fiscais e é atualizado sempre que há novas regras.
                    </h4>
                </div>
                
                <div class="padding" style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/home/Camada-4.png" alt="..." style="height: 13%; display: inline"/>
                                
                    <h4 class="my-3" style="color:#29598d;"><b>Pague à medida que usa</b></h4>
                    <h4 class="my-3" style="color:black; text-align: -webkit-left;">
                        Reduza o valor de investimento. aceda a um erp de referência em subscrição, 
                        ou seja, paga em cómodas anuidades, à medida que usa.
                    </h4>
                </div>
                
                <div class="padding" style="flex: 1; text-align: -webkit-center;">
                    <img class="img-fluid" src="/img/home/Camada-1.png" alt="..." style="height: 10%; display: inline;"/>
                                
                    <h4 class="my-3" style="color:#29598d;"><b>Atualizações contínuas</b></h4>
                    <h4 class="my-3" style="color:black; text-align: -webkit-left;">
                        Tenha ao seu lado os melhores automatismos de apoio à gestão com este
                        software de gestão comercial que evolui continuamente.
                    </h4>
                </div>
            </div>
           
        </div>
    </section>



    <section class="section padding" style="background-color: white">
        <div class="padding" style="margin-top: 6%;">
            <div class="text-center" style="padding-bottom: 4%">
                <h3 class="section-subheading" style="color:blue; font-size:50px;  padding-left: 10%; padding-right: 10%;">
                    Escolha a opção que se ajustar às suas necessidades
                </h3>
            </div>

            <div style="display: flex;">                
                <div class="padding" style="flex: 1; text-align: -webkit-center; background-color: #e1e1e1;">
                    <h5 style="font-size:30px; color: blue;"><b>Essentials</b></h5>
                    <h5 style="font-size:30px; color: blue;"><b>1 utilizador e 1 empresa</b></h5>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>UTILIZADORES E EMPRESAS</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Utilizadores incluídos: 1 </li>
                        <span>Utilizadores adicionais</span>
                        <li style="padding-top: 6%">Empresas incluídas: 1</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO DE VENDAS & CLIENTES</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Vendas</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO LOGÍSTICA</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Inventário </li>
                        <span>Inventário Avançado (lotes, dimensões, números de série, localizações, etc.) Encomendas</span>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>RGPD</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Personal Data Manager </li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>EXTENSIBILIDADE & API</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Extensibilidade (campos, mapas, tabelas e menus de utilizadores)</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>APOIO DE UTILIZAÇÃO</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Suporte Remoto</li>
                        <li style="padding-top: 6%">Suporte Presencial</li>
                        <li style="padding-top: 6%">Formação</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: black;"><b>PREÇO SOB CONSULTA</b></h5>
                </div>
                
                <div class="padding" style="flex: 1; text-align: -webkit-center; background-color: #e1e1e1;">
                    <h5 style="font-size:30px; color: blue;"><b>Standard</b></h5>
                    <h5 style="font-size:30px; color: blue;"><b>No máximo 2 tilizadores e 1</b></h5>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>UTILIZADORES E EMPRESAS</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Utilizadores incluídos: 1 </li>
                        <span>Utilizadores adicionais</span>
                        <li style="padding-top: 6%">Empresas incluídas: 1</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO DE VENDAS & CLIENTES</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Vendas</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO LOGÍSTICA</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Inventário </li>
                        <span>Inventário Avançado (lotes, dimensões, números de série, localizações, etc.) Encomendas</span>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>RGPD</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Personal Data Manager </li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>EXTENSIBILIDADE & API</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Extensibilidade (campos, mapas, tabelas e menus de utilizadores)</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>APOIO DE UTILIZAÇÃO</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Suporte Remoto</li>
                        <li style="padding-top: 6%">Suporte Presencial</li>
                        <li style="padding-top: 6%">Formação</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: black;"><b>PREÇO SOB CONSULTA</b></h5>
                </div>
                
                <div class="padding" style="flex: 1; text-align: -webkit-center; background-color: #e1e1e1;">
                    <h5 style="font-size:30px; color: blue;"><b>Plus</b></h5>
                    <h5 style="font-size:30px; color: blue;"><b>No máximo 3 utilizadores e 3 empresas</b></h5>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>UTILIZADORES E EMPRESAS</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Utilizadores incluídos: 1 </li>
                        <span>Utilizadores adicionais</span>
                        <li style="padding-top: 6%">Empresas incluídas: 1</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO DE VENDAS & CLIENTES</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Vendas</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>GESTÃO LOGÍSTICA</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Inventário </li>
                        <span>Inventário Avançado (lotes, dimensões, números de série, localizações, etc.) Encomendas</span>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>RGPD</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Personal Data Manager </li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>EXTENSIBILIDADE & API</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Extensibilidade (campos, mapas, tabelas e menus de utilizadores)</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: blue;"><b>APOIO DE UTILIZAÇÃO</b></h5>
                    <ul style="text-align: left">
                        <li style="padding-top: 6%">Suporte Remoto</li>
                        <li style="padding-top: 6%">Suporte Presencial</li>
                        <li style="padding-top: 6%">Formação</li>
                    </ul>

                    <hr style="width: 100%; color: black; border-top: 1.5px solid black; transform: translateX(-18%); margin-left: 85px;">
                    <h5 style="font-size:30px; color: black;"><b>PREÇO SOB CONSULTA</b></h5>
                </div>
            </div>
           
        </div>
    </section>


    <div style="margin-bottom: 5%; margin-top: 3%">

        <div style="padding: 2.5% 7%">   
            <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">

                <div class="card-deck mb-3">
                    <div class="card mb-4 padding">                    
                        <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Nome</b>*</label>
                        <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                    </div>

                    <div class="card mb-4 padding">                    
                        <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Email</b>*</label>
                        <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">  
                    </div>                          
                </div> 

                <div class="card-deck mb-3">
                    <div class="card mb-4 padding">                    
                        <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Telefone/Telemóvel</b>*</label>
                        <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                    </div>

                    <div class="card mb-4 padding">                    
                        <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Empresa</b>*</label>
                        <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">  
                    </div>                          
                </div> 

                <div class="card-deck mb-3">
                    <div class="card mb-4 padding">                    
                        <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>NIF</b>*</label>
                        <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                    </div>

                    <div class="card mb-4 padding">                    
                        <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Ramo de actividade</b>*</label>
                        <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">  
                    </div>                          
                </div> 

                <div class="card-deck mb-3">
                    <div class="card mb-4 padding">                    
                        <label for="name" style="padding-top: 1.5%; font-size: 18px;"><b>Cargo</b>*</label>
                        <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                    </div>

                    <div class="card mb-4 padding">                    
                        <label for="email" style="padding-top: 1.5%; font-size: 18px;"><b>Nº de colaboradores</b>*</label>
                        <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">  
                    </div>                          
                </div>

                <div class="card-deck mb-3">
                    <div class="card mb-4 padding" >                    
                        <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                        <label for="aceito" style="display: flex; align-items: center; padding-left: 1.5%; padding-top: 1%;">Li e Aceito a Política de Privacidade</label>                    
                    </div>

                    <div class="card mb-4 padding">         
                        
                    </div>                          
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