<h1>Novo Corpo</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 text-white">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3 text-white" >
        <label for="">CPF</label>
        <input type="text"  maxlength="11" name="cpf"  class="form-control">
    </div>

    <div class="mb-3 text-white">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc"  class="form-control">
    </div>

    <div class="mb-3 text-white">
        <label for="">Data de Óbito</label>
        <input type="date" name="data_obt"  class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>