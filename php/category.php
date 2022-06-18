<?php
include_once('config/connection.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT category.name_cat, posts.title, posts.image, posts.description, posts.data FROM category INNER JOIN posts ON category.id_cat = posts.idCategory WHERE id_cat = :id');
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categorias</title>
</head>
<body>
	<?php include('nav.php');?>
	<div class="container">
	
	<?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p style="width: 500px;"><img src="<?= $post["image"]?>" class="card-img-top" alt="..."></p>
		<p><?= $post["name_cat"] ?></p>
		<p><?= $post["description"] ?></p>
		<p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
<?php endforeach; ?>
</div>
<?php include('footer.php');?>
</body>
</html>