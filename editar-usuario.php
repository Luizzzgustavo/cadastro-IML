<h1>Editar usuario</h1>
<?php
    $sql = "SELECT * FROM corpo WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3" >
        <label for="">CPF</label>
        <input type="text" name="cpf"  value="<?php print $row->cpf; ?>"  class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de Nascemento</label>
        <input type="date" name="data_nasc"  value="<?php print $row->data_nasc; ?>"  class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de Óbito</label>
        <input type="date" name="data_obt"  value="<?php print $row->data_obt; ?>"  class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>