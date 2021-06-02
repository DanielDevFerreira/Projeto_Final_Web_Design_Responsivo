<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Projeto Final TCC</title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="X-UA-Compatible" content="IE=11">

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>


<link href="assets/css/menuMobile.css" rel="stylesheet" media="screen  and (min-width:100px) and (max-width:890px)">
<link href="assets/css/modal.css" rel="stylesheet" media="screen  and (min-width:100px) and (max-width:890px)">
<link href="assets/css/desktop.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
</script>



</head>

<body>


    <!------- Menu Mobile  ------>


<nav id="mobile";>
    <div id="inicio_mobile" class="container">
       <div class="col-xs-3" >
           <figure>
            <a href="#"><img style="color:white;" id="icon" src="assets/img/home.png"></a>
            <figcaption id="item">Início</figcaption>
           </figure>
        </div>
        <div class="col-xs-3">
           <figure>
           <a href="#"><img style="color:white;" id="icon2" src="assets/img/news.png"></a>
           <figcaption id="item2">Notícias</figcaption>
           </figure>
         </div>
        <div class="col-xs-3">
           <figure>
           <a href="#"><img style="color:white;" id="icon3" src="assets/img/play.png"></a>
           <figcaption id="item3">Videos</figcaption>
           </figure>
         </div>
        <div class="col-xs-3">
           <figure>
           <a href="#"><img style="color:white;" id="icon4" src="assets/img/user.png"></a>
           <figcaption id="item4">Assinante</figcaption>
           </figure>
         </div>
    </div>
  
    <div id="top-head-inner">
		<div id="navecao-toggle">
			<div>
				<span></span>
				<span></span>
				<span></span>
        <div id="emerj_menu"></div>
			</div>
		</div>
 

<nav id="global-navecao">
	<ul id="modal_menu" >

        <li><a>
            <div class="container">
              <div class="row">
                  <div class="form-group">
                      <div class="col-xs-12">
                         <div class="btn-group col-xs-12">
                            <button id="button3" class=" col-xs-12 btn dropdown-toggle" data-toggle="modal" data-target="#exampleModalCenter3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Noticias<img id="seta"  src="assets/img/baseline_arrow_drop_down_white_18dp.png">
                            </button>
                         </div>
                      </div>
                  </div>
              </div>
            </div>
          </a></li>

        <li><a>
            <div class="container">
              <div class="row">
                  <div class="form-group">
                      <div class="col-xs-12">
                         <div class="btn-group col-xs-12">
                            <button id="button6" class=" col-xs-12 btn dropdown-toggle" data-toggle="modal" data-target="#exampleModalCenter5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Destaques do Dia<img id="seta" src="assets/img/baseline_arrow_drop_down_white_18dp.png">
                            </button>
                         </div>
                      </div>
                  </div>
              </div>
            </div>
          </a></li>

        <li><a>
            <div class="container">
              <div class="row">
                  <div class="form-group">
                      <div class="col-xs-12">
                         <div class="btn-group col-xs-12">
                            <button id="button8" class=" col-xs-12 btn dropdown-toggle" data-toggle="modal" data-target="#exampleModalCenter6" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Área de Assinantes<img id="seta" src="assets/img/baseline_arrow_drop_down_white_18dp.png">
                            </button>
                         </div>
                      </div>
                  </div>
              </div>
            </div>
          </a></li>

		</ul>
</nav>
    
		<div id="navegar-bg"></div> 
    	</div> 
</nav>


  <div class=" col-xs-12 modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div style="width:95%;" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-body">

            <ul>
                <li><a>Economia</a><button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> </li>
				<li><a href="#">Esporte</a></li>
				<li><a href="#">Saúde</a></li>

				<li id="consulta"><a href="#"><img width="25px;" src="assets/img/baseline_arrow_right_white_18dp.png">Covid</a></li>


                        <ul id="sub" style="margin-left: 10%;">
                            <li style="border: none;"><a> - Covid no Mundo</a></li>
                            <li style="border: none;"><a> - Covid no Brasil</a></li>
                        </ul>


				<li><a href="#">Lazer</a></li>

				<li id="produtos"><a href="#"><img width="25px;" src="assets/img/baseline_arrow_right_white_18dp.png">Tecnoligias</a></li>

                        <ul id="sub2" style="margin-left: 10%;">
                            <li style="border: none;"><a> - Celulares</a></li>
                            <li style="border: none;"><a> - Jogos</a></li>
                            <li style="border: none;"><a> - Informática</a></li>
                        </ul>

            </ul>
            </div>
         </div>
    </div>
</div>

  <div class=" col-xs-12 modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div style="width:95%;" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-body">

            <ul>
                <li><a>Videos</a><button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> </li>
				<li><a href="#">Tecnologia</a></li>
				<li><a href="#">Esporte</a></li>
				<li><a href="#">Nacional</a></li>
				<li><a href="#">Internacional</a></li>
				<li><a href="#">Moda</a></li>
				<li><a href="#">Infantil</a></li>
            </ul>
            </div>
         </div>
    </div>
</div>


  <div class=" col-xs-12 modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div style="width:95%;" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-body">

            <ul>
                <li><a>Login</a><button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> </li>
				<li><a href="#">Planos</a></li>
				<li style="border: none;"><a href="#">Voltar</a></li>
            </ul>
            </div>
         </div>
    </div>
</div>




<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  <script src="assets/js/funcoes_menu_mobile.js"></script>

</body>
</html>