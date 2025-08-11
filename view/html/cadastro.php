<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo filme</title>
</head>
<body>
    <a id="voltar" href="index.php"><ion-icon name="arrow-round-back"></ion-icon></a>
    <form action="../../controller/cadastro.php" method="post">
        <input type="text" name="titulo" placeholder="Título" id="" required>
        <input type="text" name="genero" placeholder="Gênero" id="" required>
        <textarea name="descricao" placeholder="Breve descrição do filme" id=""></textarea>
        <input type="text" name="imagem" placeholder="url da imagem" id="" required>
        <input type="submit" value="Enviar">
    </form>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>  
</body>
</html>