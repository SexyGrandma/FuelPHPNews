<?php

class Model_New extends Orm\Model {

    protected static $_table_name = 'news';
    protected static $_properties = array(
        'id',
        'title',
        'body',
        'link',
        'img',
        'date',
    );

    // Очищаем таблицу
    public static function truncate()
    {
        \DBUtil::truncate_table(self::$_table_name);
    }

}
