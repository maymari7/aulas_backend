<?php
// MANIPULAÇÃO DE ARRAYS
//      0        1          2          3
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo", "Maria", "João", "Pedro"]; // array de string
$total = count($nomes); // count - conta o número de elementos do array
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1]; // aqui acessamos o último valor do array, usando a função count para contar o número de elementos do array, e subtraindo 1 para acessar o índice do último elemento, já que os índices começam em 0.
echo "<hr>";
for($i=0;$i<count($nomes);$i++){ // loop para pegar cada valor do array, usando a função count para contar o número de elementos do array, e usando o índice $i para acessar cada valor do array
	echo $nomes[$i]."<br>";
}
echo "<hr>";
for($i=0;$i<4;$i++){ // loop para pegar os 4 primeiros valores do array, usando o índice $i para acessar cada valor do array
	echo $nomes[$i]."<br>";
}
?>
<hr>
<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>"; // print_r - imprime o array inteiro, mostrando o índice de cada valor, pre - formata a saída do array, deixando cada valor em uma linha diferente, e mostrando o índice de cada valor
array_push($uf, "TO"); // array_push - adiciona um valor no final do array, o primeiro parâmetro é o nome do array, e o segundo parâmetro é o valor que queremos adicionar
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR"); //qual é a posição do PR no array?
array_pop($uf); // array_pop - remove o último valor do array, o parâmetro é o nome do array, e ele remove o último valor do array
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf); // sort - ordena os valores do array em ordem alfabética, o parâmetro é o nome do array, e ele ordena os valores do array em ordem alfabética
echo "<pre>";print_r($uf);echo "</pre>";
?>

<br>

UF<select name="uf">
    <option>selecione o uf</option>
    <?php
    for ($i=0; $i<count($uf); $i++){
        echo "<option>".$uf[$i]."</option>";
    }
    ?>
</select>

<hr>

<?php
    $estudante = [
        "id" => 1,
        "nome" => "João",
        "nota" => 8.5
    ];

    foreach ($estudante as $posicao => $valor) { // leitura: para cada valor do array $estudante, a variável $posicao recebe o índice do valor, e a variável $valor recebe o valor do índice, e o loop continua até que todos os valores do array sejam lidos
        echo "<p><strong>$posicao:</strong> $valor</p>";
    }
?>

<hr>

<?php
// ARRAY MULTIDIMENSIONAL - é um array que contém outros arrays como valores, podendo ser indexado ou associativo   
    $mult= [
        [10, 20, 30],
        [40, 50, 60],
        [70, 80, 90]
    ];
    for ($i=0; $i<3; $i++){ // linhas
        for ($j=0; $j<3; $j++){ // colunas
            echo $mult[$i][$j]." ";
        }
        echo "<hr>";
    }
?>