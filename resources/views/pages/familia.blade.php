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
            width: 300px;
            height: 50px;
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
        .small_screen_margin {
            margin-top: 3%;
        }

        @media screen and (max-width: 768px) { 
            .small_screen_margin {
                margin-top: 30%;
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
                        <h3 style="font-size: 55px; color: white" class="padding">FAÇA PARTE DA NOSSA FAMÍLIA</h3>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <div style="background-color: #f6f6f6;">
        <div class="small_screen_margin" style="text-align: -webkit-center;">
            <p style="font-size: 50px; color: blue">
                <b>BEM-VINDO(A) À ITANGOLA</b>
            </p>
            <img src="/img/Logo_IT.png" alt="Slide 1" style="padding: 3% 0; width: 20%">            
        </div> 
        
        <div class="text-left" style="padding: 2% 13%"> 
            <p class="text-justify" style="font-size: 25px; color: black">
                <b>Por que trabalhar connosco?</b><br>
                A IT-ANGOLA é uma empresa líder no setor de tecnologia de gestão empresarial e oferece uma série de benefícios aos 
                seus colaboradores. Nós valorizamos o talento, o crescimento profissional e o trabalho em equipe. Aqui estão alguns 
                motivos para você fazer parte da nossa equipe: 
            </p>
            
            <p class="text-justify" style="font-size: 25px; color: black">
                <b>1. Ambiente de Trabalho Inovador</b>
                Nosso ambiente de trabalho é inspirador e inovador, proporcionando o espaço necessário para você desenvolver suas 
                habilidades e criar soluções tecnológicas de ponta. 
            </p>  

            <p class="text-justify" style="font-size: 25px; color: black">
                <br><b>2. Oportunidades de Crescimento</b>
                Acreditamos no crescimento profissional dos nossos colaboradores. Oferecemos programas de treinamento e 
                desenvolvimento, além de oportunidades de ascensão na carreira. 
            </p>  
            <p class="text-justify" style="font-size: 25px; color: black">
                <br><b>3. Trabalho em Equipe Unida</b>
                A nossa equipe é unida e colaborativa. Valorizamos a diversidade, a troca de ideias e o trabalho em conjunto para 
                alcançar objetivos comuns.
            </p> 

            <p class="text-justify" style="font-size: 25px; color: black">
                <br><b>4. Cultura Organizacional Forte</b>
                Nossos valores fundamentam a cultura da empresa. Priorizamos a ética, a transparência, a responsabilidade social e o 
                respeito mútuo.
            </p>      
        </div>  
    </div> 
    
    <div style="background-color:rgb(21, 21, 21); padding-bottom: 1%;">
        <div class="text-center" style="color:white; padding-top: 3%;" id="recrutamento">  
            <h4 style="font-size: 40px; color:white"> CANDIDATURA </h4>
        </div>  

        <div class="container text-left">

            <form class="padding" style="padding-left:4rem !important; padding-right:6rem !important;" method="post" enctype="multipart/form-data">

                <div class="form-container" style="align-items: left; padding-top:5px">
                    <label for="name" style="padding-top: 1.5%; color:white">Nome:</label>
                    <input type="text" id="name" name="name" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="form-container" style="align-items: left; padding-top:20px">
                    <label for="email" style="padding-top: 1.5%; color:white">E-mail:</label>
                    <input type="email" id="email" name="email" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="form-container" style="align-items: left; padding-top:20px">
                    <label for="contacts" style="padding-top: 1.5%; color:white">Telefone:</label>
                    <input type="text" id="contacts" name="contacts" style="width: 100%; border: none; border-bottom: 1px solid black;">
                </div>
                <div class="form-container" style="align-items: left; padding-top:20px">
                    <label for="contacts" style="padding-top: 1.5%; color:white">Currículo (PDF):</label>
                    <input type="file"  id="imagem" name="imagem" accept="image/png, image/jpeg" style="color: white;" required>
                </div>                

                <div class="center-text" style="text-align: -webkit-left; padding-top: 3%">
                    <div class="botao_2 botao_cor text-center" style="background-color: blue;">
                        <a href="#" class="btn-center" style="color: white; font-size: 25px;">
                            Enviar
                        </a>
                    </div>
                </div>

            </form>   

        </div>
    </div>

        
@endsection