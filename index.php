<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="img/icone.png">
</head>
<body>
    <script type="text/javascript" src="/script/script.js"></script>


    <nav class="nav">
        <section class="area_logo">
            <img src="img/Logo.png" alt="Logo">
        </section>
        <section class="area_menu">
            <a class="menu_nav" href="index.php">Inicio</a>
            <a class="menu_nav" href="sobreNos.php">Sobre nós</a>
            <a class="menu_nav" href="contato.php">Contato</a>
        </section>
    </nav>
    


    <content class="content">
        <section class="left_content">
            <h1 >Dev.Learning</h1>

            <p>O Dev.Learning está aqui para apoiar sua jornada de aprendizado em linguagens de programação. Aproveite a oportunidade de desafiar seu conhecimento, aprender novas habilidades e se destacar no campo da tecnologia da informação. Cadastre-se agora mesmo e faça parte da comunidade Dev.Learning!</p>

            <form method="post" action="script/dev_learning.php" class="formulario">
                <input type="text" placeholder="Nome Sobrenome" name="nome_sobrenome" class="componente_formulario" required>
                <input type="email" placeholder="Exemplo@gmail.com" name="email" class="componente_formulario" required>
                <input type="date" class="componente_formulario" name="data_nascimento" required>
                <input type="submit" value="Inscreva-se" class="botao_formulario">
            </form>
        </section>

        <section class="right_content"> 
            <img src="img/contente 1.png" alt="Imagem ilustrativa do prototipo">
        </section>
    </content>
    


    <footer class="footer">
        <p>&copy; 2023 Equipe Dev.Learning - Todos os direitos reservados.</p>
    </footer>
</body>
</html>