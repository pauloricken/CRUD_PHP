<h1> editar cadastro</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id= ".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();


?>


<div>
<form action="?page=salvar" method="POST" >
    <input type="hidden" name = "acao" value="editar">
    <input type="hidden" name = "id" value="<?php print $row->id; ?>">
    <div class="mb-5">
        <label>Nome</label>
        <input type="text" name= "nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-5" >
        <label>seu email</label>
        <input type="email" name = "email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-5" >
        <label>senha</label>
        <input type="password" name = "senha"  class="form-control" required >
    </div>

    <div class="mb-5" >
        <label>data de nascimento</label>
        <input type="date" name = "data_nasc" value="<?php print $row->data_nasc;?>" class="form-control">
    </div>
    <div class = "mb-5">
        <button type = "submit" class = "btn btn-primary">guardar</button>
    </div>
</form>
</div>

