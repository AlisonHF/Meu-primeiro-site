<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CineLight</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">
        <link href="styles-index.css" rel="stylesheet">

    </head>
    <body>


     
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- NAVBAR -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CineLight</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Combos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Próximos lançamentos</a>

                    </ul>
                </div>
            </div>
        </nav> <!--NAVBAR -->

        <h1>Bem vindo ao CineLight</h1>

        <h2>No CineLight, nossa missão é proporcionar a você uma experiência cinematográfica inesquecível.
             Somos apaixonados por filmes e dedicados a trazer o melhor do entretenimento para nossa audiência.
              Seja você um fã de grandes lançamentos, um entusiasta de clássicos atemporais, ou alguém que adora
               descobrir novos filmes, temos algo especial para todos.</h2>

        <h3>Filmes em cartaz:</h3>
        
        <div class="div-post">
            <a href="movie1.php">
                <div class="div-movies">
                    <img src="Assets/MeuMalvadoFavorito4.jpg" class="poster">
                    <label class="title-movie">Meu Malvado Favorito 4</label>
                </div>
            </a>

            <a href="movie2.php">
                <div class="div-movies">
                    <img src="Assets/DeadPooleWolverine.jpg" class="poster">
                    <label class="title-movie">DeadPool e Wolverine</label>
                </div>
            </a>
                
            <a href="movie3.php">
                <div class="div-movies">
                    <img src="Assets/Divertidamente2.jpg" class="poster">
                    <label class="title-movie">Divertida Mente 2</label>
                </div>
            </a>
        </div>




        <!-- Rodapé -->
        <footer class="bg-dark text-center text-lg-start text-light justify-content-end" style="margin-top: 20px">
        <div class="container p-4">
                <p>© 2024 CineLight. Todos os direitos reservados.</p>
            </div>
            </footer>
            <!-- Rodapé -->

        <script src="js/bootstrap.bundle.min.js" ></script>
    </body>

</html>