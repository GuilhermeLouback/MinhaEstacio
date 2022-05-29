<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/minhaestacio.css">
    <title>Minha Estacio</title>
</head>
<body class="exercicio">
<script src="validacao.js"></script>
    <header class="cabecalho">
        <h1>Minha Estácio</h1>
        <h4>Sistema da Gerenciamento</h4>
    </header>
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
         
        <?= 
           date('');
           setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
           date_default_timezone_set('America/Sao_Paulo');
           echo strftime('%A, %d de %B de %Y', strtotime('today'));;
        ?>
    </footer>
</body>
</html>