<?php

include 'db/conexao.php';

           
                $email= $_POST['email'];
                $senha= $_POST['senha'];
               
                $sql= "select * from cliente where email='$email' and senha='$senha' ";
                $query=$con->query($sql);
                $row=$query->num_rows;
               
                if ($row==1){
                     header('Location:pagina.php');                
                   
                }
                else{
                    echo("não logado");
                }
      ?>
