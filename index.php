<!doctype html>
<html lang="en">
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . './files.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FILES</h1>
    <a href="">Перейтки к галерее</a>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <span>Загрузить файл...</span>
        <input type="file" name = 'filename[]' multiple>
        <input type="submit" name="upload">
    </form>
</body>
</html>