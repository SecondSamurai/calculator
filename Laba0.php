<?php

$str = '1 + 10000 - 9999 + 4';

$strEndSolution = calculator($str);
echo $strEndSolution;

function calculator(string $str): string
{
    $solution = 0;
    $arrayNumbers = [];
    $arrayOperations = [];
    $numbersCount = 0;
    $operationsCount = 0;

    echo "Example to solve : " . $str . "\n";

    if ($str[0] === '+' || $str[0] === '-')
        return 'Plus or minus at the beginning of the line !';

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== '+' && $str[$i] !== '-') {
            $arrayNumbers[$numbersCount] .= $str[$i];
        } else {
            if ($str[$i] === '+')
                $arrayOperations[$operationsCount] = '+';

            if ($str[$i] === '-')
                $arrayOperations[$operationsCount] = '-';

            $operationsCount++;
            $numbersCount++;
        }
    }

    if ($numbersCount >= 5)
        return 'There is too much elements in the line !';

    $solution = $arrayNumbers[0];

    for ($i = 1, $k = 0; $i < 5; $i++) {
        if ($arrayOperations[$k] === '+')
            $solution += $arrayNumbers[$i];

        elseif ($arrayOperations[$k] === '-')
            $solution -= $arrayNumbers[$i];

        $k++;
    }

    $str = '';
    $str = $str .= "Result : " . $solution;

    return $str;
}
