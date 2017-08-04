<?php

require_once ('ClassesLoader.php');

// Инициализация массива директорий Классов
$classesDirs = [
    'models'
];

// Загрузка Классов
ClassesLoader::load($classesDirs);


$shopDB = new DB('127.0.0.1', 'shop', 'root', 'MoodvinAs77');

var_dump( $shopDB->getAllProducts() );



