<?php
if(!empty($_POST)) {
    foreach ($_POST as $img) {
        if (file_exists($img)) {
            unlink($img);
        }
    }
    header("Location: ../route/gallery");
    exit();
}
header("Location: ../route/gallery");
exit();
