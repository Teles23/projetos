<?php 

   include_once('../config/connection.php');
   $stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image, idCategory) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE, :IDCATEGORY) ");

   $title = $_POST['title'];
   $data = $_POST['data'];
   $description = $_POST['description'];
   $idCategory = 1;

   $arquivo = $_FILES['image'];

   move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

   $image = 'uploads/'.$arquivo['name'];


   $stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
   $stmt->bindParam(":IDCATEGORY", $idCategory);
   $stmt->bindParam(":IMAGE", $image);
   $stmt->execute();

   /*redireciona o arquivo */
   header("Location:view2.php");

?>
