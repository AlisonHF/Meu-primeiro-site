<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Divertida Mente 2</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        </nav>

        
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <img src="Assets/Divertidamente2" class="cartaz img-fluid">
                    <h2>Divertida Mente 2</h2>
                    <h3> Com um salto temporal, Riley se encontra mais velha, passando pela tão temida adolescência.
                         Junto com o amadurecimento, a sala de controle também está passando por uma adaptação
                          para dar lugar a algo totalmente inesperado: novas emoções.
                    <h3>
                </div>


            <div class="col-md-6">
                <form action="movie3.php" method="POST" class="custom-form-border">
                <div class="mb-3">
                    <h1> Preencha seus dados para a reserva: </h1>
                    <br>
                    <div class="mb-3"> 
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: João da Silva Santos">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex: 14356628771">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nasc" name="data_nasc">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ex: seuemail@gmail.com">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-secondary" id="submit" name="submit">Enviar</button>
                    </div>
                </div>    
            </div>
            </form>
        </div>
        

            <footer class="bg-dark text-center text-lg-start text-light justify-content-end">
                <div class="container p-4">
                    <p>© 2024 CineLight. Todos os direitos reservados.</p>
                </div>
            </footer>

        <script src="js/bootstrap.bundle.min.js" ></script>

    </body>

</html>


<?php
include("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $email = $_POST['email'];


        $result = mysqli_query($conexao, "INSERT INTO room3(nome, cpf, data_nasc, email) VALUES ('$nome', '$cpf', '$data_nasc', '$email')");
    } 
}
?>
