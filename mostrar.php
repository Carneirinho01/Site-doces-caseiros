<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mostrar.css">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>Doces caseiros</h1>
        <p>Não deixe para amanhã a sobremesa que pode comer hoje!	&#x1F9C1;</p>
    </header>
    <nav>
        <a href="index.php">Home</a>
    </nav>
    <main>
        <div>
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer>
        <p>Nome: Alexandre Carneiro Santos<br> R.A:21142724-5 &copy;</p>
    </footer>
</body>
</html>