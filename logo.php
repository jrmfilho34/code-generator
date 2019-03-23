<?php


                                               //  fopen abre um arquivo ou url
$start = microtime(true);                      // Incio da contagem do tempo de execução
$handle = fopen("https://laravel.com/", "r");  // Cria um objeto de leitura laravel
$fp = fopen('data.blade.php', 'w');            //criar um objeto de leitura e escrita

                                               // feof verifica quando o $handle chega ao fim do seu armazenamento: limit 8K
while (!feof($handle)) {                       //loop para armazenar imprimir conteudo no arquivo data.blade.php
   $buffer = fgets($handle);                   // fegts lê um ponteiro de arquivo
   fwrite($fp, $buffer);                       // escreve o conteudo da variavel $buffer no arquivo $fp
}

fclose($fp);                                   // close the file 
fclose($handle);                               // close the file

$end = microtime(true);                        //termina a contagem
$tempo = $end - $start;                        //processo
echo $tempo;                                   //imprime a contagem







