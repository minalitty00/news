<?php

namespace App\Models;

class Post
{
    public int $id;
    public string $title;
    public string $description;
    public string $image;
    public string $content;


    public function __construct(
        int $id,
        string $title,
        string $description,
        string $image,
        string $content

    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->content = $content;
    }

}