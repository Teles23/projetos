<?php 

include_once('../config/connection.php');

include_once('session.php');
$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>
<?php
include "footer.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	
    <title>Document</title>
</head>
<body>

<main class="col-md-9 col-lg-10">
            <div class="container">
                <h1 id="main-title">Editar Postagem</h1>
	</div>
</main>
<form action="editar-fim.php" method="post" enctype="multipart/form-data">
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>

</body>
</html>




