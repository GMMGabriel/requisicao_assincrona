<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <main>
        <form action="">
            Informe sua idade
            <input type="text" name="idade" id="idade" onkeypress="return somenteNumeros(event);">
            <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar">
        </form>
        <div id="content_resposta">

        </div>
    </main>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/main.js"></script>
</body>

</html>