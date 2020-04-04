<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Fronte Login</title>
    <script src="https://kit.fontawesome.com/0e19a3fd47.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title-primary">Bem Vindo ao Front</h2>
                <p class="description description-primary"> Se já é um cadastrado click e Logar</p>
                <p class="description description-primary"> Logar-se Com Suas Credenciais</p>
                <button id="signin" class="btn btn-primary"> Logar-Se</button>

            </div>
            <div class="second-column">
                <h2 class="title title-second"> Crie Sua Conta </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f">
                                </i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i></li></a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i></li></a>
                    </ul>
                </div>
                <p class="description description-second">Usando Suas Redes Sociais ou Seu E-mail</p>
                <form action="cadastro.php" class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>
                    <button class="btn btn-second">Cadastrar</button>
                </form>
            </div>

        </div>

        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá Font</h2>
                <p class="description description-primary"> Insira Seus Dados</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>

            </div>

            <div class="second-column">
                <h2 class="title title-second"> Logar-se </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f">
                                </i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i></li></a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i></li></a>
                    </ul>
                </div>
                <p class="description description-second">Utilise Suas Credenciais Para Logar-Se</p>
                <form action="login.php" class="form" method="post">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail" name="email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha">
                    </label>
                    <a class="password" href="#">Esqueceu Sua Senha ?</a>
                    <button class="btn btn-second">Logar-Se</button>

                    <?php
                        echo $_SESSION['msg']
                    ?>



                </form>
            </div>

        </div>



        </div>
    </div>


<script src="js/app.js"></script>
</body>
</html>
