<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$extensaoDaImagem = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// verificar o tamanho do arquivo
if ($_FILES["imagem"]["size"] > 500000) {
    echo "Desculpe o arquivo excedeu o tamanho permitido!";
    $uploadOk = 0;
}
// Permitir formatos expecificos de imagens
if($extensaoDaImagem != "jpg" && $extensaoDaImagem != "png" && $extensaoDaImagem != "jpeg"
&& $extensaoDaImagem != "gif" ) {
    echo "Desculpe, somente arquivos do tipo JPG, JPEG, PNG & GIF são permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Desculpe, sua imagem não pode ser enviada.";
// if everything is ok, try to upload file
} else {
		echo '<img src="data:image/png;base64,'. base64_encode(file_get_contents($_FILES["imagem"]["tmp_name"])) .'" alt="" />';
		//Caso você prefira salvar a imagem como base 64.
       echo "<br /><h1>Imagem convertida em base64 </h1><textarea cols='120' rows='7'>".base64_encode(file_get_contents($_FILES["imagem"]["tmp_name"]))."</textarea>";
}
?>