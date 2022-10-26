<?php

namespace Fuel\Migrations;

class Create_news_table
{

    function up()
    {
        \DBUtil::create_table('news', array(
            'id' => array('type' => 'int', 'constraint' => 5, 'auto_increment' => true),
            'title' => array('type' => 'varchar', 'constraint' => 255, 'comment' => 'Заголовок'),
            'body' => array('type' => 'text', 'comment' => 'Текст'),
            'link' => array('type' => 'varchar', 'constraint' => 255, 'comment' => 'Ссылка на оригинал'),
            'img' => array('type' => 'varchar', 'constraint' => 255, 'comment' => 'Фото'),
            'date' => array('type' => 'datetime', 'comment' => 'Дата публикации'),
        ), array('id'));
    }

    function down()
    {
        \DBUtil::drop_table('news');
    }
}
