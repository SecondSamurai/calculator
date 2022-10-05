<?php

$str = '1 + 10000 - 9999 + 4';

$strEndSolution = '';
$strEndSolution = calculator($str);
echo $strEndSolution;

function calculator(string $str)
{
    $solution = 0;
    $arrNumb = [];
    $arrOp = [];
    $nCount = 0;
	$opCount = 0;

    echo "Example to solve : " . $str . "\n";

    if ($str[0] === '+' || $str[0] === '-') 
        return 'Plus or minus at the beginning of the line !';

    for ($i = 0; $i < strlen($str); $i++) 
    {
        if ($str[$i] !=='+' && $str[$i] !== '-')
        {
            $arrNumb[$nCount] .= $str[$i];
        }
        else 
        {
            if ($str[$i] === '+') 
                $arrOp[$opCount] = '+';

            if ($str[$i] === '-')
                $arrOp[$opCount] = '-';

            $opCount++;
            $nCount++;
        }
    }

    if ($nCount >= 5)
        return 'There is too much elements in the line !';

    $solution = $arrNumb[0];

    for ($i = 1, $k = 0; $i < 5; $i++) 
    {
        if ($arrOp[$k] ==='+')
            $solution += $arrNumb[$i];

        elseif ($arrOp[$k] === '-')
            $solution -= $arrNumb[$i];

        $k++;
    }

    $str = '';
    $str = $str .= "Result : " .$solution;

    return $str;
}


    






