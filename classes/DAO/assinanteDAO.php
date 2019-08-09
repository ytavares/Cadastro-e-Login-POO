<?php

    require_once ("conexao.php");

    class assinanteDAO{

        function __construct() {
            $this->con = new Conexao();
            $this->pdo = $this->con->Connect();
        }

        function cadastrar(assinante $entAssinante){
            try{
                $stmt = $this->pdo->prepare ('INSERT INTO assinantes(nomeAssinante,email,cpf,cep,numero,endereco,cidade,bairro,uf,senha) 
                VALUES (:nomeAssinante, :email, :cpf, :cep, :numero, :endereco, :cidade, :bairro, :uf, :senha)');

                $stmt->bindValue( ':nomeAssinante', $entAssinante->getNomeAssinante());
                $stmt->bindValue( ':email', $entAssinante->getEmail());
                $stmt->bindValue( ':cpf', $entAssinante->getCpf());
                $stmt->bindValue( ':cep', $entAssinante->getCep());
                $stmt->bindValue( ':numero', $entAssinante->getNumero());
                $stmt->bindValue( ':endereco', $entAssinante->getEndereco());
                $stmt->bindValue( ':cidade', $entAssinante->getCidade());
                $stmt->bindValue( ':bairro', $entAssinante->getBairro());
                $stmt->bindValue( ':uf', $entAssinante->getUf());
                $stmt->bindValue( ':senha', $entAssinante->getSenha());

                return $stmt->execute();
                

            } catch (PDOException $ex){
                echo "ERRO 01: {$ex->getMessage()}";
            }
        }

        function login($email, $senha){
            try{
                $stmt = $this->pdo->prepare("SELECT email, senha FROM assinantes WHERE email = :email AND senha = :senha");
                $param = array(
                    ":email" => $email,
                    ":senha" => $senha
                );

                $stmt->execute($param);

                if($stmt->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $ex) {
                echo "ERRO 02: {$ex->getMessage()}";
            }
        }

        function listaClientesNomes() {
            try{
                $stmt = $this->pdo->query("SELECT idAssinante,nomeAssinante FROM assinantes");

                while ($row = $stmt->fetch()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['idAssinante']."<br/>\n"?></th>
                        <td><?php echo $row['nomeAssinante'];?></td>
                        <td><button type="button" name="tDelete" class="btn btn-outline-danger">Deletar</button>
                        <button type="button" class="btn btn-outline-info">Info</button><br/></td>
                    </tr>
                    <?php
                }
            } catch (PDOException $ex) {
                echo "ERRO 03: {$ex->getMessage()}";
            }
        }

        /*function deletaUsuario(){
            try {
                $stmt = $this->pdo->prepare('DELETE FROM assinantes WHERE id = :id');
                $stmt->bindValue(':id', $entAssinante->setId()); 
                $stmt->execute();
                
                
                echo $stmt->rowCount(); 
              } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
              }
              ?>
        }*/
    }