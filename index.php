<?php
require $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
//error_reporting(E_ALL);
?>
<h1>FILES</h1>
<a href="./route/gallery">Перейтки к галерее</a>
<?php
if (!empty($_GET['response'])) {
    if ($_GET['response'] === 'ok') {
        ?>
        <div class="success">Файлы успешно добавлены!</div>
    <?php } else if ($_GET['response'] === 'zero') { ?>
        <div class="zero">Ни одного файла не было добавлено!</div>
        <?php
    } else if ($_GET['response'] === 'error') { ?>
        <div class="error">Ошибка добавления!</div>
    <?php }
} ?>

<form action="logic/files.php" method="post" enctype="multipart/form-data">
    <span>Загрузить файл(ы)...</span>
    <input type="file" name='filename[]' multiple>
    <input type="submit" name="upload">
</form>