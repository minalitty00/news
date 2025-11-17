<?php
$page_title = "Мировые Новости - Качественная журналистика";
include 'includes/header.php';
require_once 'function/calc_functions.php';
?>
<section class="breaking-news">
    <div class="container">
        <div class="breaking-label">СРОЧНЫЕ НОВОСТИ</div>
        <div class="breaking-text">
            <span class="breaking-tag">LIVE</span>

        </div>
    </div>
</section>
<div class="calculator-container">
    <h1>Калькулятор</h1>
    <form id="calculator-form" method="POST" action="">
        <div class="form-group">
            <label for="num1">Первое число:</label>
            <input type="number" id="num1" name="num1" step="any" required>
            <div class="error" id="error-num1">Пожалуйста, введите корректное число</div>
        </div>

        <div class="form-group">
            <label for="operator">Операция:</label>
            <select id="operator" name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
        </div>
        <div class="form-group">
            <label for="num2">Второе число:</label>
            <input type="number" id="num2" name="num2" step="any" required>
        </div>


        <button style="background-color: darkslategray; border-color: darkslategray" type="submit" class="btn btn-primary">Вычислить</button>
    </form>

    <div class="result">
        <div>Результат: <?php print calculate()?></div>
        <div class="result-value" id="result-value">-</div>
    </div>

    <div class="history">
        <h3>История вычислений:</h3>
        <div id="history-list">
            <?php print(history_show());?>
        </div>
    </div>
</div>