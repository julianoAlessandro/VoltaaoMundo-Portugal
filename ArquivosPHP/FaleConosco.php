

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faleconosco.css">
    <title>Fale Conosco</title>
</head>
<body>
    <div class="centralizar">
    <form action="CadastroGravar.php" method="post">
        <fieldset>
        <h3>O que voce mais curtiu  no site volta ao mundo?</h3>
        <label for = "nome">Nome:</label>
        <input type="text" name = "nome" class="entrada"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" class="entrada"><br>
        <label for="comentario">Comentário:</label>
        <br>
        
        
        <textarea id="comentario" name="comentario"  rows="5" cols="40"></textarea><br><br>
        <div class="central2">
        <input type="submit" value="ENVIAR" class="botaoenviar">
        </div>
    </form>
</fildset>
</div>
</body>
</html>