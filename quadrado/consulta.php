<?php
    require_once("../classes/Quadrado.class.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Forma</title>
    <style>
        .modal{
            width:1024px;
            height: 1024px;
            
        }
    </style>
</head>
<body >
    <div>
        <?php
            $id = isset($_GET['id']) ? $_GET['id'] : 0; 
        
            if ($id > 0) {
                $forma = Quadrado::listar(1, $id)[0];                                          
            ?>
                <h1>Detalhes do Quadrado</h1>
                <div>
                    <h2>Descrição:</h2>
                    <div>
                        <?= $forma->desenhar(); ?>
                    </div>
                </div>
                <div>
                    <p><strong>ID:</strong> <?= $forma->getId() ?></p>
                    <p><strong>Lado:</strong> <?= $forma->getLado() ?></p>
                    <p><strong>Cor:</strong> <span style="color: <?= $forma->getCor() ?>;"><?= $forma->getCor() ?></span></p>
                    <p><strong>Unidade:</strong> <?= $forma->getUn()->getUn() ?></p>
                </div>
            <?php
            } else {
                echo "<p>Forma não encontrada.</p>";
            }
        ?>
        <div>
            <a href="../index.php">Voltar ao Menu</a>
        </div>
    </div>
</body>
</html>