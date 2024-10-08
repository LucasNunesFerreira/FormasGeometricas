<?php  

include_once('unidademedida.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Unidade de Medida</title>
</head>
<body>
    <div>
        <h1>Cadastro de Unidade de Medida</h1>
        
        <form action="unidademedida.php" method="POST">
            <label for="id" class="block">Id:</label>
            <input type="text" name="id" id="id" readonly value="<?= isset($unidade) ? $unidade->getId() : 0 ?>">
            
            <label for="un" class="block">Un:</label>
            <input type="text" name="un" id="un" value="<?= isset($unidade) ? $unidade->getUn() : '' ?>">
            
            <div>
                <button type='submit' name='acao' value='salvar'>Salvar</button>
                <button type='submit' name='acao' value='excluir'>Excluir</button>
                <button type='reset'>Cancelar</button>
            </div>
        </form>

        <!-- Formulário de Pesquisa -->
        <form action="" method="get">
            <fieldset>
                <h1>Pesquisa</h1>
                <label for="busca" class="block">Busca:</label>
                <input type="text" name="busca" id="busca" value="">
                
                <label for="tipo" class="block">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="">Escolha</option>
                    <option value="1">Id</option>
                    <option value="2">Un</option>
                </select>
                
                <button type='submit'>Buscar</button>
            </fieldset>
        </form>

        <hr>
        
        <h2>Lista de Unidades de Medida</h2>
        <a href="../index.php">Menu</a>
        
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Un</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    foreach($lista as $unidade) { 
                        echo "<tr>
                                <td><a href='index.php?id=".$unidade->getId()."' class='text-blue-600 hover:underline'>".$unidade->getId()."</a></td>
                                <td>{$unidade->getUn()}</td>
                              </tr>";
                    }     
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>