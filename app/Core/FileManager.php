<?php

namespace App\Core;

class FileManager
{
    /**
     * @var string
     */
    private $contentDir;

    public function __construct($contentDir  = CONTENT_PATH)
    {
        // Приводим путь к абсолютному и убираем лишние слэши
        $this->contentDir = rtrim(realpath($contentDir), '/');

    }

    /**
     * Список файлов с расширением в директории
     */
    public function listFiles($dir, $extension = '.md')
    {
        $fullDir = $this->contentDir . '/' . ltrim($dir, '/');
        if (!is_dir($fullDir)) return [];
        $files = glob($fullDir . '/*' . $extension);
        return array_map(function ($f) {
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



}