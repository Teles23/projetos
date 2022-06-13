<?php 
include "config/connection.php"; 
include "nav.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php include('conteudo.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/comida.png">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<title>Blog :: Thiago Teles</title>
</head>
<body>
	<?php include('footer.php'); ?>

</body>
</html>