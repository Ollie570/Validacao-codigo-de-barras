<!DOCTYPE html>

<html>

<head>

    <meta charset = "UTF-8"/>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0"/>
    <link rel = "stylesheet" href = "estilo.css"/>
    <link href = "https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel = "stylesheet"/>
    <link rel = "shortcut icon" href = "barcode.png">
    <title>Validador de código de barra</title>

    <style type="text/css">
        
        @charset "UTF-8";

        html,
        body {
             height: 100%;
     }

        * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
             font-family: 'Roboto', sans-serif;
        }

         #header {
             margin-top: 40px;
             margin-bottom: 150px;
             text-align: center;
     }

        #entrada {
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
        }

        input {
            width: 600px;
            border: 1px solid #ddd;
             height: 50px;
            padding: 0 20px;
            font-size: 14px;
        }

         button {
              width: 600px;
            height: 50px;
            font-size: 14px;
             background: #069;
            text-align: center;
             line-height: 50px;
            font-weight: bold;
             color: #FFF;
             margin-top: 10px;
        }

    </style>

</head>

<body>

    <header id = "header">
        <h1>Validador de código de barras</h1>
    </header>

    <main id = "main">
        <form id = "entrada" method = "POST" action = "calculo.php">
            <input id = "codigo" type = "text" name = "code" placeholder = "Digite o codigo aqui!" required/>
            <button type = "submit">Enviar</button>
        </form>
    </main>


</body>

</html>
