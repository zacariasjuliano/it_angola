
<style type="text/css">
    .nav_bar_it {
        margin-top: 0.55rem;
        margin-left: -56.5rem; 
        min-width: 118rem;
    }

    /* styles.css */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        background-color: #333;
        padding: 10px;
        color: white;
    }
    .logo a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2rem;
    }
    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
    }
    .nav-links li a {
        color: white;
        text-decoration: none;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        align-items: center;
        justify-content: center;
    }
    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 0px;
    }
    .close {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 20px;
        cursor: pointer;
    }
</style> 

    
<nav class="row fixed-top background-white" id="mainNav" style="padding-top: 0.5%;">

    <div class="col-md-2" style="margin-left: 5%">
        <a style="color: rgb(67, 87, 160);" class="navbar-brand" href="/">
            <img src="/img/Logo_IT.png" alt="..." style="width: 65%" />                   
        </a>
    </div>

    <div class="col-md-8">        
        <div class="col-md-12 text-right" style="margin-top: 1%; margin-left:30%">

            <div class="navbar-expand-lg" id="navbarResponsive">
                <ul class="navbar-nav">

                    <li class="nav-item"><a style="margin-right: 25px;" class="nav-link" href="/"><b>HOME</b></a></li>

                    <li class="nav-item dropdown" style="margin-right: 25px;" id="openModalBtn">
                        <a class="nav-link" style="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>SOLUÇÕES</b>
                        </a>
                        <div id="myModal" class="modal">
                            <div class="modal-content" style="margin-top: 4%; background-color: #008cff">
                                <span hidden class="close" id="closeModalBtn">&times;</span>

                                <div class="row" style="padding-left: 5%">                                           
                                    <div class="col-lg-4 col-md-2" style="text-align: left; color:white; font-size: 23px; flex: 0 0 15.0%">
                                        <b>SOFTWARES</b>
                                        <div class="vertical-line" style="border-right: 1px solid rgb(251, 251, 251); height: 150px;">
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px;" href="/consultoria">CEGID PRIMAVERA ERP</a>
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 1%; font-size: 20px;" href="/cacimbo">SOFTWARE CACIMBO ERP</a>
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 1%; font-size: 20px;" href="/phc">SOFTWARE PHC CS</a>
                                        </div>
                                    </div> 

                                    <div class="col-lg-4 col-md-2" style="text-align: left; color: white; font-size: 23px; flex: 0 0 15.0%">
                                        <b>ASSIDUIDADE</b>
                                        <div class="vertical-line" style="border-right: 1px solid rgb(251, 251, 251); height: 150px;">
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px" href="/logicpulse">LOGICPULSE</a>
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px" href="/kelio">KELIO</a>
                                        </div>
                                    </div>  

                                    <div class="col-lg-4 col-md-2" style="text-align: left; color: white; font-size: 23px; flex: 0 0 15.0%">
                                        <b>DISPERÇÃO DE AVES</b>
                                        <div class="vertical-line" style="border-right: 1px solid rgb(251, 251, 251); height: 150px;">
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px" href="/bird_tab">BIRD  TAB - Scarecrow B.I.R.B</a>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-4 col-md-2" style="text-align: left; color: white; font-size: 23px; flex: 0 0 15.0%">
                                        <b>ASSISTENCIAS TÉCNICA</b>
                                        <div class="vertical-line" style="border-right: 1px solid rgb(251, 251, 251); height: 150px;">
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px" href="/desenvolvimento">Desenvolvimento de Sistemas</a>
                                            <a class="dropdown-item" style="color: white; margin-left: -4%; padding-top: 3%; font-size: 20px" href="/software">Software a medida</a>
                                        </div>
                                    </div>                          
                                </div>
                                
                            </div>
                        </div>
                    </li>                            

                    <li class="nav-item"><a style="margin-right: 25px;" class="nav-link" href="/sobre"><b>SOBRE NÓS</b></a></li>

                    <li class="nav-item"><a style="background-color: blue; color: white" class="nav-link" href="/contactos"><b>CONTACTO</b></a></li>

                </ul>
            </div>

        </div>  
    </div>      
    
</nav>



<script> 
    // scripts.js
    const openModalBtn = document.getElementById("openModalBtn");
    //const closeModalBtn = document.getElementById("closeModalBtn");
    const modal = document.getElementById("myModal");

    openModalBtn.addEventListener("click", () => {
        modal.style.display = "block";
    });

    /*
    closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });
    */ 


    // SERVICOS
    const openModalServicos = document.getElementById("openModalServicos");
    //const closeModalServicos = document.getElementById("closeModalServicos");
    const modalServicos = document.getElementById("myModalServicos");

    openModalServicos.addEventListener("click", () => {
        modalServicos.style.display = "block";
    });

    /*
    closeModalServicos.addEventListener("click", () => {
        modalServicos.style.display = "none";
    });  
    */  
    
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            if (modal.style.display === "none") {
                modal.style.display = "block";
            }
            else {
                modal.style.display = "none";
            }
        }

        if (event.target === modalServicos) {
            modalServicos.style.display = "none";
        }
    });  
    
</script> 

