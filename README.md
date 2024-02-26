# lista-01-udwmj-2024 João Victor Ramiro

Lista de Atividades 01<br />
Centro Universitário Una Betim<br />
João Victor Ramiro<br />
RA 62029233<br />

## percentage.js

Este script cria uma váriavel numérica com o nome de initialValue e, por não ser uma linguagem tipada, facilmente insere o valor inteiro 10.<br />
O script entra em uma iteração for que começa em 0 e vai até 364, ou seja, ele percorre o código dentro de for{} 365 vezes.<br />
Dentro de for{} o script pega o valor de initialValue e soma com 1% de initialValue, assim aumentando 1% a cada iteração.<br />
Para obter 1% de um valor é necessário multiplicar ele pelo decimal 0.01.<br />
Ao fim ele utiliza parseInt(initialValue), uma função de JS, para arredondar o valor para um inteiro, ou seja, sem casas decimais.<br />
Através de console.log ele escreve na tela o initialValue após aumentar 1% por 365 vezes.<br />
Para concatenar o valor na string, utilizei %s dentro da string e atribui o valor fora de parenteses no console.log separando por vírgula.<br />

## cone.php

Este script declara duas variáveis, $radius e $height, sendo respectivamente raio e altura.<br />
A proposta do código é extrair valores como Área Lateral, Área da Base e Área Total de um cone através dos valores de raio e altura.<br />
A área lateral é declarada como resultado do cálculo, provindo de uma fórmula, Pi * $radius * sqrt($height² + $radius²).<br />
O valor de Pi é adquirido pela função PHP Pi().<br />
A função sqrt representa uma função matemática que retorna a raiz quadrada do que está dentro dos parentenses.<br />
A potência em PHP é aplicada utilizando dois asteriscos.<br />
A área da Base e a Área total também utilizam estes conceitos.<br />
Ao fim do código ele utiliza a nomenclatura echo, abre aspas e dentro está o que será escrito no console para vizualização.<br />
As variáveis são concatenadas utilizando $ seguido do nome da variável dentro da string.<br />
PHP_EOL é utilizado para gerar uma quebra de linha no texto escrito no console.<br />
