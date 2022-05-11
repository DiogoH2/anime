<?php require './components/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <article class="Cadastro">
        <div class="container ConteudoCad">
            <form class="row g-3" action="../../backend/banco/index.php" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="col-md-6">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="date" class="form-control" id="ano" name="ano">
                </div>
                <div class="col-12">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Acompanhando ou finalizado">
                </div>
                <div class="col-12">
                    <label for="status" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Mangá ou Dorama">
                <div class="col-12">
                    <label for="foto" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="capitulos" class="form-label">Capitulos</label>
                    <input type="number" class="form-control" id="capitulos" name="capitulos">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Sign Up</button>
                </div>
            </form>
        </div>
</article>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php require './components/footer.php'?>