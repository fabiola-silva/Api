<?php
/**
 * Created by PhpStorm.
 * User: Christian Reis
 * Date: 17/05/2018
 * Time: 20:14
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="salvardoc.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" value="Imagem" placeholder="Imagem" required>
        <input type="submit" name="save_gift" value="Cadastrar">
</form>
</body>
</html>
