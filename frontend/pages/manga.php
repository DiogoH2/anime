<?php require './components/header.php' ?>
<?php require '../../backend/banco/Lista/lerManga.php' ?>
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
    <article>
    <div class="container-fluid d-flex justify-content-center">
            <section class="container mangasAll row pt-5">
                <h2 class="pt-4">Mangás</h2>
                <?php $registroManga = lerManga();
                foreach ($registroManga as $registros) { ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="cartao mb-3">
                        <img class="card-img-top" src="../../backend//banco//uploads/<?php echo $registros['imagem']?>" alt="Card image cap" height="298px" width="440px">
                        <div class="descricaoCard">
                            <h1 class="titleSerie text-center"><?php echo $registros['nome']?></h1>
                            <p class="description">Status: <?php echo $registros['statuss']?></p>
                            <p class="description">Tipo: <?php echo $registros['tipo']?></p>
                            <p class="description">Capitulos: <?php echo $registros['capitulos']?></p>
                            <p class="description">Ano: <?php echo date ('d/m/y', strtotime($registros['ano']))?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>
    </div>
</article>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

</body>
</html>

<?php require './components/footer.php'?>