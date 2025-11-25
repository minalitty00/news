<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class JsonPostRepository implements PostRepositoryInterface
{
    private string $file;


    public function __construct(PostRepositoryInterface $factory, string $file = ROOT_PATH . '/storage/posts.json')
    {

        $this->file = $file;
    }

    private function read(): array
    {
        $data = file_get_contents($this->file);
        return json_decode($data, true) ?: [];
    }

    private function write(array $data): void
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }


    public function create(array $data): Post
    {
        $posts = $this->read();
        $id = max(array_column($posts, 'id')) + 1;
        $newPost = ['id' => $id] + $data;
        $posts[] = $newPost;
        $this->write($posts);
        $newPost['filename'] = 'post_' . $id;
        return $this->factory->create($newPost);
    }


}