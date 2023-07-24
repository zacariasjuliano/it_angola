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
            height: 60px;
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
            top: 423.5%;
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
    </style>


    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
            
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/pages/img-20.png" alt="Slide 1">                
            </div>

            <div class="carousel-center-text" style="text-align: -webkit-center;">
                <p style="font-size: 40px; color: white" class="padding">RESPONSABILIDADE SOCIAL</p>
            </div>
        </div>
        
    </div>

    <div style="background-color: white; margin: 10% 0%;">

        <div class="text-center" style="margin-top: 3%;">
            <p style="font-size: 50px; color: blue">
                <b>Nós e a Comunidade</b>
            </p>            
        </div> 
        
        <div class="text-left" style="padding: 2% 15%"> 
            <p style="font-size: 25px; color: black">
                <b>1. Parceria com a comunidade:</b> Na IT-Angola, acreditamos que é nosso dever contribuir para 
                o desenvolvimento sustentável das comunidades onde actuamos. Estabelecemos parcerias estratégicas 
                com organizações locais, como escolas e instituições de caridade, para apoiar projetos educacionais, 
                melhorar a infraestrutura e promover o acesso à tecnologia. Estamos comprometidos em criar um 
                impacto positivo e duradouro na vida das pessoas.
            </p> 
            <p style="font-size: 25px; color: black">
                <b>2. Sustentabilidade ambiental:</b> Como empresa de tecnologia, reconhecemos nossa responsabilidade em 
                proteger o meio ambiente. Implementamos medidas para reduzir nossa pegada de carbono, como o uso de 
                energias renováveis, a promoção do teletrabalho e a gestão eficiente de resíduos. Além disso, incentivamos 
                nossos colaboradores a adotarem práticas sustentáveis em seu cotidiano. Juntos, estamos a construir um 
                futuro mais verde.
            </p>
            <p style="font-size: 25px; color: black">
                <b>3. Inclusão e diversidade:</b> Na IT-Angola, valorizamos a diversidade e a inclusão em nosso ambiente de trabalho. 
                Nosso compromisso é proporcionar igualdade de oportunidades para todos os colaboradores, independentemente de sua 
                origem étnica, gênero, orientação sexual ou qualquer outra característica pessoal. Promovemos uma cultura de respeito 
                e valorização das diferenças, pois acreditamos que a diversidade impulsiona a inovação e o crescimento.
            </p>
            <p style="font-size: 25px; color: black">
                <b>4. Voluntariado corporativo: </b> Acreditamos que cada um de nós tem a capacidade de fazer a diferença. Por isso, 
                incentivamos nossos colaboradores a se engajarem em atividades de voluntariado.
            </p>
            <p style="font-size: 25px; color: black">
                5. Organizamos programas e eventos em parceria com organizações sociais, oferecendo oportunidades para que nossos 
                colaboradores dediquem seu tempo e habilidades a causas relevantes. Juntos, estamos construindo uma sociedade 
                mais solidária.
            </p>
            <p style="font-size: 25px; color: black">
                <b>6. Ética e transparência: </b> A IT-Angola é comprometida com os mais altos padrões éticos e de governança 
                corporativa. Agimos de forma transparente em nossas operações e nos relacionamentos com clientes, fornecedores e 
                demais partes interessadas. Nosso código de conduta orienta todas as nossas ações, garantindo a integridade e a 
                confiança em todas as nossas atividades. Estamos empenhados em agir com responsabilidade e promover a ética nos negócios.
            </p>
            <p style="font-size: 25px; color: black">
                Esses são apenas alguns exemplos de como a IT-Angola se envolve em responsabilidade social. Estamos comprometidos 
                em causar um impacto positivo em nossa comunidade e no mundo ao nosso redor.
            </p>
        </div>
    </div>

        
@endsection