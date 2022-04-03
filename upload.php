<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$extensaoDaImagem = pathinfo($target_file,PATHINFO_EXTENSION);
// Verifica se o arquivo atual é uma imagem ou não
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Este arquivo não é uma imagem!";
        $uploadOk = 0;
    }
}
// verificar o tamanho do arquivo
if ($_FILES["imagem"]["size"] > 500000) {
    echo "Desculpe o arquivo excedeu o tamanho permitido!";
    $uploadOk = 0;
}
// Permitir formatos expecificos de imagens
if($extensaoDaImagem != "jpg" && $extensaoDaImagem != "png" && $extensaoDaImagem != "jpeg" && $extensaoDaImagem != "gif" ) {
    echo "Desculpe, somente arquivos do tipo JPG, JPEG, PNG & GIF são permitidos.";
    $uploadOk = 0;
}
// Verifica $uploadOk se tiver erro recebe o valor 0 e exibe o erro
if ($uploadOk == 0) {
    echo "Desculpe, sua imagem não pode ser enviada.";
// Se estiver tudo ok exibe o resultado abaixo ou você pode implementar a inserção do texto da conversão usando base64 para o banco 
} else {
	
		$imagem = base64_encode(file_get_contents($_FILES["imagem"]["tmp_name"]));
	
		echo sprintf('<img src="data:image/png;base64,%s" alt="" />',$imagem);
		//Caso você prefira salvar a imagem como base 64.
       		echo sprintf('<br /><h1>Imagem convertida em base64 </h1><textarea cols='120' rows='7'>%s</textarea>',$imagem);;
}
?>
