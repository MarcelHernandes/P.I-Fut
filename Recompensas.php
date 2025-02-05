<?php

  namespace PHP\Modelo;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Configuracoes.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <title>Recompensas</title>
</head>
<body style="background-image: url(https://th.bing.com/th/id/OIP.paK33pld0qiU0bNz7gLhcgHaE8?rs=1&pid=ImgDetMain);">
    <!-- Inicio do NavBar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="TelaPrincipal.html">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="Noticias.html">Notícias</a>
              <a class="nav-link" href="Recompensas.html">Recompensas</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Colocações
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ColocacoesBrasileirao.html">Colocações do Brasileirão</a></li>
                  <li><a class="dropdown-item" href="ColocacoesPremier.html">Colocações do Premier League</a></li>
                  <li><a class="dropdown-item" href="ColocacoesChampions.html">Colocações da Champions League</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>
      <br>

      <!-- Fim do NavBar -->


      <!-- Inicio do card Premier League -->

      <div class="card" style="width: 15rem; margin-left: 12%;">
        <img src="https://cdn.resfu.com/img_data/competiciones/logo/10.png?size=120x&lossy=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ingressos Premier League</h5>
          <p class="card-text">Tendo ... Pontos você pode trocar eles por ingressos para assistir jogos da Premier League pessoalmente.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Troque seus pontos aqui
          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exemploPremier">Ingressos Premier League</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pontos Insuficientes para trocar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Fim do Card Premier League -->


      <!-- Inicio do card Champions League -->

      <div class="card" style="width: 15rem; margin-left: 32%; margin-top:-33%;">
        <img src="https://cdn.resfu.com/img_data/competiciones/logo/107.png?size=120x&lossy=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ingressos Champions League</h5>
          <p class="card-text">Tendo ... Pontos você pode trocar eles por ingressos para assistir jogos da Champions League pessoalmente.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemploChampions">
            Troque seus pontos aqui
          </button>
          <div class="modal fade" id="exemploChampions" tabindex="-1" aria-labelledby="exemploChampionsLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exemploChampions">Ingressos Champions League</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pontos Insuficientes para trocar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Fim do Card Champions League -->


      <!-- Inicio do card Brasileirão -->

      <div class="card" style="width: 15rem;margin-left: 52%; margin-top:-33%;">
        <img src="https://cdn.resfu.com/img_data/competiciones/logo/24.png?size=120x&lossy=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ingressos Brasileirão</h5>
          <p class="card-text">Tendo ... Pontos você pode trocar eles por ingressos para assistir jogos do Brasileirão pessoalmente.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemploBrasileirao">
            Troque seus pontos aqui
          </button>
          <div class="modal fade" id="exemploBrasileirao" tabindex="-1" aria-labelledby="exemploBrasileiraoLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exemploBrasileirao">Ingressos Brasileirão</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pontos Insuficientes para trocar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Fim do Card Brasileirão -->


      <!-- Inicio do card Copa do Mundo -->

      <div class="card" style="width: 15rem; margin-left:72%; margin-top:-30%;">
        <img src="https://cdn.resfu.com/img_data/competiciones/logo/120.png?size=120x&lossy=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ingressos Copa do Mundo</h5>
          <p class="card-text">Tendo ... Pontos você pode trocar eles por ingressos para assistir jogos da Copa do Mundo pessoalmente.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemploCopaDoMundo">
            Troque seus pontos aqui
          </button>
          <div class="modal fade" id="exemploCopaDoMundo" tabindex="-1" aria-labelledby="exemploCopaDoMundoLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="IngressosCopaDoMundo" id="exemploCopaDoMundo">Ingressos Copa do Mundo</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Pontos Insuficientes para trocar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fim do Card Copa do Mundo -->

</body>
</html>