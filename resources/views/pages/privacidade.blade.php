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
        }
        .circle3 {
            width: 356px;
            height: 8%;
            position: absolute;
            top: 120.9%;
            left: 51%;
            border-radius: 12.5% 12.5% 0 0;
            transform: skewY(0deg);
        }
        .circle4 {
            width: 356px;
            height: 8%;
            position: absolute;
            top: 120.9%;
            left: 25.6%;
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
        }
        ::marker {
            font-family: fantasy;
        }
        .small_screen_pa {
            padding-top: 3%;
        }
        .small_screen_p {
            font-size: 45px;
        }
        .small_screen_paragrah {
            font-size: 25px;
        }

        @media screen and (max-width: 768px) {
            .small_screen_pa {
                padding-top: 30%;
            }
            .small_screen_p {
                font-size: 35px;
            }
            .small_screen_paragrah {
                font-size: 20px;
            }
        }
    </style>
    

    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <img src="/img/pages/img-20.png" alt="Slide 1" style="width: 100%">                
                </div>
            
                <div style="margin-top: 0%">
                    <div class="carousel-center-text" style="text-align: -webkit-center;">
                        <h3 style="font-size: 60px; color: white" class="padding">PRIVACIDADE</h3>
                    </div>
                </div>
            </div>
        </div>    
    </div>    

    <div style="background-color: #fbf8f8;">
        <div class="text-center small_screen_pa">
            <h5 class="small_screen_p" style="color: blue">
                <b>Política de privacidade de uso de dados</b>
            </h5>
            <p class="small_screen_paragrah" style="color: black; padding-top: 3%">
                <b>Última atualização: 03/07/2023</b>
            </p>           
        </div> 
        
        <div class="text-justify" style="padding: 2% 13%"> 
            <p class="small_screen_paragrah" style="color: black; line-height: 50px;">
                Agradecemos por visitar o website www.it-angola.com. Estamos comprometidos em proteger a sua privacidade e em 
                garantir a segurança dos seus dados pessoais. Esta Política de Privacidade de Uso de Dados 
                ("Política de Privacidade") explica como coletamos, usamos, compartilhamos e protegemos as informações que 
                você nos fornece ao utilizar o nosso Website.<br> Ao utilizar o Website, você concorda com os termos e condições 
                estabelecidos nesta Política de Privacidade. Caso não concorde com estes termos, por favor, não utilize o Website. 
            </p>

            <ol style="list-style-position: outside; list-style-position: outside; margin-left: -22px;">
                <li style="font-size: 20px; padding-left: 40px;">
                    <b>INFORMAÇÕES COLETADAS</b> <br>                    
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    1.1. Informações fornecidas por você: Ao utilizar o Website, podemos coletar informações pessoais que você nos 
                    fornece voluntariamente, como nome, endereço de e-mail, número de telefone, entre outras. Essas informações são 
                    necessárias para fornecer os serviços solicitados por você e para melhorar a sua experiência no Website. 
                </p>                     
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b>1.2. Informações coletadas automaticamente:</b>
                    <br>Quando você acessa o Website, podemos coletar automaticamente informações não identificáveis, como endereço IP, 
                    tipo de navegador, provedor de serviços de Internet, páginas visitadas, data e hora de acesso, entre outras. Essas 
                    informações são coletadas para fins de análise estatística e para melhorar o desempenho e a segurança do Website.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>USO DAS INFORMAÇÕES COLETADAS</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    2.1. Utilização interna: As informações coletadas podem ser utilizadas para melhorar e personalizar a sua 
                    experiência no Website, fornecer os serviços solicitados por você, responder a suas perguntas e solicitações, enviar 
                    notificações relevantes, melhorar a segurança do Website e cumprir com obrigações legais.
                </p> 

                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;"><b>2.2. Compartilhamento de informações:</b>
                    Não compartilhamos suas informações pessoais com terceiros, exceto quando necessário para cumprir com obrigações 
                    legais ou com o seu consentimento prévio. Podemos compartilhar informações não identificáveis com parceiros de negócios 
                    para fins de análise e marketing.
                </p>
                
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;"><b>2.3. Cookies e tecnologias similares:</b>
                    Utilizamos cookies e tecnologias similares para coletar informações sobre a sua interação com o Website. Essas 
                    informações nos ajudam a melhorar a funcionalidade e a personalização do Website. Você pode gerenciar suas preferências 
                    de cookies por meio das configurações do seu navegador.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>PROTEÇÃO DAS INFORMAÇÕES</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    Adotamos medidas técnicas e organizacionais adequadas para proteger as informações coletadas contra acesso não 
                    autorizado, uso indevido, alteração ou destruição. No entanto, é importante ressaltar que nenhum método de transmissão 
                    pela Internet ou método de armazenamento eletrônico é totalmente seguro. Portanto, não podemos garantir a segurança 
                    absoluta das suas informações.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;"> 
                    <b>LINKS PARA SITES DE TERCEIROS</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    O Website pode conter links para sites de terceiros. Esta Política de Privacidade se aplica somente ao Website, e 
                    não somos responsáveis pelas práticas de privacidade desses sites. Recomendamos que você leia as políticas de privacidade 
                    de terceiros antes de fornecer suas informações pessoais.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>ATUALIZAÇÕES DESTA POLÍTICA DE PRIVACIDADE</b> 
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    Podemos atualizar esta Política de Privacidade de tempos em tempos. Recomendamos que você revise regularmente esta 
                    página para estar ciente de quaisquer alterações. A data de atualização mais recente será indicada no início deste 
                    documento.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>CONTATO</b> 
                </li>            
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    Caso tenha alguma dúvida ou preocupação em relação a esta Política de Privacidade, entre em contato connosco através 
                    do seguinte endereço de e-mail: marketin@it-angola.com de +244 944908829. Ao utilizar o Website, você reconhece que leu, 
                    entendeu e concorda com os termos desta Política de Privacidade. Agradecemos pela confiança depositada em nós e nos 
                    comprometemos a proteger a sua privacidade e a garantir o uso adequado dos seus dados pessoais.
                </p>

            </ol>      
        </div>  
    </div>    

        
@endsection