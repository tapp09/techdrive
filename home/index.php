<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/carhome.css">
    <link rel="stylesheet" href="./assets/css/geral.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/lancamentos.css">
    <link rel="stylesheet" href="./assets/css/videohome.css">
    <link rel="stylesheet" href="./assets/css/rodape.css">
    <link rel="stylesheet" href="./assets/css/techlive.css">
    <link rel="stylesheet" href="./assets/css/faleconosco.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Roboto:wght@700&display=swap" rel="stylesheet">

    


    <title>TechMotors</title>
</head>

<body>


    <!-- teste botão-->
    <button class="botao" onclick="abrirFaleConosco()">Fale Conosco</button>
    <div class="box-questions" id="box-questions">
        <div class="header">
            <div class="img-chat"></div>
          <div class="text-chat">
            <h3 class="nome-chat">Fale Conosco</h3>
            <h5 class="status-chat">Tempo de Resposta: Aprox. 1 minuto</h3>
          </div>
          <button class="fechar" onclick="fecharFaleConosco()"> X </button>
        </div>
        <h5 id="status"></h5>
        <div id="history">
          <!-- respostas do playground -->
        </div>
        <div class="footer">
                <input type="text" id="message-input" placeholder="Qual sua dúvida?">
                <button class="btn-submit" id="btn-submit" onclick="sendMessage()">Enviar</button>
        </div>
      </div>
    <!-- final botao-->

   <!--Menu-->
    <section class="navbar">
        <nav>
            <div class="logo">
                <img src="./assets/images/logo.png"  width="80px"/>
            </div>
            <div class="navtools">
                <ul>
                    <li><a class="selected" href="">Inicio</a></li>
                    <li><a href="">Modelos</a></li>
                    <li><a href="">Compre Agora</a></li>
                    <li><a href="">Nossa Marca</a></li>
                </ul>
            </div>
            <div class="accounttools">
                <ul>
                    <li><a onclick="openCadastForm()" class="nav__links caixa__cadastro">Cadastro</a></li>
                    <li><a onclick="openLoginForm()" class="nav__links caixa__login">Login</a></li>
                </ul>
            </div>
        </nav>
    <!-- Final do Menu-->

        <!--PopUp Login-->
        <div id="loginForm" class="modal">
            <div class="modalcont">
              <span class="close" onclick="closeLoginForm()">&times;</span>
              <h2>Login</h2>
                <form method="POST" target="_blank" action="index.html"  >
                    <div class="caixa__login-input">
                        <input name="email" type="text" required />
                        <label>Email</label>
                    </div>
                    <div class="caixa__login-input">
                        <input name="senha"type="password" required />
                        <label>Senha</label>
                    </div>
                    <a href="submit" value="acessar">
                       
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Acessar
                    </a>
                </form>
            </div>
        </div>   

        <div id="CadastroForm" class="modal">
            <div class="modalcont2">
              <span class="close" onclick="closeCadastForm()">&times;</span>
              <h2>Cadastre-se</h2>
                <form method="post" target="_blank" action="inserir.php"  >
                    <div class="inputs">
                        <div class="caixa__cadastro-input">
                            <input id="nome" name="name" type="text" required />
                            <label>Nome Completo</label>
                        </div>
                        <div class="caixa__cadastro-input">
                            <input id="cpf" name="CPF" oninput="mascara(this)" type="text" required>
                            <label>CPF</label>
                        </div> 
                    </div>
                    <div class="inputs">
                        <div class="caixa__cadastro-input">
                            <input id="email" name="email" type="email" required/>
                            <label for="email">Email</label>
                        </div>
                        <div class="caixa__cadastro-input">
                            <input id="senha" name="senha" type="password" size="60" required />
                            <label for="senha">Senha</label>
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="caixa__cadastro-input">
                            <input id="cep" name="cep" type="text" required value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"/>
                            <label for="cep">CEP</label>
                        </div>
                        <div class="caixa__cadastro-input">
                            <input id="rua" name="rua" type="text" size="60" required />
                            <label for="rua">Rua</label>
                        </div>
                    </div>
                    
                    <div class="inputs">
                        <div class="caixa__cadastro-input">
                            <input id="cidade" name="cidade" type="text" size="40" required />
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="caixa__cadastro-input">
                            <input id="bairro" name="bairro" type="text" size="40" required />
                            <label for="bairro">Bairro</label>
                        </div>
                    </div>
                    <div class="input1">
                        <div class="caixa__cadastro-input">
                            <input id="uf" name="uf" type="text" size="2" required />
                            <label for="uf">Estado</label>
                        </div>
                    </div>
                        
                    
                    <a href="submit" value="acessar">
                       
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Finalizar Cadastro
                    </a>
                    <br/>
                    <div class="buttons">
                        <a href="submit" value="Excluir">
                        
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Excluir
                        </a>
                        <a href="submit" value="alterar">
                        
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Alterar
                        </a>
                        <a href="submit" value="Inserir">
                        
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Inserir
                        </a>
                        <a href="submit" value="Pesquisar">
                        
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Pesquisar
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>    
    </section>
        <!--Final PopUp Login-->    

        <!--BackGround Video-->    
    <section class="videohome">
        <video autoplay loop muted>
            <source src="./assets/video/pik.mp4" type="video/mp4" />
        </video>
        <!--Final BackGround Video--> 

        <!--BackGround Texto-->    
        <div class="textvideo">
            <div class="conj">
                <!--Efeito texto digitação--> 
            <div class="textopad">
                <h2><span>B</span><span>e</span><span>m</span>
                    <span>V</span><span>i</span><span>n</span><span>d</span><span>o</span></h2>
            </div>
            <div class="textoani">
                <h1></h1>
            </div></div>
            
            <p>
            </p>
            <!--Final Efeito texto digitação--> 

            <!--Efeito Botão Background--> 
            <a class="button_home" href="#">
                <span class="top-key"></span>
                <span class="text">Comprar Agora</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <!--Efeito Botão Background--> 
        </div>
    </section>
    <!--Final BackGround-->    

    <!--Seção Lançamentos --> 
    <section class="car-home">
            <div class="two-cars">
                <div class="car-home1">
                    <div class="car-home-txt">
                        <p>BMW I4. Perfomance M, 100% energia solar.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="car-home2">
                    <div class="car-home-txt">
                        <p>Lamborghini Urus. 100% energia solar.</p>
                        <a href="#">Saiba Mais</a>  
                        
                    </div>
                </div>
            </div>
    </section>
    <!--Final Seção Lançamentos --> 


    <section class="lancamentos">
        <div class="sl1" id="sl1">
            <div class="text-lancamento">
                <h2 class="lanc-title2">A VIDA EM UM <br>NOVO ESTILO</h2>
                <button class="button-lanc">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Explore me
                  </button>

                  <div class="radio-input">
                    <input value="value-1" name="value-radio" id="value-1" type="radio" onclick="trocarimagem('porsche.png');">
                    <label for="value-1" class="label">INFINITY</label>
                    <input value="value-2" name="value-radio" id="value-2" type="radio" onclick="trocarimagem('camaro.png');">
                    <label for="value-2" class="label">SUFFICE</label>
                    <input value="value-3" name="value-radio" id="value-3" type="radio" onclick="trocarimagem('carropp.png');">
                    <label for="value-3" class="label">ECLIPSE</label>
            </div>
            </div>
        </div>
    </section>

    <!--Tech Live-->
    <section class="techlive">
        <div class="tech">
            <main class="principal">
                <div class="title">
                    <h2>Tech Live</h2>
                </div>
                <section class="galeria">
                    <figure class="itemGaleria item01">
                        <video src="./assets/video/vid1.mp4" autoplay loop muted preload="auto"></video>
                    </figure>

                    <!--COMEÇO IMAGEM CARRO 2-->
                    <figure class="itemGaleria item02">
                        <img src="./assets/images/img2.jpg" alt="Imagem 02" class="imgGaleria">
                    </figure>
                    <!--FINAL IMAGEM CARRO 2-->


                    <figure class="itemGaleria item03">
                        <img src="./assets/images/img6.PNG" alt="Imagem 03" class="imgGaleria">
                    </figure>
                    <figure class="itemGaleria item04">
                        <img src="./assets/images/img3.PNG" alt="Imagem 04" class="imgGaleria">
                    </figure>
                    <figure class="itemGaleria item05">
                        <video src="./assets/video/vid2.mp4" autoplay loop muted preload="auto"></video>
                    </figure>
                    <figure class="itemGaleria item06">
                        <img src="./assets/images/img5.PNG" alt="Imagem 06" class="imgGaleria">
                    </figure>


                    <!--COMEÇO IMAGEM CARRO 7-->
                    <figure class="itemGaleria item07">
                        <img src="./assets/images/img7.jpg" alt="Imagem 07" class="imgGaleria">
                    </figure>
                    <!--fINAL IMAGEM CARRO 7-->


                </section>
            </main>
        </div>
    </section>

    <!-- Seção Rodapé-->
    <section class="foot">
        <div class="rodape">
            <footer>
                <div class="rod1">
                    <div class="c1">
                        <div class="c1-title">
                            <h2>Contato</h2>
                        </div>
                        <div class="c1-links">
                            <a href="#">Fale com a TechDrive</a>
                            <a href="#">Carreiras</a>
                            <a href="#">Visita à Fábrica</a>
                        </div>
                    </div>
                    <div class="c1">
                        <div class="c1-title">
                            <h2>Meu Carro</h2>
                        </div>
                        <div class="c1-links">
                            <a href="#">Modelos e Preços</a>
                            <a href="#">Seguro</a>
                            <a href="#">Autoinsights</a>
                            <a href="#">Autopago</a>
                        </div>
                    </div>
                    <div class="c1">
                        <div class="c1-title">
                            <h2>Tech ConnectedDrive</h2>
                        </div>
                        <div class="c1-links">
                            <a href="#">Fale conosco</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                    <div class="c1">
                        <div class="c1-title">
                            <h2>Informações Legais</h2>
                        </div>
                        <div class="c1-links">
                            <a href="#">Política de Cookies</a>
                            <a href="#">Política de Privacidade</a>
                            <a href="#">Manual de Segurança</a>
                            <a href="#">Informações Legais</a>
                        </div>
                    </div>
                </div>
                <div class="rod2">
                    <div class="nome">© TECHMOTORS GROUP Brasil 2023</div>
                    <div class="redessociais">
                        <div class="icon">
                            <a href="#">
                                <img src="./assets/images/whats.png" alt="" width="40px">
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                               <img src="./assets/images/youtube.png" alt="" width="40px"> 
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                                <img src="./assets/images/face.png" alt="" width="40px">
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                                <img src="./assets/images/twitter.png" alt="" width="40px">
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                              <img src="./assets/images/insta.png" alt="" width="40px">  
                            </a>
                        </div>
                    </div>
                </div>
                
            </footer>
        </div>
    </section>





    <script src="./assets/js/efeito-home-brilho.js" ></script>
    <script src="./assets/js/pop.js" ></script>
    <script src="./assets/js/faleconosco.js"></script>
    <script src="./assets/js/cpf.js"></script>
    <script src="./assets/js/endereço.js"></script>
    <script src="./assets/js/jquery-3.6.4.min.js"></script>
    <script src="./assets/js/trocaimagem.js"></script>
</body>
</html>