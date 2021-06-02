<?php
    require_once ("menumobile.php");
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/body.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="assets/js/graficos.js" type="text/javascript"></script>

    <title>Document</title>
</head>
<body>
    <header>
        <div class="headerSocial">
            <p>
                Rio de Janeiro, Brasil
            </p>
            <a>
                <img width="20" src="assets/img/facebook.png" alt="facebook">
            </a>
            <a>
                <img width="20" src="assets/img/instagram.png" alt="instagran">
            </a>
            <a>
                <img width="20" src="assets/img/linkedin.png" alt="linkedin">
            </a>
        </div>
        <div class="header">
            <div class="logo">
                <img src="assets/img/logo.png" alt="logo">
            </div>
            <div class="menuDesktop">
                <div>
                    <a>Home</a>
                    <a>Ultimas Noticias</a>
                    <a>Quem somos</a>
                    <a>Contatos</a>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <div style="background-color: #1D2329; color: white; padding: 10px">
            <h2 id="ultimasNoticias">Últimas Notícias <img src="assets/img/news.png " width="32px" style="margin-left: 10px; color: white !important;"> </h2>
            <div id="borderTitle"></div>
        </div>

        <!-- Quadro de Ultimas Notícias -->
            <section class="quadroNoticia">
                <div class="noticiaPrincipal">
                    <div>
                        <img src="assets/img/noticia1.jpg"  alt="This zooms-in really well and smooth">
                        <p>
                            <a>Title Notícia</a> <br>
                            Lorem ipsum lectus tempor litora vestibulum himenaeos nisi sagittis, etiam lacus tristique sodales auctor vestibulum scelerisque senectus, elementum convallis sodales lacinia consequat tempus arcu. blandit quisque justo dapibus etiam quisque faucibus duis mauris, a massa cras rhoncus vel habitasse adipiscing commodo, malesuada curae vestibulum suscipit condimentum laoreet blandit</p>
                    </div>
                </div>
                <div class="subNoticia">
                    <div style="margin-top: 10px">
                        <img src="assets/img/noticia2.jpg" alt="This zooms-in really well and smooth">
                        <p>
                            <a>Title Notícia</a> <br>
                            Lorem ipsum tristique posuere orci interdum integer </p>
                    </div>
                </div>
                <div class="subNoticia">
                    <div>
                        <img src="assets/img/noticia3.jpg" alt="This zooms-in really well and smooth">
                        <p>
                            <a>Title Notícia</a> <br>
                            Lorem ipsum tristique posuere orci interdum integer</p>
                    </div>
                </div>
            </section>

            <hr style="margin: 0 25px">

        <h3 id="ultimasNoticias">Destaque do dia <img src="assets/img/star.png " width="32px" style="margin-left: 10px"> </h3>
        <div id="borderTitle"></div>
            <section class="cardNotícias">
                <div>
                    <div class="flip-card">
                        <p><a>Title do card</a></p>
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/img/card1.jpg" alt="Avatar" width="100%" height="200">
                            </div>
                            <div class="flip-card-back">
                                <h1>John Doe</h1>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flip-card">
                        <p><a>Title do card</a></p>
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/img/card2.jpg" alt="Avatar" width="100%" height="200">
                            </div>
                            <div class="flip-card-back">
                                <h1>John Doe</h1>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flip-card">
                        <p><a>Title do card</a></p>
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/img/card3.jpg" alt="Avatar" width="100%" height="200">
                            </div>
                            <div class="flip-card-back">
                                <h1>John Doe</h1>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <hr style="margin-top: 60px; margin-left: 20px; margin-right: 20px;">

        <h3 id="ultimasNoticias">Covid no Brasil <img src="assets/img/coronavirus.png" width="32px" style="margin-left: 10px"> </h3>
        <div id="borderTitle"></div>
            <section>
                <div class="row">
                    <div class="col-md-6">
                        <div id="chart_div1" class="chart"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart_div" class="chart"></div>
                    </div>
                </div>
            </section>


        <h3 id="ultimasNoticias">Vídeos da Semana <img src="assets/img/play.png" width="32px" style="margin-left: 10px"> </h3>
        <div id="borderTitle"></div>
            <section class="videosSemana">
                <div>
                    <div>
                        <div>
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/YZYlf2WSieo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                            Donec himenaeos per congue praesent sit primis fames, curabitur conubia suscipit scelerisque imperdiet praesent nulla, feugiat donec lorem molestie commodo dictumst. vulputate nibh potenti aptent in eleifend et condimentum
                            <br>
                            <small style="color: #bbbbbb">publicado 22/05/2021</small>
                        </p>

                    </div>
                    <div>
                        <div><iframe width="100%" height="300" src="https://www.youtube.com/embed/u-s64K2mxHM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <p>
                            Donec himenaeos per congue praesent sit primis fames, curabitur conubia suscipit scelerisque imperdiet praesent nulla, feugiat donec lorem molestie commodo dictumst. vulputate nibh potenti aptent in eleifend et condimentum
                                <br>
                            <small style="color: #bbbbbb">publicado 22/05/2021</small>
                        </p>
                    </div>
                </div>
            </section>
    </main>

    <footer class="footer">
        <div>
            <img src="assets/img/logo.png" alt="logo">
        </div>
        <div>
            <a>
                <img width="32" src="assets/img/facebook.png" alt="facebook">
            </a>
            <a>
                <img width="32" src="assets/img/instagram.png" alt="instagran">
            </a>
            <a>
                <img width="32" src="assets/img/linkedin.png" alt="linkedin">
            </a>
        </div>
        <div>
            <p>Projeto TCC em Web Design Responsivo</p>
        </div>
        <div>
            <p>&copy; Daniel e Igor</p>
        </div>
    </footer>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('.header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            if (st > lastScrollTop && st > navbarHeight){
                $('.header').removeClass('.header').addClass('nav-up');
                $('.headerSocial').removeClass('.header').addClass('nav-up');
            } else {
                if(st + $(window).height() < $(document).height()) {
                    $('.header').removeClass('nav-up').addClass('.header');
                    $('.headerSocial').removeClass('nav-up').addClass('.header');
                }
            }

            lastScrollTop = st;
        }
    </script>
</body>
</html>