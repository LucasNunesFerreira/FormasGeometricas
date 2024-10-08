<?php  
session_start();
include_once('quadrado.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Quadrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">CRUD de Quadrados</h1>
        <h3 class="text-center text-danger"><?= $msg ?></h3>
        
        <form action="quadrado.php" method="post" enctype="multipart/form-data">
            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Cadastro de Quadrado</legend>    
                <div class="mb-3">
                    <a href="../index.php" class="btn btn-secondary">Menu</a>    
                </div>
                
                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto">Dados do Quadrado</legend>        
                    <div class="mb-3">
                        <label for="id" class="form-label">Id:</label>
                        <input type="text" name="id" id="id" class="form-control" value="<?= isset($forma) ? $forma->getId() : 0 ?>" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="lado" class="form-label">Lado:</label>
                        <input type="text" name="lado" id="lado" class="form-control" value="<?php if(isset($forma)) echo $forma->getLado() ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor:</label>
                        <input type="color" name="cor" id="cor" class="form-control" value="<?php if(isset($forma)) echo $forma->getCor() ?>">                    
                    </div>
                    
                    <div class="mb-3">
                        <label for="un" class="form-label">Un:</label>
                        <select name="un" id="un" class="form-select" required>
                            <option value="">Selecione</option>
                            <?php  
                                $uns = UnidadeMedida::listar();
                                foreach($uns as $un){ 
                                    $str = "<option value='{$un->getId()}' ";
                                    if(isset($forma) && $forma->getUn()->getId() == $un->getId()) 
                                        $str .= " selected ";
                                    $str .= ">{$un->getUn()}</option>";
                                    echo $str;
                                }     
                            ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="fundo" class="form-label">Imagem de Fundo:</label>
                        <input type="file" name="fundo" id="fundo" class="form-control">
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button type='submit' name='acao' value='salvar' class="btn btn-primary">Salvar</button>
                        <button type='submit' name='acao' value='excluir' class="btn btn-danger">Excluir</button>
                        <button type='reset' class="btn btn-secondary">Cancelar</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>
        <hr class="my-4">
    </div>
</body>
</html>
