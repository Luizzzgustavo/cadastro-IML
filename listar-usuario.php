<h1>Lista de Corpos</h1>
<?php
    $sql = "SELECT * FROM corpo";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>NOME</th>";
            print "<th>CPF</th>";
            print "<th>DATA DE NASCIMENTO</th>";
            print "<th>DATA DE ÓBITO</th>";
            print "<th>AÇOES</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>".$row->data_obt."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não Encontrou Resultados!</p>";
    }
?>