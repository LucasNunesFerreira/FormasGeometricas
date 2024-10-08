<?php  
session_start();
include_once('quadrado.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Formas Geométricas</h1>
        
        <div class="mb-4">
            <a href="./cadastro.php" class="btn btn-primary">Novo Quadrado</a>
            <a href="../unidademedida/index.php" class="btn btn-secondary">Unidade de Medida</a>
            <a href="../circulo/index.php" class="btn btn-secondary">Círculo</a>
            <a href="../index.php" class="btn btn-secondary">Menu</a>
        </div>

        <!-- Formulário de Pesquisa -->
        <form action="" method="get" class="mb-4">
            <fieldset class="border p-3">
                <legend class="w-auto">Pesquisa</legend>
                <div class="mb-3">
                    <label for="busca" class="form-label">Busca:</label>
                    <input type="text" name="busca" id="busca" class="form-control" value="">
                </div>
                
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <select name="tipo" id="tipo" class="form-select">
                        <option value="0">Escolha</option>
                        <option value="1">Id</option>
                        <option value="2">Lado</option>
                        <option value="3">Cor</option>
                        <option value="4">Un</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Buscar</button>
            </fieldset>
        </form>

        <hr>
        
        <h2 class="text-center">Lista de Quadrados</h2>

        <div>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Tamanho</th>
                        <th>Cor</th>
                        <th>Un</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    foreach($lista as $forma) {
                        echo "<tr>
                                <td>{$forma->getId()}</td>
                                <td>{$forma->getLado()}</td>
                                <td style='color: {$forma->getCor()}'>{$forma->getCor()}</td>
                                <td>{$forma->getUn()->getUn()}</td>
                                <td><a href='consulta.php?id={$forma->getId()}' class='text-primary'>Visualizar</a></td>
                                <td><a href='cadastro.php?id={$forma->getId()}' class='text-primary'>Editar</a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
