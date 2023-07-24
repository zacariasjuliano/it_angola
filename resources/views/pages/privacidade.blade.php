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
                <p style="font-size: 50px; color: white" class="padding">PRIVACIDADE</p>
                <p style="font-size: 30px; color: white" class="padding" hidden>Com esta solução as contas estão sempre em dia</p>
            </div>
        </div>
        
    </div>

    <div style="background-color: #d5d5d5;">

        <div class="text-center" style="padding-top: 5%">
            <p style="font-size: 40px; color: blue">
                <b>Política de privacidade de uso de dados</b>
            </p>
            <p style="font-size: 25px; color: black">
                <b>Última atualização: 03/07/2023</b>
            </p>           
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                Agradecemos por visitar o website www.it-angola.com. Estamos comprometidos em proteger a sua privacidade e em 
                garantir a segurança dos seus dados pessoais. Esta Política de Privacidade de Uso de Dados 
                ("Política de Privacidade") explica como coletamos, usamos, compartilhamos e protegemos as informações que 
                você nos fornece ao utilizar o nosso Website.<br> Ao utilizar o Website, você concorda com os termos e condições 
                estabelecidos nesta Política de Privacidade. Caso não concorde com estes termos, por favor, não utilize o Website. 
            </p>  

            <p style="font-size: 25px; color: black">
                <b>1. INFORMAÇÕES COLETADAS </b>
                <br>1.1. Informações fornecidas por você: Ao utilizar o Website, podemos coletar informações pessoais que você nos 
                fornece voluntariamente, como nome, endereço de e-mail, número de telefone, entre outras. Essas informações são 
                necessárias para fornecer os serviços solicitados por você e para melhorar a sua experiência no Website. 
            </p>  
            <p style="font-size: 25px; color: black">
                <b>1.2. Informações coletadas automaticamente:</b>
                <br>Quando você acessa o Website, podemos coletar automaticamente informações não identificáveis, como endereço IP, 
                tipo de navegador, provedor de serviços de Internet, páginas visitadas, data e hora de acesso, entre outras. Essas 
                informações são coletadas para fins de análise estatística e para melhorar o desempenho e a segurança do Website.
            </p> 

            <p style="font-size: 25px; color: black">
                <b>2. USO DAS INFORMAÇÕES COLETADAS</b>
                <br>2.1. Utilização interna: As informações coletadas podem ser utilizadas para melhorar e personalizar a sua 
                experiência no Website, fornecer os serviços solicitados por você, responder a suas perguntas e solicitações, enviar 
                notificações relevantes, melhorar a segurança do Website e cumprir com obrigações legais.
            </p> 
            <p style="font-size: 25px; color: black">
                <b>2.2. Compartilhamento de informações:</b>
                <br> Não compartilhamos suas informações pessoais com terceiros, exceto quando necessário para cumprir com obrigações 
                legais ou com o seu consentimento prévio. Podemos compartilhar informações não identificáveis com parceiros de negócios 
                para fins de análise e marketing.
            </p> 
            <p style="font-size: 25px; color: black">
                <b>2.3. Cookies e tecnologias similares:</b>
                <br>Utilizamos cookies e tecnologias similares para coletar informações sobre a sua interação com o Website. Essas 
                informações nos ajudam a melhorar a funcionalidade e a personalização do Website. Você pode gerenciar suas preferências 
                de cookies por meio das configurações do seu navegador.
            </p> 

            <p style="font-size: 25px; color: black">
                <b>3. PROTEÇÃO DAS INFORMAÇÕES</b>
                <br>Adotamos medidas técnicas e organizacionais adequadas para proteger as informações coletadas contra acesso não 
                autorizado, uso indevido, alteração ou destruição. No entanto, é importante ressaltar que nenhum método de transmissão 
                pela Internet ou método de armazenamento eletrônico é totalmente seguro. Portanto, não podemos garantir a segurança 
                absoluta das suas informações.
            </p> 

            <p style="font-size: 25px; color: black">
                <b>4. LINKS PARA SITES DE TERCEIROS</b>
                <br>O Website pode conter links para sites de terceiros. Esta Política de Privacidade se aplica somente ao Website, e 
                não somos responsáveis pelas práticas de privacidade desses sites. Recomendamos que você leia as políticas de privacidade 
                de terceiros antes de fornecer suas informações pessoais.
            </p> 

            <p style="font-size: 25px; color: black">
                <b>5. ATUALIZAÇÕES DESTA POLÍTICA DE PRIVACIDADE</b>
                <br>Podemos atualizar esta Política de Privacidade de tempos em tempos. Recomendamos que você revise regularmente esta 
                página para estar ciente de quaisquer alterações. A data de atualização mais recente será indicada no início deste 
                documento.
            </p> 
            
            <p style="font-size: 25px; color: black">
                <b>6. CONTATO</b>
                <br>Caso tenha alguma dúvida ou preocupação em relação a esta Política de Privacidade, entre em contato connosco através 
                do seguinte endereço de e-mail: marketin@it-angola.com de +244 944908829. Ao utilizar o Website, você reconhece que leu, 
                entendeu e concorda com os termos desta Política de Privacidade. Agradecemos pela confiança depositada em nós e nos 
                comprometemos a proteger a sua privacidade e a garantir o uso adequado dos seus dados pessoais.
            </p>        
        </div>
                
    </div>    

        
@endsection