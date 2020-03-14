<?php

class Autoloader {
    public static function loader(string $className) {
        $basePath = $_SERVER['DOCUMENT_ROOT'] . '/../src/';
        $extension = '.php';

        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $fullPath = $basePath.$classPath.$extension;

        include_once($fullPath);
    }
}