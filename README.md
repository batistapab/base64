<h1>Modelo de conversão de imagem para base 64 usando PHP.</h1>

Na index.php tem um modelo básico de conversão da imagem para PHP.
Em upload.html e upload.php há um modelo para converter imagens enviadas por upload para base 64, 
este exemplo é bem útil quando você não quer criar diretórios.

Algumas vantagens:
<ul>
    <li>A imagem no banco fica com um tamanho 56Kb;</li>
    <li>Você tiver a possibilidade poderia utilizar um banco só para armazenar estas imagens;</li>
    <li>O carregamento na tela é mais rápido.</li>
</ul>

Desvantagens:

<ul>
    <li>Ocupa um espaço no banco;</li>
    <li>Se o banco estiver indisponível não haverá o carregamento da imagem.</li>
</ul>
