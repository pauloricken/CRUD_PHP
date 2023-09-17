<?php
   switch ($_REQUEST["acao"]){
    case 'cadastrar':
       $nome = $_POST["nome"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) values ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
        $res = $conn->query($sql);

        if ($res==true) {
           print "<script>alert('cadastrado com sucesso');</script>";
           print "<script>location.href='?page=listar';</script>";
        }else{

                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";

        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
         
        $sql = "UPDATE usuarios SET  nome = '{$nome}', email = '{$email}',  senha='{$senha}', data_nasc= '{data_nasc}'
        WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res==true) {
           print "<script>alert('cadastro editado  com sucesso');</script>";
           print "<script>location.href='?page=listar';</script>";
        }else{

                print "<script>alert('alteração não foi possivel');</script>";
                print "<script>location.href='?page=listar';</script>";

        }
            break;

            case 'excluir':
               $sql= "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

               $res = $conn->query($sql);

               if ($res==true) {
                  print "<script>alert(' exluído com sucesso');</script>";
                  print "<script>location.href='?page=listar';</script>";
               }else{
       
                       print "<script>alert('não foi possivel excluír');</script>";
                       print "<script>location.href='?page=listar';</script>";
       
               }
                break;
        
   }

   ?>