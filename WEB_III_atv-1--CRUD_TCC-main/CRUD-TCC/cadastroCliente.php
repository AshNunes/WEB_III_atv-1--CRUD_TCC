<?php 
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);
    $cliente->setNome($_POST['nome']);
    $cliente->setCPF($_POST['curso']);
    $cliente->setTelefone($_POST['numero_de_matricula']);
    $cliente->setEmail($_POST['email']);

        if($cliente->create()){
            echo "Aluno cadastrado com sucesso!";
            header("Refresh:3;url=listarCliente.php");
        } else {
            echo "Erro ao cadastrar o aluno.";
        }

?>