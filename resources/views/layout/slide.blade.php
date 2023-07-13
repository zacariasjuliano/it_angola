

<style>
    .carousel-control-prev,
    .carousel-control-next {
      width: 50px;
      height: 100%;
      /*background-color: rgba(14, 40, 189, 0.773);*/
      text-align: center;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      position: absolute;
      top: 50%;
      transform: translateY(-30%);
      width: 50px;
      height: 50px;
      background-color: blue;
      /*color: blue;*/
      border-radius: 50%;
    }
    
    .carousel-caption {
      /*background-color: rgba(0, 0, 0, 0.5);*/
      color: white;
      padding: 10px;
    }

    .carousel-center-text {
        position: absolute;
        top: 52%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

    .carousel-center-text1 {
        position: absolute;
        top: 77%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

    .circle {
        background-color: white;
        border-radius: 67px;
        width: 300px;
    }
</style>


<div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 5%">
    <!-- Indicadores -->
    <ol class="carousel-indicators rounded-circle">
        <li data-target="#carouselExample" data-slide-to="0" class="active" style="border-radius: 70%; width: 20px; height: 20px; background-color: blue;"></li>
        <li data-target="#carouselExample" data-slide-to="1" style="border-radius: 70%; width: 20px; height: 20px; background-color: blue;"></li>
        <li data-target="#carouselExample" data-slide-to="2" style="border-radius: 70%; width: 20px; height: 20px; background-color: blue;"></li>
    </ol>
    
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/Banner-alternativo1.jpg" alt="Slide 1">
        <div class="carousel-caption" hidden>
            <h3>Slide 1</h3>
            <p>Descrição do slide 1</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/Banner-alternativo1.jpg" alt="Slide 2">
        <div class="carousel-caption" hidden>
            <h3>Slide 2</h3>
            <p>Descrição do slide 2</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/Banner-alternativo1.jpg" alt="Slide 3">
        <div class="carousel-caption" hidden>
            <h3>Slide 3</h3>
            <p>Descrição do slide 3</p>
        </div>
        </div>
    </div>

    <!-- Texto central -->
    <div class="carousel-center-text">
        <p style="font-size: 30px; color: white">SOLUÇÕES PARA ESCRITÓRIOS DE CONTABILIDADE</p>
    </div>

    <div class="circle text-center carousel-center-text1 p-4 h-15 w-13" style="background-color: blue">        
        <a href="#" class="btn" style="color: white">
            Saber mais
        </a>
    </div>
    
    <!-- Botões de controle -->
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="padding-left: 15%;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next" style="padding-right: 15%;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
    
</div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    