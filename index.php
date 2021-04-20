<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC</title>

    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>

<body style="background-color: gray; text-align: center; margin: 0px !important; padding: 0px !important;">

    <div style="width: 33%; height: 500px; text-align: center; position: absolute;">
        <h1>USUARIO 1</h1><br><br>
        Digite sua mensagem: <br><br>
        <form action="index2.php" method="POST">
            <textarea name="message1" id="message1" cols="50" rows="10"></textarea><br><br>
            <input type="submit" value="Enviar mensagem" name="submit1">
        </form>
    </div>

    <div style="width: 33%; display: inline; left: 33%; top: 0%; position: absolute;">
        <h1>CHAT</h1><br><br>

    </div>

</body>

</html>