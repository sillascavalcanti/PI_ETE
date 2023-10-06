<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="img/icone.png">
    <title>Contato</title>
</head>
<body>
    
    
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
            <h1 >Entre em Contato Conosco</h1>
            <p><span>E-mail</span>:contato@devlearning.com.br</p>
            <h3 class="sugestao_titulo">Sugestão</h3>
            <p class="sugestao">Adoraríamos ouvir suas sugestões e receber seu feedback para melhorar o Dev.Learning. Envie suas ideias:</p>
            <form method="post" action="script/dev_learning.php" class="formulario">
                <textarea name="sugestao" id="sugestao" cols="30" rows="10" class="texto_formulario" required></textarea>
                <input type="email" placeholder="Exemplo@gmail.com" id="email_usuario" class="componente_formulario" required>
                <input type="submit" value="Enviar" class="botao_formulario">
            </form>
            
        </section>

        <section class="right_content"> 
            <img src="img/contente 3.png" alt="Imagem ilustrativa do prototipo">
        </section>
    </content>
    
    
    
    <footer class="footer">
        <p>&copy; 2023 Equipe Dev.Learning - Todos os direitos reservados.</p>
    </footer>
    <script type="text/javascript" src="/script/script.js"></script>
</body>
</html>