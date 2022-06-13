<?php
include_once('config/connection.php');

$buscar = $_POST['buscar'];
$stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pesquisa</title>
</head>
<body>
	<div class="container">
	<h2>Resultado da busca</h2>
	<?php foreach($search as $key => $value): ?>
		<h5 class="card-title">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["title"] ?>
		</a>
		</h5>
	<?php endforeach; ?>
</div>

	
</body>
</html>