<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .menu {
            margin-top: 20px;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            margin-bottom: 10px;
        }
        .menu a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            border: 1px solid transparent;
            border-radius: 5px;
            padding: 10px 15px;
            display: inline-block;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .menu a:hover {
            background-color: #007bff;
            color: white;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="my-4">Formas Geométricas</h1>
        <div class="menu">
            <ul>
                <li>
                    <a href="./quadrado/" class="btn btn-outline-primary">Quadrado</a>
                </li>
                <li>
                    <a href="./circulo/" class="btn btn-outline-primary">Círculo</a>
                </li>
                <li>
                    <a href="./unidademedida/" class="btn btn-outline-primary">Unidade de Medida</a>
                </li>
                <li>
                    <a href="./triangulo/" class="btn btn-outline-primary">Triângulo</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
