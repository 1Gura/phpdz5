<?php
if ($_POST['upload']) {
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $totalError = $_FILES['filename']['error'];
    $total_files = count($_FILES['filename']['name']);
    $allOk = false;
    foreach ($totalError as $error) {
        if (!empty($error)) {
            var_dump("Ошибка");
            return;
        }
        $allOk = true;
    }

    if ($allOk) {
        $allType = $_FILES['filename']['type'];
        $allSize = $_FILES['filename']['size'];
        $allTmpName = $_FILES['filename']['tmp_name'];
        for ($i = 0; $i < $total_files; $i++) {
            if (
                $allType[$i] === 'image/png' ||
                $allType[$i] === 'image/jpeg' ||
                $allType[$i] === 'image/jpg' &&
                $allSize[$i] <= 5242880) {
                move_uploaded_file($allTmpName[$i], $uploadPath . $_FILES['filename']['name'][$i]);
            }
        }
    }
}



