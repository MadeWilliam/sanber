<!-- Buatlah sebuah function hitung() yang menerima satu parameter berupa string. Function akan menghitung hasil sesuai string tersebut dan mengembalikan nilai hasil perhitungannya. String tersebut hanya menerima 1 operasi perhitungan saja yaitu operasi sebagai berikut: (*) perkalian, (:) pembagian, (+) penjumlahan, (-) pengurangan, dan (%) modulus.
 -->

<?php

function hitung($string_data)
{
    // Pseudocodes:
    // 1. for loop from start to end
    // 2. if met operation break
    // 3. put each letter in new variable named 'firstNumber'
    // 4. for back loop from end to start
    // 5. if met operation break 
    // 6. put each letter in new variable named 'secondNumber'
    // 7. put the operation just before break into new variable named 'operator'
    // 8. change var numbers type from string to number 
    // 9. calculate the value using if switch based on 'operator'

    $firstNumber = '';
    $secondNumber = '';
    $result = '';
    $operator = '';
    $j = 0;

    for ($i = 0; $i < strlen($string_data); $i++) {
        if ($string_data[$i] == '+' || $string_data[$i] == '-' || $string_data[$i] == '*' || $string_data[$i] == ':' || $string_data[$i] == '%') {
            $operator = $string_data[$i];
            break;
        }
        $firstNumber .= $string_data[$i];
    }

    for ($i = strlen($string_data)-1; $i >= 0; $i--) {
        if ($string_data[$i] == '+' || $string_data[$i] == '-' || $string_data[$i] == '*' || $string_data[$i] == ':' || $string_data[$i] == '%') {
            $operator = $string_data[$i];
            break;
        }
        $secondNumber .= $string_data[$i];
    }


    $firstNumber = intval($firstNumber);
    $secondNumber = intval(strrev($secondNumber));
    
    switch ($operator) {
        case '+':
            $result = $firstNumber + $secondNumber;
        break;
        case '-':
            $result = $firstNumber - $secondNumber;
        break;
        case '*':
            $result = $firstNumber * $secondNumber;
        break;
        case ':':
            $result = $firstNumber / $secondNumber;
        break;
        case '%':
            $result = $firstNumber % $secondNumber;
        break;
        default:
            $result = "invalid calculation";
            break;
    }
    return $result;
}

// TEST CASES
echo hitung("102*2"); //204
echo "<br>";
echo hitung("2+3"); //5
echo "<br>";
echo hitung("100:25"); //4
echo "<br>";
echo hitung("10%2"); //0
echo "<br>";
echo hitung("99-2"); //97
