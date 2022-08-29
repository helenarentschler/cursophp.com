<?php
    $arquivo = 'arquivo.pdf';

    $conteudo = "Ola, mundo!\r\n";

    $tamanhoArquivo = filesize($arquivo);

    $arquivoAberto = fopen($arquivo, 'r'); // Read only

    //fwrite($arquivoAberto, $conteudo);

    // Enquanto n for o fim do arquivo aberto 
    while (!feof($arquivoAberto)) {
        // Pega uma linha por vez 
        $linha = fgets($arquivoAberto, $tamanhoArquivo);

        echo $linha;
    }

    fclose($arquivoAberto);
?>