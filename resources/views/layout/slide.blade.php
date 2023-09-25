

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

    .carousel-control-icon {
      position: absolute;
      top: 53%;
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
        width: 400px;
        height: 70px;
    }
</style>


<div id="carouselExample" class="carousel slide" data-ride="carousel" style="padding-top: 2.5%">
        
    <!-- Slides -->
    <div class="carousel-inner"  style="max-height: 920px;">
        <div class="carousel-item active">
            <div>
                <img src="/img/home/home.jpg" alt="Slide 1" width="100%">
                <div class="carousel-caption" hidden>
                    <h3>Slide 1</h3>
                    <p>Descrição do slide 1</p>
                </div>
            </div>

            <div hidden style="margin-top: 0%">
                <!-- Texto central -->
                <div class="carousel-center-text">
                    <h1 style="font-size: 30px; color: white">SOLUÇÕES PARA ESCRITÓRIOS DE CONTABILIDADE</h1>
                </div>
            </div>

        </div>            
        
    </div>            
    
</div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    