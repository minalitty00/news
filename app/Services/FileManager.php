<?php

namespace App\Services;

use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use Exception;

class FileManager
{

    private $contentDir;
    private string $postsDirectory;
    public function __construct($contentDir  = CONTENT_PATH)
    {
        // Приводим путь к абсолютному и убираем лишние слэши
        $this->contentDir = rtrim(realpath($contentDir), '/');

    }

    public function writeFile(string $filePath, string $content): bool
    {
        $dir = dirname($filePath);
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true)) {
                return false;
            }
        }
        return file_put_contents($filePath, $content) !== false;

    }



    /**
     * Чтение файла
     */
    public function readFile(string $filePath): ?array
    {
        $content = file_get_contents($filePath);
        if ($content === false) {
            return null;
        }
        return json_decode($content, true);
    }


    /**
     * Список файлов с расширением в директории
     */
    public function listFiles($dir, $extension = '.md')
    {
        $fullDir = $this->contentDir . '/' . ltrim($dir, '/');
        if (!is_dir($fullDir)) return [];
        $files = glob($fullDir . '/*' . $extension);
        return array_map(function ($f)
        {
            return str_replace($this->contentDir . '/', '', $f);
        }, $files);
    }

    /**
     * Список поддиректорий
     */
    public function listDirs($dir)
    {
        $fullDir = $this->contentDir . '/' . ltrim($dir, '/');
        if (!is_dir($fullDir)) return [];
        return array_filter(glob($fullDir . '/*'), 'is_dir');
    }

    /** Удаление файла */
    public function deleteFile(string $filePath): bool
    {
        return unlink($filePath);
    }

    /** Базовая директория постов */
    public function getPostsDirectory(): string
    {
        return $this->postsDirectory;
    }







}