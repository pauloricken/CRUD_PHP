<h1>listar usuarios</h1>

<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn -> query($sql);
    $qtd = $res -> num_rows;

    if($qtd > 0){
        print "<table class= 'table table - houver 
        table-striped table-bordered'>";
      
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data De Nascimento</th>";
            print "<th>ações</th>";
            print"</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print"<td>
                    <button onclick=\" location.href='?page=editar&id=".$row->id."'\" class = 'btn btn-success'>editar</button>


                    <button onclick=\"if(confirm('tem certeza que deseja excluir esse usuario ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class = 'btn btn-danger'>exluir</button>
            
                  </td>";
            print"</tr>";

        }
        print "</table>";
    }else{
        print "<p class ='alert alert-danger'>não encotrou resultados ;(</p>";
    }
?>