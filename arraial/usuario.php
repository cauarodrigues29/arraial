<?php
            if ((isset($_POST['nome'])) && (isset($_POST['email']))) {
                require("db/conexao.php");
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];


                $sql2 = "select * from cadastro where email='$email' ";
                $query = $con->query($sql2);
                $row = $query->num_rows;

                if ($row == 0) {

                    if ($nome == "" || $nome == null) {
                        echo("1");
                    }
                   
                    if ($result = mysqli_query($con, "INSERT INTO cadastro(nome, email, senha) VALUES('$nome','$email',md5('$senha'))")) {
                        echo "<div style=color:white> --------------Cadastrado com sucesso!---------------- </div>";
                        
                        /*header("Location: index.php");*/
                       
                    }
                } else {

                   
                }
            }
            ?>

        
