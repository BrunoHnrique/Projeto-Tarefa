<?php 

include_once("conection.php");

$data = $_POST;
$id; 
if(!empty($_GET["id"])){
    $id = $_GET["id"];

    if(!empty($id)){
        
        $query = "SELECT * FROM tarefa WHERE id=:id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id",$id);
        
        $stmt->execute();
        
        $contact = $stmt->fetch();

    }

}else{
    if(!empty($data)){
        if($data["type"] === "create"){
    
            $titulo = $data["titulo"];
            $tarefa = $data["tarefa"];
    
             $query = "INSERT INTO tarefa (titulo, tarefa) VALUES (:titulo,:tarefa)";
    
             $stmt = $conn->prepare($query);
    
             $stmt->bindParam(":titulo", $titulo);
             $stmt->bindParam(":tarefa", $tarefa);
    
    
            try{
                $stmt->execute();
                $_SESSION['msg'] = "TAREFA ADICIONADA COM SUCESSO";
            }catch(PDOException $e){
                $erro = $e->getMessage();
                echo "ERRO: $error"; 
            }
        }elseif ($data["type"] === "edit") {
            $id = $data["id"];
            $titulo = $data["titulo"];
            $tarefa = $data["tarefa"];

            $query = "UPDATE tarefa SET titulo = :titulo, tarefa = :tarefa WHERE id=:id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":titulo",$titulo);
            $stmt->bindParam(":tarefa",$tarefa);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "DADOS ATUALIZADOS COM SUCESSOS";

            }catch(PDOException $e){
                $erro = $e->getMessage();
                echo "ERRO: $erro";

            }
        }elseif ($data["type"] === "delete") {
            
            $id = $data["id"];

            $query = "DELETE  FROM tarefa WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id",$id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "TAREFA DELETADA COM SUCESSO";
                echo "dados excluidos kkkkkkkkkkk";
            }catch(PDOException $e){
                $erro = $e->getMessage();
                echo "ERRO: $erro";
            }

        }
        header('Location: ../index.php');
    }else{
        $query = "SELECT * FROM tarefa";
    
        $stmt = $conn->prepare($query);
    
        $stmt->execute();
    
        $contact = $stmt->fetchAll();
    }
}


?>