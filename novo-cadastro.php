<h1>novo cadastro</h1>
<div>
<form action="?page=salvar" method="POST" >
    <input type="hidden" name = "acao" value="cadastrar">
    <div class="mb-5">
        <label>Nome</label>
        <input type="text" name= "nome" class="form-control">
    </div>
    <div class="mb-5" >
        <label>seu email</label>
        <input type="email" name = "email" class="form-control">
    </div>
    <div class="mb-5" >
        <label>senha</label>
        <input type="password" name = "senha" class="form-control">
    </div>

    <div class="mb-5" >
        <label>data de nascimento</label>
        <input type="date" name = "data_nasc" class="form-control">
    </div>
    <div class = "mb-5">
        <button type = "submit" class = "btn btn-primary">guardar</button>
    </div>
</form>
</div>