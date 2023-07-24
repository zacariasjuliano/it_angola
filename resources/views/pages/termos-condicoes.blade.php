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
                <p style="font-size: 50px; color: white" class="padding">TERMOS E CONDIÇÕES</p>
                <p style="font-size: 30px; color: white" class="padding" hidden>Com esta solução as contas estão sempre em dia</p>
            </div>
        </div>
        
    </div>

    <div style="background-color: #d5d5d5;">

        <div class="text-center" style="padding-top: 5%">
            <p style="font-size: 40px; color: blue">
                <b>Termos e condições do site</b>
            </p>
            <p style="font-size: 25px; color: black">
                Bem-vindo ao site www.it-angola.com. Ao acessar e utilizar este site, você concorda em cumprir os seguintes 
                termos e condições. Por favor, leia-os cuidadosamente antes de utilizar nosso site.
            </p>           
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                1. Uso do Site 1.1 Ao acessar e utilizar o site www.it-angola.com, você concorda em utilizá-lo apenas para 
                fins legais e de acordo com todas as leis e regulamentações aplicáveis. Você não deve usar o site de forma 
                que possa prejudicar, desabilitar, sobrecarregar ou comprometer a segurança do site ou interferir no seu 
                uso por terceiros. 
            </p>
            
            <p style="font-size: 25px; color: black">
                2. Propriedade Intelectual 2.1 O site www.it-angola.com e todo o seu conteúdo, incluindo textos, imagens, 
                gráficos, logotipos, ícones, áudio, vídeo e software, são protegidos por leis de direitos autorais, marcas 
                comerciais e outras leis de propriedade intelectual. 
            </p>  

            <p style="font-size: 25px; color: black">
                2.2 Todos os direitos de propriedade intelectual relacionados ao site e seu conteúdo pertencem ao IT Angola 
                ou aos seus licenciadores. Você não tem permissão para reproduzir, distribuir, modificar, exibir publicamente, 
                executar publicamente, transmitir ou utilizar de qualquer outra forma o conteúdo do site sem a autorização 
                prévia por escrito da IT Angola. 
            </p>  
            <p style="font-size: 25px; color: black">
                3. Links para Sites de Terceiros 3.1 O site www.it-angola.com pode conter links para sites de terceiros. 
                Esses links são fornecidos apenas para sua conveniência e não implicam em endosso ou garantia do IT Angola 
                em relação ao conteúdo desses sites de terceiros.
            </p> 

            <p style="font-size: 25px; color: black">
                3.2 A IT Angola não tem controle sobre os sites de terceiros e não se responsabiliza pelo conteúdo, práticas 
                de privacidade ou qualquer outra atividade desses sites. Recomendamos que você leia os termos e condições e a 
                política de privacidade de qualquer site de terceiros que você acessar através de links fornecidos em nosso site.
            </p> 
            <p style="font-size: 25px; color: black">
                4. Limitação de Responsabilidade 4.1 A IT Angola se esforça para fornecer informações precisas e atualizadas em 
                seu site, mas não oferece garantias quanto à precisão, integridade ou atualidade dessas informações. O uso do 
                site é por sua conta e risco.
            </p> 
            <p style="font-size: 25px; color: black">
                4.2 Em nenhuma circunstância a IT Angola será responsável por quaisquer danos diretos, indiretos, incidentais, 
                consequenciais ou punitivos decorrentes do uso ou da incapacidade de usar o site ou do acesso não autorizado 
                ou alteração de suas transmissões ou dados.
            </p> 

            <p style="font-size: 25px; color: black">
                5. Modificações dos Termos e Condições 5.1 a IT Angola se reserva o direito de modificar ou atualizar estes termos 
                e condições a qualquer momento, sem aviso prévio. As alterações entrarão em vigor imediatamente após sua publicação 
                no site.
            </p> 

            <p style="font-size: 25px; color: black">
                5.2 É responsabilidade do usuário revisar regularmente estes termos e condições para estar ciente de quaisquer 
                modificações. O uso contínuo do site após a publicação de alterações constitui aceitação dessas alterações.
            </p> 

            <p style="font-size: 25px; color: black">
                6. Lei Aplicável 6.1 Estes termos e condições são regidos e interpretados de acordo com as leis da República de Angola.
            </p> 
            
            <p style="font-size: 25px; color: black">
                6.2 Qualquer disputa decorrente ou relacionada ao uso do site www.it-angola.com será submetida à jurisdição exclusiva 
                dos tribunais da República de Angola. <br>Ao utilizar o site www.it-angola.com, você concorda com estes termos e 
                condições. Se você não concorda com estes termos, por favor, não utilize o site.
            </p>        
        </div>
                
    </div>    

        
@endsection