<?php
function multiply_matrices($matrix1, $matrix2) {
    $cols_matrix1 = count($matrix1[0]);
    $rows_matrix2 = count($matrix2);
    if ($cols_matrix1 != $rows_matrix2) {
        echo "Niepoprawne wymiary macierzy. Liczba kolumn pierwszej macierzy musi być równa liczbie wierszy drugiej macierzy.\n";
        return;
    }

    $rows_result = count($matrix1);
    $cols_result = count($matrix2[0]);

    $result = [];
    for ($i = 0; $i < $rows_result; $i++) {
        $result[$i] = array_fill(0, $cols_result, 0);
    }

    for ($i = 0; $i < $rows_result; $i++) {
        for ($j = 0; $j < $cols_result; $j++) {
            for ($k = 0; $k < $cols_matrix1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    return $result;
}

$matrix1 = [[1, 2, 3], [4, 5, 6]];
$matrix2 = [[7, 8], [9, 10], [11, 12]];

$result = multiply_matrices($matrix1, $matrix2);
if ($result !== NULL) {
    echo "Wynik mnożenia macierzy:\n";
    foreach ($result as $row) {
        echo implode(" ", $row) . "\n";
    }
}
?>
