<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo Inferior</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="number" name="num" placeholder='Digite um número:'>
        <button type="submit">enviar</button>
    </form>
    <?php if($_GET['numpri']){ ?>
        <h5>Número: <?= $_GET['num'] ?></h5>
        <h5>Número inferior primo: <?= $_GET['numpri'] ?></h5>
    <?php } ?>
</body>
</html>