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
                        <h3 style="font-size: 60px; color: white" class="padding">TERMOS E CONDIÇÕES</h3>
                    </div>
                </div>
            </div>
        </div>    
    </div>    

    <div style="background-color: #fbf8f8;">
        <div class="text-center small_screen_pa">
            <h5 class="small_screen_p" style="color: blue">
                <b>Termos e condições do site</b>
            </h5>          
        </div> 
        
        <div class="text-justify" style="padding: 2% 13%"> 
            <p class="small_screen_paragrah" style="color: black; line-height: 50px;">
                Bem-vindo ao site www.it-angola.com. Ao acessar e utilizar este site, você concorda em cumprir os seguintes 
                termos e condições. Por favor, leia-os cuidadosamente antes de utilizar nosso site.
            </p>

            <ol style="list-style-position: outside; list-style-position: outside; margin-left: -22px;">
                <li style="font-size: 20px; padding-left: 40px;">
                    <b>USO DO SITE</b> <br>                    
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">1.1</b>Ao acessar e utilizar o site www.it-angola.com, você concorda em utilizá-lo apenas para 
                    fins legais e de acordo com todas as leis e regulamentações aplicáveis. Você não deve usar o site de forma 
                    que possa prejudicar, desabilitar, sobrecarregar ou comprometer a segurança do site ou interferir no seu 
                    uso por terceiros.
                </p>                     
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">1.2</b> Você é responsável por garantir que todas as informações fornecidas por você sejam precisas, atualizadas e 
                    completas. Você concorda em não fornecer informações falsas ou enganosas neste site.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>PROPRIEDADE INTELECTUAL</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">2.1</b> O site www.it-angola.com e todo o seu conteúdo, incluindo textos, imagens, 
                    gráficos, logotipos, ícones, áudio, vídeo e software, são protegidos por leis de direitos autorais, marcas 
                    comerciais e outras leis de propriedade intelectual.
                </p>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">2.2</b> Todos os direitos de propriedade intelectual relacionados ao site e seu conteúdo pertencem ao IT Angola 
                    ou aos seus licenciadores. Você não tem permissão para reproduzir, distribuir, modificar, exibir publicamente, 
                    executar publicamente, transmitir ou utilizar de qualquer outra forma o conteúdo do site sem a autorização 
                    prévia por escrito da IT Angola. 
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>LINKS PARA SITES DE TERCEIROS</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">3.1</b> O site www.it-angola.com pode conter links para sites de terceiros. 
                    Esses links são fornecidos apenas para sua conveniência e não implicam em endosso ou garantia do IT Angola 
                    em relação ao conteúdo desses sites de terceiros.
                </p>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">3.2</b> A IT Angola não tem controle sobre os sites de terceiros e não se responsabiliza pelo conteúdo, práticas 
                    de privacidade ou qualquer outra atividade desses sites. Recomendamos que você leia os termos e condições e a 
                    política de privacidade de qualquer site de terceiros que você acessar através de links fornecidos em nosso site.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;"> 
                    <b>LIMITAÇÕES DE RESPONSABILIDADE</b>
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">4.1</b> A IT Angola se esforça para fornecer informações precisas e atualizadas em 
                    seu site, mas não oferece garantias quanto à precisão, integridade ou atualidade dessas informações. O uso do 
                    site é por sua conta e risco.
                </p>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">4.2</b> Em nenhuma circunstância a IT Angola será responsável por quaisquer danos diretos, indiretos, incidentais, 
                    consequenciais ou punitivos decorrentes do uso ou da incapacidade de usar o site ou do acesso não autorizado 
                    ou alteração de suas transmissões ou dados.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>MODIFICAÇÕES DOS TERMOS E CONDIÇÕES</b> 
                </li>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">5.1</b> IT Angola se reserva o direito de modificar ou atualizar estes termos 
                    e condições a qualquer momento, sem aviso prévio. As alterações entrarão em vigor imediatamente após sua publicação 
                    no site.
                </p>
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">5.2</b> É responsabilidade do usuário revisar regularmente estes termos e condições para estar ciente de quaisquer 
                    modificações. O uso contínuo do site após a publicação de alterações constitui aceitação dessas alterações.
                </p>
                <br>

                <li style="font-size: 20px; padding-left: 40px;">
                    <b>LEI APLICÁVEL</b> 
                </li>            
                <p style="font-size: 18px; color: black; margin-left: -1.5%; line-height: 35px;">
                    <b style="padding-right: 2%">6.1</b>
                    Qualquer disputa decorrente ou relacionada ao uso do site www.it-angola.com será submetida à jurisdição exclusiva 
                    dos tribunais da República de Angola. <br>Ao utilizar o site www.it-angola.com, você concorda com estes termos e 
                    condições. Se você não concorda com estes termos, por favor, não utilize o site.
                </p>

            </ol>      
        </div> 
    </div>    

        
@endsection