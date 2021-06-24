<?php
require $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/logic/galery-logic.php';
?>
<a href="/">Вернуться на главную</a>
<h1>Гарелерия загруженных фотографий</h1>
<form action="../../logic/delete-img.php" method="post">
    <div class="container">
        <?php
        getAllImg();
        ?>
    </div>
    <input type="submit" class="btn-delete" value="Удалить выбранные элементы" />
</form>
</body>
</html>