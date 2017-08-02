<?php

require_once ('ClassesLoader.php');

// Инициализация массива директорий Классов
$classesDirs = [
    'models'
];

// Загрузка Классов
ClassesLoader::load($classesDirs);
