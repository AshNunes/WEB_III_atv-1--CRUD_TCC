<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);
    $stmt = $cliente->read($conexao);
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOSTRAP LIMKS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <!-- CSS -->
         <link rel="stylesheet" href="./CSS/style_lista.css">

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <title>Lista de Clientes</title>
    </head>
    <body>
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Numero de matricula</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($clientes as $cliente ){ ?>
                        <tr>
                            <td><?php echo $cliente['id']; ?></td>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $cliente['numero_de_matricula']; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $cliente['curso']; ?></td>
                            <td>
                                <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                </a>
                                <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-outline-light">
                    <a href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
                </button>
            </div>
            <!-- <table border="2">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Numero de matricula</th>
                    <th>Email</th>
                    <th>Curso</th>
                    <th>Açôes</th>
                </tr>
                <?php foreach ($clientes as $cliente ){ ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['numero_de_matricula']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['curso']; ?></td>
                        <td>
                            <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                            <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table> -->
    </body>
</html>