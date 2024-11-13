<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $data_obt = $_POST["data_obt"];

            $sql = "INSERT INTO corpo (nome, cpf, data_nasc, data_obt) VALUES ('{$nome}', '{$cpf}', '{$data_nasc}', '{$data_obt}')";

            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Cadastrado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel Cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $data_obt = $_POST["data_obt"];

            $sql = "UPDATE corpo SET
                        nome='{$nome}',
                        cpf='{$cpf}',
                        data_nasc='{$data_nasc}',
                        data_obt='{$data_obt}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Editado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel Editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM corpo WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Excluído com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>
