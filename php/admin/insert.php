<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <title>Inserir</title>
</head>
<body>
  <main>
    <div class="container">
      <form action="envia.php" method="POST" enctype="multipart/form-data" class="row g-3">
        <div class="col-mt-4">
          <label for="validationDefault01" class="form-label">Titulo</label>
          <input type="text" class="form-control" name="title" id="validationDefault01"  required placeholder="Digite o titulo">
        </div>
      
        <div class="col-mt-4">
          <label for="validationDefault02" class="form-label">Data</label>
          <input type="date" class="form-control" name="data"id="validationDefault02"  required>
        </div>
        <div class="col-mt-4">
          <label for="validationTextarea" class="form-label">Descrição</label>
          <textarea class="form-control" id="validationTextarea" placeholder="Descrição" required name="description"></textarea>
    
        </div>
        <div class="col-mt-4">
          Envie uma Imagem <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem "name="image" required />
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Publicar</button>
        </div>
      </form>
    
    </div>
  </main>  
</body>
</html>