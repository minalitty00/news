<?php

namespace App\Models;

class  Article
{
    public function allTegs()
    {
        return [
            'travel',
            'food',
            'fashion'
        ];
    }

    public function allArticles()
    {
        function generateRandomHexColor() {
            $color = dechex(rand(0x000000, 0xFFFFFF));
            // Pad with leading zeros if necessary to ensure 6 characters
            return  str_pad($color, 6, '0', STR_PAD_LEFT);
        }
        return [
            '1'=>[
                'title' =>'news 1',
                'description' =>'news description 1',
                'content' =>'news description 1',
                'image' =>'https://placehold.jp/30/'.generateRandomHexColor().'/ffffff/770x400.png?text=news+image+1',
            ],
            '2'=>[
                'title' =>'news 2',
                'description' =>'news description 2',
                'content' =>'news description 2',
                'image' =>'https://placehold.jp/30/'.generateRandomHexColor().'/ffffff/770x400.png?text=news+image+2 ',
            ],
            '3'=>[
                'title' =>'news 3',
                'description' =>'news description 3',
                'content' =>'news description 3',
                'image' =>'https://placehold.jp/30/'.generateRandomHexColor().'/ffffff/770x400.png?text=news+image+3',
            ],
            '4'=>[
                'title' =>'news 4',
                'description' =>'news description 4',
                'content' =>'news description 4',
                'image' =>'https://placehold.jp/30/'.generateRandomHexColor().'/ffffff/770x400.png?text=news+image+4',
            ],
        ];

    }

}