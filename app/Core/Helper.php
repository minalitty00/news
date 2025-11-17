<?php

namespace App\Core;

class Helper
{
    public function dd($something)
    {
        echo '<pre>';
        var_dump($something);
        echo '</pre>';
        exit();
    }
}