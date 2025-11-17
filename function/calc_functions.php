<?php

function store_history($num1, $operator, $num2, $result)
{
    // Сохранение истории в файл
    $historyFile = 'calculator_history.txt';
    $history = "$num1 $operator $num2 = $result";
    $historyData = date('Y-m-d H:i:s') . " - ". $history."\n";
    file_put_contents($historyFile, $historyData, FILE_APPEND);
    return $history;
}

function calculate()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Ошибка: деление на ноль!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Неверный оператор!";
        }
       return store_history($num1, $operator, $num2, $result);
        //return $result;
    }
}

function history_show()
{
    // Чтение истории из файла и отображение ее
    $history_store='';
    if (file_exists('calculator_history.txt')) {
        $history = file_get_contents('calculator_history.txt');
        $history_store="<pre>$history</pre>";
    } else {
        $history_store= "История операций пуста.";
    }
    return $history_store;
}