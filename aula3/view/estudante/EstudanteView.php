<?php $Estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Estudantes</title>
</head>
<body>
    
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

    <header class="bg-dark text-white py-4">
        <div class="container text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>
    </header>

    <div class="container-fluid text-center w-25 p-1">
    <img src="/<?php echo FOLDER; ?>/style/acessibilidade.jpeg" class="rounded mx-auto d-block img-fluid mt-5" alt="imagem que simboliza a acessbilidade">
    </div>


    <div class="container mt-2 text-center">
        <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar"class="btn btn-success">Cadastrar Estudante</a>
    </div>

    <table class="container mt-2 table table-striped p-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($Estudantes as $estudante) { ?>
                <tr>
                    <td><?php echo $estudante["id"]; ?></td>
                    <td><?php echo $estudante["nome"]; ?></td>
                    <td><?php echo $estudante["idade"]; ?></td>
                    <td>
                        <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=editar&id=<?php echo $estudante ['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=excluir&id=<?php echo $estudante ['id']; ?>" class="btn btn-primary">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>  
    </table>

</body>
</html>