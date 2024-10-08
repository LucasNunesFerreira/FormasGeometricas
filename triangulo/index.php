<?php  
require_once("../classes/Triangulo.class.php");
require_once("triangulo.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Triângulos</title>
</head>
<body>
    <div>
        <div>
            <div>
                <a href="../unidademedida/index.php">Unidade de Medida</a>
                <a href="../circulo/index.php">Círculo</a>
                <a href="../index.php">Menu</a>
            </div>
        </div>
        <div>
        <h1>CRUD de Triângulos</h1>
        <h3><?= isset($msg) ? $msg : ''; ?></h3>
        <form action="triangulo.php" method="post" enctype="multipart/form-data">
    
            <fieldset>
                <legend>Dados do Triângulo</legend>        
                <label for="id" class="block">Id:</label>
                <input type="text" name="id" id="id" value="<?= isset($triangulo) ? $triangulo->getId() : 0; ?>" readonly>

                <label for="lado1" class="block">Lado 1:</label>
                <input type="text" name="lado1" id="lado1" value="<?= isset($triangulo) ? $triangulo->getLado1() : ''; ?>">

                <label for="lado2" class="block">Lado 2:</label>
                <input type="text" name="lado2" id="lado2" value="<?= isset($triangulo) ? $triangulo->getLado2() : ''; ?>">

                <label for="lado3" class="block">Lado 3:</label>
                <input type="text" name="lado3" id="lado3" value="<?= isset($triangulo) ? $triangulo->getLado3() : ''; ?>">

                <label for="cor" class="block">Cor:</label>
                <input type="color" name="cor" id="cor" value="<?= isset($triangulo) ? $triangulo->getCor() : ''; ?>">

                <label for="un" class="block">Unidade de Medida:</label>
                <select name="un" id="un" required>
                    <option value="">Selecione</option>
                    <?php  
                        $uns = UnidadeMedida::listar();
                        foreach($uns as $un){ 
                            $str = "<option value='{$un->getId()}' ";
                            if(isset($triangulo) && $triangulo->getUn()->getId() == $un->getId()) 
                                $str .= " selected ";
                            $str .= ">{$un->getUn()}</option>";
                            echo $str;
                        }     
                    ?>
                </select>

                <label for="fundo" class="block">Imagem de Fundo:</label>
                <input type="file" name="fundo" id="fundo">

                <div>
                    <button type='submit' name='acao' value='salvar'>Salvar</button>
                    <button type='submit' name='acao' value='excluir'>Excluir</button>
                    <button type='reset'>Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>

        <!-- Formulário de pesquisa -->
        <form action="" method="get">
            <fieldset>
                <legend>Pesquisa</legend>
                <label for="busca" class="block">Busca:</label>
                <input type="text" name="busca" id="busca" value="<?= htmlspecialchars($busca) ?>">
                <label for="tipo" class="block">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="0">Escolha</option>
                    <option value="1">Id</option>
                    <option value="2">Lado A</option>
                    <option value="3">Lado B</option>
                    <option value="4">Lado C</option>
                    <option value="5">Cor</option>
                    <option value="6">Tipo</option>
                </select>
                <button type='submit'>Buscar</button>
            </fieldset>
        </form>

        <hr>

        <h1>Lista de Triângulos</h1>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Lado A</th>
                        <th>Lado B</th>
                        <th>Lado C</th>
                        <th>Cor</th>
                        <th>Tipo</th>
                        <th>Un</th>
                        <th>Area</th>
                        <th>Perimetro</th>
                        <th>Triangulo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($lista as $triangulo) {
                    echo "<tr>
                             <td><a href='index.php?id=" . $triangulo->getId() . "' class='text-pink-400 hover:text-purple-500'>" . $triangulo->getId() . "</a></td>
                             <td>" . $triangulo->getLado1() . "</td>
                             <td>" . $triangulo->getLado2() . "</td>
                             <td>" . $triangulo->getLado3() . "</td>
                             <td>" . $triangulo->getCor() . "</td>
                             <td>" . $triangulo->getTipo() . "</td>
                             <td>" . $triangulo->getUn()->getUn() . "</td>
                             <td>" . $triangulo->calcularPerimetro($triangulo) . $triangulo->getUn()->getUn() . "</td>
                             <td>" . $triangulo->calcularArea($triangulo) . $triangulo->getUn()->getUn() . "²</td>
                             <td><a href='index.php?id=" . $triangulo->getId() . "' class='text-pink-400 hover:text-purple-500'>" . $triangulo->desenhar($triangulo) . "</a></td>
                        </tr>";
                }
?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>