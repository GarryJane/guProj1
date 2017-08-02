<?php
/**
 * Created by PhpStorm.
 * User: ddl
 * Date: 02.08.17
 * Time: 13:08
 */

abstract class ClassesLoader {
    const DEFDIRS = [ 'models' ];

    public function load($dirArr = self::DEFDIRS) {
        var_dump($dirArr);
    }

}
