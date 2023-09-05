
    <style type="text/css">
        .subilinhado {
            width: 100%; border: none; border-bottom: 1px solid black; margin-left:3%;
        }
        .paragrafo_espacamento {
            padding-left: 3%; 
            margin-bottom: 0%;
        }      
        .botao_formulario {
            /*background-color: #ed0000;*/
            border-radius: 0px;
            width: 300px;
            height: 66px;
        }
    </style>

    <div class="container text-center" style="padding-top: 3%; padding-bottom: 5%; background-color:white; border-radius: 35px; width: 1408px; height: 880px">

        <form style="padding: 0 7%;" method="post" enctype="multipart/form-data">

            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 15px">
                <label for="name" style="font-size: 18px;" class="paragrafo_espacamento"><b>Nome</b>*</label>
                <input type="text" id="name" name="name" class="subilinhado">
            </div>
            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 50px">
                <label for="empresa" style="font-size: 18px;" class="paragrafo_espacamento"><b>Empresa</b>*</label>
                <input type="text" id="empresa" name="empresa" class="subilinhado">
            </div>
            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 50px">
                <label for="contacts" style="font-size: 18px;" class="paragrafo_espacamento"><b>Telefone</b>*</label>
                <input type="text" id="contacts" name="contacts" class="subilinhado">
            </div>
            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 50px">
                <label for="email" style="font-size: 18px;" class="paragrafo_espacamento"><b>Email</b>*</label>
                <input type="email" id="email" name="email" class="subilinhado">
            </div>
            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 50px">
                <label for="cargo" style="font-size: 18px;" class="paragrafo_espacamento"><b>Cargo</b>*</label>
                <input type="text" id="cargo" name="cargo" class="subilinhado">
            </div>
            <div class="col-lg-12 col-md-4" style="text-align: left; padding-top: 50px">
                <label for="message" style="font-size: 18px;" class="paragrafo_espacamento"><b>Mensagem</b>*</label>
                <textarea name="message" id="message" class="subilinhado" style="width: 920px; margin-left: 3%;" placeholder="" rows="4" cols="4"></textarea>                    
            </div>
            <div class="col-lg-6 col-md-4" style="display: flex; align-items: center; padding-top: 10px; padding-left: 4.5%;">
                <input type="checkbox" id="aceito" name="aceito" style="border: none; border-bottom: 1px solid black;">
                <label for="aceito" style="display: flex; align-items: center; padding-left: 3.5%; padding-top: 1%;">Li e concordo com as <span style="color: blue; padding-left: 6px;"> Política de Privacidade</span></label>                    
            </div>
            
            <div class="center-text" style="padding: 3% 0 0 2.7%">
                <div class="botao_formulario botao_formulario_cor" style="text-align: -webkit-left;">
                    <a href="#" class="btn-center" style="color: white; font-size: 25px; text-align: -webkit-cnter;">
                        Enviar
                    </a>
                </div>
            </div>

        </form>            
    </div>

