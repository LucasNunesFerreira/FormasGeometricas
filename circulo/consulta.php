<?php
    require_once("../classes/Circulo.class.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de circulo</title>
    <style>
        .modal{
            width:1024px;
            height: 1024px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $id = isset($_GET['id']) ? $_GET['id'] : 0; 
        
            if ($id > 0) {
                $circulo = Circulo::listar(1, $id)[0];                                          
                ?>
                <h1>Detalhes do Círculo</h1>
                <div>
                    <h2 >Descrição:</h2>
                    <div>
                        <?= $circulo->desenhar(); ?>
                    </div>
                </div>
                <div>
                    <p><strong>ID:</strong> <?= $circulo->getId() ?></p>
                    <p><strong>Raio:</strong> <?= $circulo->getRaio() ?></p>
                    <p><strong>Cor:</strong> <span style="color: <?= $circulo->getCor() ?>;"><?= $circulo->getCor() ?></span></p>
                    <p><strong>Unidade:</strong> <?= $circulo->getUn()->getUn() ?></p>
                </div>
                <div>
                    <a href="../index.php">Voltar ao Menu</a>
                </div>
                <?php
            } else {
                echo "<p>Círculo não encontrado.</p>";
            }
        ?>
    </div>
</body>
</html>