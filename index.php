<?php

$imagem_base_64 = base64_encode(file_get_contents("careca.jpg"));

echo '<img src="data:image/png;base64,'. $imagem_base_64 .'" alt="" />';


?>
