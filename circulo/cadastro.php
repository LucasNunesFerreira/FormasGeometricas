<!DOCTYPE html>
<html lang="pt-br">
<?php
    include_once('circulo.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Criação de Formas</title>
</head>

<body>
    <div>
        <a href="../index.php">Menu</a>

        <form action="circulo.php" method="post">
            <input type="hidden" name="id" id="id" value="<?= $id ? $circulo->getId() : 0 ?>" readonly>

            <label for="raio">Raio</label>
            <input type="number" name="raio" id="raio" value="<?= $id ? $circulo->getRaio() : 0 ?>" placeholder="Raio do seu círculo">

            <label for="cor">Cor</label>
            <input type="color" name="cor" id="cor" value="<?= $id ? $circulo->getCor() : 'black' ?>">

            <label for="unidade">Unidade</label>
            <select name="un" id="un">
                <?php
                    $uns = UnidadeMedida::listar();
                    foreach ($uns as $un) {
                        $str = "<option value='{$un->getId()}'";
                        if (isset($circulo) && $circulo->getUn()->getId() == $un->getId()) {
                            $str .= " selected";
                        }
                        $str .= ">{$un->getUn()}</option>";
                        echo $str;
                    }
                ?>
            </select>

            <label for="fundo">Imagem de Fundo:</label>
            <input type="file" name="fundo" id="fundo">

            <div class="flex justify-between mt-4">
                <input type="submit" name="acao" id="acao" value="Salvar">
                <input type="submit" name="acao" id="acao" value="Excluir">
            </div>
        </form>
    </div>
</body>
</html>