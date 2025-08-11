<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Lista</title>
</head>
<header class="main-header">
    <div class="header-content">
        <label>O total de upvotes e downvotes é <span id="total"></span></label>
        
        <a href="cadastro.php" class="botao-cadastro">Cadastrar Novo Filme</a>
    </div>
</header>
<body>
    
    <?php
        include_once("../../controller/listar.php");
    ?>  
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../scripts/script.js"></script>
</body>
</html>