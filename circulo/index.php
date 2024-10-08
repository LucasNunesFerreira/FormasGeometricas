<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <?php
    session_start();
    include_once('circulo.php');

    ?>
</head>
<body >
    <div>
        <div>
            <div>
                <a href="./cadastro.php">Novo Círculo</a>
                <a href="../index.php">Menu</a>
            </div>
        </div>

        <form method="get">
            <h4>Busca</h4>
            <div>
                <input type="text" name="busca" id="busca" placeholder="Busca">
            </div>
            <div >
                <select name="tipo" id="tipo">
                    <option value="1">ID</option>
                    <option value="2">Raio</option>
                    <option value="3">Cor</option>
                    <option value="4">Unidade</option>
                </select>
            </div>
            <input type="submit" name="acao" id="acao" value="Buscar">
        </form>

        <h2>Lista de Círculos</h2>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Raio</th>
                        <th>Cor</th>
                        <th>Unidade</th>
                        <th>Perímetro</th>
                        <th>Área</th>
                        <th>Círculos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lista as $circulo) {
                        echo "<tr>
                            <td><a href='index.php?id=" . $circulo->getId() . "''>" . $circulo->getId() . "</a></td>
                            <td>" . $circulo->getRaio() . "</td>
                            <td>" . $circulo->getCor() . "</td>
                            <td>" . $circulo->getUn()->getUn() . "</td>
                            <td>" . $circulo->calcularPerimetro() . " " . $circulo->getUn()->getUn() . "</td>
                            <td>" . $circulo->calcularArea() . " " . $circulo->getUn()->getUn() . "²</td>
                            <td><a href='index.php?id=" . $circulo->getId() . "''>" . $circulo->desenhar($circulo) . "</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>