<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./resources/images/favicon.ico" />
    <!-- above meta tag is required when writing responsive design -->
    <title>Roberto Carneiro Paes | Portfolio de Roberto</title>

    <link
      href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./vendors/css/grid.css" />
    <link rel="stylesheet" href="./vendors/css/animate.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="./resources/css/styles.css" />
    <link rel="stylesheet" href="./resources/css/queries.css" />
  </head>

  <body>
    <header id="header">
      <nav>
        <div class="row">
          <img
            class="logo"
            src="./resources/images/myAvatar_fill.png"
            alt="avatar do roberto"
          />
          <a href="#header"
            ><img
              class="logo-blk"
              src="./resources/images/myAvatar.png"
              alt="avatar of antony-small"
          /></a>
          <ul class="main-nav js--main-nav">
            <li><a href="#features">Sobre mim</a></li>
            <li><a href="#skills">Habilidades</a></li>
            <li><a href="#portfolio-section">Portfólio</a></li>
            <li><a href="#contactMe">Contato</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon">
            <ion-icon name="menu" class="responsive-nav"></ion-icon>
          </a>
          <!-- it is good practice to have navigation items in the form of a list
                    an unordered list -->
                    
        </div>
      </nav>
      <div class="hero-text-box">
        <h1 class="name__title">Eu sou Roberto Paes</h1>
        <p class="name__subtitle">Um <span>desenvolvedor</span> aspirante</p>
    
        <a class="btn btn-full" href="#portfolio-section">Veja meu trabalho</a>
        <a class="btn btn-ghost" href="#features">explore mais</a>
        <!-- we are including class names starting with 'js-' to indicate that these classes
                are used for jQuery -->
      </div>
    </header>

    <section class="features-section js-features-section" id="features">
      <div class="row">
        <h2>Olá. Eu sou Roberto. Prazer em conhecê-lo.</h2>
        <p class="long-copy">
        Eu sou autodidata. Moro no Rio de janeiro, Brasil. Fui introduzido ao mundo da programação em 2012, através do Minecraft e o seu glorioso mundo de blocos. Desde então sou apaixonado por resolver problemas computacionais.<br />
        </p>
      </div>
      <!-- animation for waypoint 1 -->
      <div class="row js-wpt-1">
        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="infinite"></ion-icon>
          <h3 class="about-me-title">Energia criativa</h3>
          <p>
            A energia que me move é o meu fascínio por resolver problemas cada vez mais interessantes. A minha curiosidade pela resposta sempre me tira da inércia. 
          </p>
        </div>

        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="stopwatch"></ion-icon>
          <h3 class="about-me-title">Resolver problemas</h3>
          <p>
           Eu gosto de um desafio.  Vou dar o melhor de mim. Mas caso meu conhecimento adquirido ao longo do tempo não seja o suficiente, não hesitarei em pedir ajuda.
          </p>
        </div>

        <div class="col span-1-of-4 box">
            <ion-icon class="feature-icons" name="people"></ion-icon>
          <h3 class="about-me-title">Comunicação</h3>
          <p>
          Eu entendo o papel fundamental da comunicação no desenvolvimento de softaware. E darei o meu melhor para atender as demandas solicitadas criteriosamente.
          </p>
        </div>

        <div class="col span-1-of-4 box">
          <ion-icon class="feature-icons" name="school"></ion-icon>
          <h3 class="about-me-title">Eterno Aprendiz</h3>
          <p>
         Estou sempre disposto a ouvir.  Ser <span class="quote">desenvolvedor</span> significa se reinventar sempre que for necessário. Isso inclui sempre estar disposto a aprender algo novo.
            
              
          </p>
        </div>
      </div>
    </section>

    <section class="quotes-section">
      <div class="row">
        <blockquote>
          Desenvolver é como uma receita de bolo. Você escolhe seu ingrediente, e eu faço o bolo.
        </blockquote>
      </div>
    </section>

    <section id="skills">
      <div class="row">
        <h2>Habilidades</h2>
      </div>
      <table class="row skill-table">
        <tr>
          <td>
            <table class="skill-col-1">
              <tr class="skill-row">
                <td>C#</td>
             
              </tr>
          
              <tr class="skill-row">
                <td>Php</td>
             
              </tr>

              <tr class="skill-row">
                <td>Python</td>
              
              </tr>
   <tr class="skill-row">
                <td>C++</td>
             
              </tr>
           
              <tr class="skill-row">
                <td>Java</td>
         
              </tr>
         
  <tr class="skill-row">
                <td>JavaScript</td>
            
              </tr>
              <tr class="skill-row">
                <td>NodeJs</td>
           
              </tr>

              
            </table>
          </td>
          <td>
            <table class="skill-col-2">
            <tr class="skill-row">
                <td><h2>Infraestrutura</h2></td>
            
              </tr>
              <tr class="skill-row">
                <td>Docker</td>
            
              </tr>
              <tr class="skill-row">
                <td>Google servers</td>
            
              </tr>
              <tr class="skill-row">
                <td>Amazon WS</td>
            
              </tr>
            
            
            </table>
          </td>
          <td>
            <table class="skill-col-1">

              <tr class="skill-row">
                <td>MySql</td>
            
              </tr>
              <tr class="skill-row">
                <td>MongoDB</td>
            
              </tr>
   
            
            </table>
          </td>
        </tr>
      </table>
    </section>

    <section id="portfolio-section">
      <div class="row">
        <h2>Projetos</h2>
      </div>
      <ul class="flex-container tier1">
        <li>
          <a href="https://displaybuttons.com" target="_blank">
            <figure>
              <img
                src="./resources/images/artgraphic.png"
                title="Display Buttons App"
                alt="display buttons"
              />
            </figure>
          </a>
        </li>
  
      </ul>
    </section>

    <section class="quotes-section">
      <div class="row">
        <blockquote>
        Nada me deixa mais empolgado do que construir um conceito a partir de uma ideia
          para um sistema totalmente funcional.
        </blockquote>
      </div>
    </section>

    <section id="contactMe" class="contact-form-section">
      <div class="form-box" id="form">
        <div class="row">
          <h2 class="contact__header">Eu quero ouvir de você</h2>
        </div>
        <div class="row form-tier">
          <form action="mailer.php" method="POST" class="contact-form">
            
          <div class="row">
              
              <?php

                if($_GET["success"] == 1) {
                  echo "<div class=\"form-message success\">Obrigado! sua mensagem foi enviada.</div>";
                }
                if($_GET["success"] == -1) {
                  echo "<div class=\"form-message error\">Eita, alguma coisa deu errado.</div>";
                }
              ?>
          </div>
              

            <div class="row">
              <div class="col span-1-of-3">
                <label for="username">Nome</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  id="name"
                  type="text"
                  name="name"
                  placeholder="Escreva seu nome"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="useremail">E-mail</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  type="email"
                  id="useremail"
                  name="email"
                  placeholder="Escreva seu e-mail"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="message">Mensagem</label>
              </div>
              <div class="col span-2-of-3">
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="5"
                  placeholder="Sua mensagem aqui"
                  required
                ></textarea>
              </div>
            </div>

            <div class="row form-action-buttons">
              <div class="col span-1-of-3">
                <label for="form-submit-btn">&nbsp;</label>
              </div>
              <div class="col span-2-of-3">
                <input
                  id="form-submit-btn"
                  type="submit"
                  value="Enviar!"
                  class="btn btn-full"
                />
                <a
                  href="https://robertocpaes.dev"
                  target="_blank"
                  class="resume-btn resume-btn-full"
                >
                  Resumir
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <nav>
        <div class="row">

          <ul class="footer-nav-left">
            <li>
              <a href="https://github.com/brutalzinn"
              target="_blank"
                ><ion-icon name="logo-github" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
            <li>
              <a href="mailto:contato@robertocpaes.dev"
              target="_blank"
                ><ion-icon name="mail" class="footer-icons"></ion-icon></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row">
          <img
          class="footer-logo"
          src="./resources/images/myAvatar_fill.png"
          alt="avatar of antony roshan"
        />
        <div>
          <h3 class="quote__footer">
          Viver, aprender e subir de nível um dia de cada vez.
          </h3>
        </div>
        <p>
        Portfólio de Roberto Paes<br />
          Copyright &copy; 2020
        </p>
      </div>
    </footer>

    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./vendors/js/jquery.waypoints.min.js"></script>
    <script src="./resources/js/scripts.js"></script>
  </body>
</html>

<!-- 
Semantic HTML elements    

header
section
main
footer
nav 
figure - is also a container that can contain an image and also a caption for the image (figcaption)
-->
