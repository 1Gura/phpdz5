<?php
if ($_POST['upload'] && !empty($_FILES)) {
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $totalError = $_FILES['filename']['error'];
    $total_files = count($_FILES['filename']['name']);
    $allOk = false;
    $atLeastOne = false;
    foreach ($totalError as $error) {
        if (!empty($error)) {
            header("Location: ../index.php?response=error");
            exit();
        }
        $allOk = true;
    }

    if ($allOk) {
        $allType = $_FILES['filename']['type'];
        $allSize = $_FILES['filename']['size'];
        $allTmpName = $_FILES['filename']['tmp_name'];
        $k=0;
        for ($i = 0; $i < $total_files; $i++) {
            if (
                $allType[$i] === 'image/png' ||
                $allType[$i] === 'image/jpeg' ||
                $allType[$i] === 'image/jpg' &&
                $allSize[$i] <= 5242880 &&
                $k !== 5) {
                move_uploaded_file($allTmpName[$i], $uploadPath . $_FILES['filename']['name'][$i]);
                $atLeastOne = true;
                $k++;
            }
        }
        if(!$atLeastOne) {
            header("Location: ../index.php?response=zero");
            exit();
        }
        header("Location: ../index.php?response=ok");
        exit();
    }
    header("Location: ../index.php?response=error");
    exit();
}



