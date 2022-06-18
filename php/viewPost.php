<?php 
include "config/connection.php"; 
$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php include "nav.php";?>


<div class="container">
	<?php foreach ($results as $post): ?>
		<h1><?= $post['title'] ?></h1>
		<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		<p style="width: 500px; ">
		<img src="<?= $post['image'] ?>" class="card-img-top" alt= "<?= $post['title'] ?>">
		</p>
		<p><?= $post['description'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>
</body>
</html>
