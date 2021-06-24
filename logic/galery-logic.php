<?php
function getAllImg()
{
    $path = $_SERVER['DOCUMENT_ROOT'] . '/upload';
    if (file_exists($path)) {
        if (is_dir($path)) {
            $i = 0;
            $dir = scandir($path);
            if (!empty($dir)) {
                foreach ($dir as $img) {
                    $fullPath = $path . '/' . $img;
                    if (filetype($fullPath) === 'file') {
                        $i++;
                        ?>
                        <div class="item">
                            <img class="fill" src="<?= '/upload/' . $img ?>" alt="">
                            <div class="checkbox">
                                <label for="">Удалить</label>
                                <input type="checkbox" name="check<?=$i?>" value="<?=$fullPath?>">
                            </div>

                        </div>
                    <?php }
                }
                ?>
                <?php
            } else if($i === 0) {
                ?>
                <h1>Папка пуста!</h1>
                <?php
                return;
            }
        }
    }
}

