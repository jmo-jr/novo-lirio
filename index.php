<?php
  if(isset($_GET['sent'])) {
    $return = $_GET['sent'];
  } else {
    $return = 0;
  }

  if($return == 1) {
    $msg = "Mensagem enviada com sucesso!";
  } else {
    $msg = "Opa, deu algo errado! Tente novamente mais tarde.";
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colégio Lírio dos Vales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <section class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-2">
          <div class="logo">
            <a href="index.html">
              <img src="images/logo-clv.png" alt="Colégio Lírio dos Vales">
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-10">
          <nav class="main-nav navbar navbar-expand-lg">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav">
                  <li><a href="a-escola.html">A Escola</a></li>
                  <li><a href="#turmas">Turmas</a></li>
                  <li><a href="#projetos">Projetos</a></li>
                  <li><a href="#fotos">Fotos</a></li>
                  <!-- <li><a href="">Informativo</a></li> -->
                  <li><a href="#contato">Contato</a></li>
                  <li><a class="graphite-link" href="http://grafiteweb.infocraft.com.br/lirio" target="_blank">Grafite</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="hero-section">
    
    <!-- Image Carousel -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="7000">
          <img id="sl1" src="images/banner2024.jpeg" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img id="sl1" src="images/hero-slide-1.jpeg" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img id="sl1" src="images/hero-slide-3.jpeg" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próxima</span>
      </button>
    </div>
    <!-- end Image Carousel -->

  </section>

  <section class="destaques">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="hilite-item">
            <div class="hilite-image round-image orange-border">
              <div class="principios"></div>
            </div>
            <h3 class="orange-text">Educação por Princípios</h3>
            <div class="hilite-text">Formação integral a partir de uma cosmovisão bíblica.</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="hilite-item">
            <div class="hilite-image round-image green-border">
              <div class="cientifica"></div>
            </div>
            <h3 class="green-text">Iniciação Científica</h3>
            <div class="hilite-text">Desenvolvimento de análise crítica, pensamento lógico e interesse pela pesquisa científica.</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="hilite-item">
            <div class="hilite-image round-image red-border">
              <div class="valores"></div>
            </div>
            <h3 class="red-text">Valores</h3>
            <div class="hilite-text">Estímulo ao espírito de cooperação, solidariedade e respeito mútuo.</div>
          </div>
        </div>
      </div>
    </div>
    <a id="turmas"></a>
  </section>

  <section class="turmas">
    <div class="container">
      <h2>Turmas</h2>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="classes-item">
            <div class="classes-item_image infantil">
              <iframe class="video-frame" src="https://www.youtube.com/embed/NjcxG7dpmsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h3>Educação Infantil</h3>
            <div class="classes-item_text">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
              et dolore magna.
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="classes-item">
            <div class="classes-item_image">
              <iframe class="video-frame" src="https://www.youtube.com/embed/WkxyfO0lxiY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h3>Ensino Fundamental</h3>
            <div class="classes-item_text">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
              et dolore magna.
            </div>
          </div>
        </div>
      </div>
    </div>
    <a id="projetos"></a>
  </section>

  <section class="projetos">
    <div class="container">
      <h2>Nossos Projetos</h2>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="card">
              <!-- <img class="card-img-top"> -->
              <!-- Image Carousel -->
              <div id="carouselProject1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="4000">
                    <img id="pj13" src="images/13.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj14" src="images/14.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj15" src="images/15.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj16" src="images/16.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj17" src="images/17.png" alt="">
                  </div>
                </div>
              </div>
              <!-- end Image Carousel -->
              <div class="card-body">
                <h5 class="card-title">O Incrível Universo da Biologia</h5>
                <div class="card-text">A Criação apresenta exuberantes recursos para pesquisa e, por isso, o 2° ano estuda uma fagulha dos incríveis animais e plantas da natureza. Tal riqueza e magnificência nos revela Aquele que é Senhor da infinita e perfeita capacidade criativa.</div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="card">
              <!-- Image Carousel -->
              <div id="carouselProject2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="4000">
                    <img id="pj7" src="images/7.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj8" src="images/8.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj9" src="images/9.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj10" src="images/10.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj11" src="images/11.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj12" src="images/12.jpeg" alt="">
                  </div>
                </div>
              </div>
              <!-- end Image Carousel -->
              <div class="card-body">
                <h5 class="card-title">Filosofest</h5>
                <div class="card-text">Filosofest é a festa da sabedoria, um momento único para nossos alunos expressarem seus dons e talentos através dos princípios da filosofia do céu, a Bíblia Sagrada, que é a PALAVRA de Deus.</div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="card">
              <!-- Image Carousel -->
              <div id="carouselProject3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="4000">
                    <img id="pj1" src="images/1.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj2" src="images/2.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj3" src="images/3.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj4" src="images/4.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj5" src="images/5.png" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img id="pj6" src="images/6.png" alt="">
                  </div>
                </div>
              </div>
              <!-- end Image Carousel -->
              <div class="card-body">
                <h5 class="card-title">Brincando e Cantando</h5>
                <div class="card-text">As crianças aprendem brincando, cantando, dançando e atuando. A brincadeira, aliada à música, torna-se uma ferramenta extraordinária nos muitos aspectos do desenvolvimento da criança.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a id="fotos"></a>
  </section>

  <section class="galeria">
    <div class="container">
      <h2 class="white-text">Galeria</h2>
      <div class="woxo-container" loading="lazy" data-mc-src="093d8b0c-792a-4316-a26a-d0965e675c0a#instagram"></div>
    </div>
  </section>

  <section class="depoimentos">
    <div class="container">
      <h2>Depoimentos</h2>
      <div class="testimonials-slide">
        <div class="testimonials-container">
          <div id="carouselTestimonials" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- 01 -->
              <div class="carousel-item active" data-bs-interval="4000">
                <div class="testimonials-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-4">
                      <div class="testimonial-image round-image">
                        <img src="images/depoimento1.jpeg" alt="">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <h3>Sabedoria, fé e alegria!</h3>
                      <p>Somos gratos a Deus pela existência do Colégio Lírio dos Vales, que há 20 anos tem desenvolvido um trabalho sério e inspirador na vida de muitos alunos e famílias. Temos a honra e alegria de nossa filha Ester estudar há 7 anos nessa instituição, que tem feito diferença em tempos tão desafiadores e em constantes mudanças. O que determinou a nossa escolha pela escola foi a proposta pedagógica fundamentada nos princípios cristãos que desenvolve o raciocínio também através de fundamentos bíblicos.</p>
                      <h5>Nivaldo & Kesia Rios</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 02 -->
              <div class="carousel-item" data-bs-interval="4000">
                <div class="testimonials-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-4">
                      <div class="testimonial-image round-image">
                        <img src="images/depo-2.jpeg" alt="">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <h3>Boas recordações e princípos para a vida</h3>
                      <p>"O Colégio Lírio dos Vales é muito especial, aqui eu brinco e aprendo de forma muito legal". Esse trecho da música do Lírio traduz a minha infância nessa instituição, na qual aprendi a valorizar a educação, a respeitar a cidadania, o próximo e, acima de tudo, valorizar os princípios em que a família me criou. A experiência no Lírio dos Vales é diferente, a equipe te abraça em todos os momentos, aqueles que são felizes e tristes. Tive a honra de ser um dos primeiros alunos e hoje certamente tenho orgulho de tudo que a escola me deixou: amigos de infância que são quase irmãos; princípios; educação e valores. Caminhei com a Lírio dos Vales por todos os anos que ela pôde me oferecer e foram inesquecíveis.</p>
                      <h5>Gabriel Duarte, estudante de Medicina</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 03 -->
              <div class="carousel-item" data-bs-interval="4000">
                <div class="testimonials-item">
                  <div class="row">
                    <div class="col-sm-12 col-md-4">
                      <div class="testimonial-image round-image">
                        <img src="images/depo-3.jpeg" alt="">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <h3>Olhar integral da criança</h3>
                      <p>Nós escolhemos a Lírio dos Vales quando conhecemos seu olhar sobre a criança como ser integral, isso significa perceber que existem outras necessidades além de desenvolver-se cognitivamente. Valores como a Verdade, Amor, Respeito e Responsabilidade são vividos no dia a dia, nas aulas, nas diversas programações e nos relacionamentos e vão sendo entranhados naturalmente junto com o conteúdo. Mas o que mais me apaixona, além de ver meus filhos descobrindo e aprendendo com qualidade, é acompanhar o seu crescimento no conhecimento de Deus, ter sua fé trabalhada de forma lúdica e, ao mesmo tempo, tratada com a seriedade que sua importância exige.</p>
                      <h5>Lívia</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually">Próxima</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <a id="contato"></a>
  </section>

  <section class="contato">
    <div class="form-container">
      <h2 class="white-text">Fale Conosco</h2>
      <p class="white-text">Envie-nos sua dúvida, crítica ou sugestão e lhe responderemos o quanto antes.</p>
      <?php 
        if (!empty($msg)) {
          echo '<p class="text-success">$msg</p>';
        } 
      ?>
      <form method="post">
        <input type="text" name="name" class="text-input" placeholder="Seu nome">
        <input type="text" name="e-mail" class="text-input" placeholder="Seu e-mail">
        <textarea name="message" class="text-area" cols="30" rows="10" placeholder="Sua mensagem"></textarea>
        <input type="submit" name="send" value="Enviar" class="btn btn-warning submit-btn">
      </form>
    </div>
  </section>

  <footer class="main-footer">
    <div class="footer-container">
      <div class="row">

        <div class="col-sm-12 col-md-6" style="align-self:center">
          <div class="bottom-logo">
            <img src="images/logo-clv.png" alt="Colégio Lírio dos Vales">
          </div>
        </div>

        <div class="company-info col-sm-12 col-md-6">
          <div class="address-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="21.333" viewBox="0 0 16 21.333">
              <path id="Icon_awesome-map-marker-alt" data-name="Icon awesome-map-marker-alt"
                d="M7.178,20.9C1.124,12.126,0,11.226,0,8A8,8,0,0,1,16,8c0,3.226-1.124,4.126-7.178,12.9a1,1,0,0,1-1.644,0ZM8,11.333A3.333,3.333,0,1,0,4.667,8,3.333,3.333,0,0,0,8,11.333Z" />
            </svg>
            <div class="address">Rua Érico Sophia Brandão, 292<br>
              Parque Getúlio Vargas, Feira de Santana/BA</div>
          </div>
          <div class="tel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
              <path id="Icon_material-local-phone" data-name="Icon material-local-phone"
                d="M7.718,11.424a13.465,13.465,0,0,0,5.858,5.858l1.956-1.956a.884.884,0,0,1,.907-.213,10.14,10.14,0,0,0,3.173.507.891.891,0,0,1,.889.889v3.1a.891.891,0,0,1-.889.889A15.11,15.11,0,0,1,4.5,5.389.892.892,0,0,1,5.389,4.5H8.5a.892.892,0,0,1,.889.889A10.1,10.1,0,0,0,9.9,8.562a.892.892,0,0,1-.222.907Z"
                transform="translate(-4.5 -4.5)" />
            </svg>
            (75) 3625-4080</div>
          <div class="mail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12.8" viewBox="0 0 16 12.8">
              <path id="Icon_material-email" data-name="Icon material-email"
                d="M17.4,6H4.6A1.6,1.6,0,0,0,3.008,7.6L3,17.2a1.6,1.6,0,0,0,1.6,1.6H17.4A1.6,1.6,0,0,0,19,17.2V7.6A1.6,1.6,0,0,0,17.4,6Zm0,3.2-6.4,4-6.4-4V7.6l6.4,4,6.4-4Z"
                transform="translate(-3 -6)" />
            </svg>
            colegiolirio@hotmail.com</div>
          <div class="wa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
              <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp"
                d="M13.6,4.575A7.931,7.931,0,0,0,1.125,14.143L0,18.25l4.2-1.1a7.9,7.9,0,0,0,3.789.964H8a8,8,0,0,0,8-7.929,7.96,7.96,0,0,0-2.4-5.607ZM8,16.775a6.578,6.578,0,0,1-3.357-.918L4.4,15.714l-2.493.654.664-2.432-.157-.25a6.6,6.6,0,1,1,12.246-3.5A6.664,6.664,0,0,1,8,16.775Zm3.614-4.936c-.2-.1-1.171-.579-1.354-.643s-.314-.1-.446.1-.511.643-.629.779-.232.15-.429.05a5.393,5.393,0,0,1-2.7-2.357c-.2-.35.2-.325.582-1.082a.367.367,0,0,0-.018-.346c-.05-.1-.446-1.075-.611-1.471s-.325-.332-.446-.339-.246-.007-.379-.007a.734.734,0,0,0-.529.246,2.226,2.226,0,0,0-.693,1.654,3.881,3.881,0,0,0,.807,2.05,8.853,8.853,0,0,0,3.386,2.993,3.877,3.877,0,0,0,2.379.5,2.029,2.029,0,0,0,1.336-.943,1.657,1.657,0,0,0,.114-.943C11.939,11.986,11.807,11.936,11.611,11.839Z"
                transform="translate(0 -2.25)" />
            </svg>
            (75) 98858-0680</div>
          <div class="instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.996" viewBox="0 0 16 15.996">
              <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                d="M8,6.135a4.1,4.1,0,1,0,4.1,4.1A4.095,4.095,0,0,0,8,6.135ZM8,12.9a2.666,2.666,0,1,1,2.666-2.666A2.671,2.671,0,0,1,8,12.9Zm5.226-6.935a.957.957,0,1,1-.957-.957A.954.954,0,0,1,13.222,5.967Zm2.716.971a4.734,4.734,0,0,0-1.292-3.352,4.765,4.765,0,0,0-3.352-1.292c-1.321-.075-5.279-.075-6.6,0A4.758,4.758,0,0,0,1.343,3.582,4.75,4.75,0,0,0,.051,6.934c-.075,1.321-.075,5.279,0,6.6a4.734,4.734,0,0,0,1.292,3.352,4.771,4.771,0,0,0,3.352,1.292c1.321.075,5.279.075,6.6,0a4.734,4.734,0,0,0,3.352-1.292,4.765,4.765,0,0,0,1.292-3.352c.075-1.321.075-5.276,0-6.6Zm-1.706,8.013a2.7,2.7,0,0,1-1.521,1.521c-1.053.418-3.552.321-4.715.321s-3.666.093-4.715-.321a2.7,2.7,0,0,1-1.521-1.521c-.418-1.053-.321-3.552-.321-4.715s-.093-3.666.321-4.715A2.7,2.7,0,0,1,3.281,4C4.334,3.582,6.833,3.679,8,3.679s3.666-.093,4.715.321a2.7,2.7,0,0,1,1.521,1.521c.418,1.053.321,3.552.321,4.715S14.65,13.9,14.232,14.951Z"
                transform="translate(0.005 -2.238)" />
            </svg>
            /colegioliriodosvales</div>
          <div class="facebook"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.903"
              viewBox="0 0 16 15.903">
              <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook"
                d="M16.563,8.562a8,8,0,1,0-9.25,7.9V10.875H5.28V8.562H7.313V6.8a2.823,2.823,0,0,1,3.022-3.112,12.312,12.312,0,0,1,1.791.156V5.812H11.116a1.156,1.156,0,0,0-1.3,1.249v1.5h2.219l-.355,2.313H9.812v5.591A8,8,0,0,0,16.563,8.562Z"
                transform="translate(-0.563 -0.563)" />
            </svg>
            /colegioliriodosvales</div>
        </div>

      </div>
      <div class="copy">
        <a href="">Termos de uso</a> | <a href="">Política de privacidade</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <!-- woxo.tech Instagram feed plugin -->          
  <script 
    src="https://cdn2.woxo.tech/a.js#6390d92452a2eaaa8190f28a" 
    async data-usrc>
  </script>
</body>

</html>