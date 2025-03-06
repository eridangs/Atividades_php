<?php
require_once('menu_ativ.php');
?>
<?php
$arquivo = 'notas.txt';

if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);
    echo "Conteúdo do arquivo:\n";
    echo $conteudo . ''."\n";
} else {
    echo "O arquivo $arquivo não existe.\n";
}

$textoAdicional = "\nFinal do conteúdo";

if (file_put_contents($arquivo, $textoAdicional, FILE_APPEND) !== false) {
    echo "<br>";
    echo "\nTexto adicionado ao final do arquivo com sucesso.\n";
} else {
    echo "\nErro ao escrever no arquivo.\n";
}
echo $textoAdicional . "\n";
?>