<?php

namespace Fuel\Migrations;

class Create_index_link_on_news_table
{

    function up()
    {
        \DBUtil::create_index('news', 'link', 'link', 'UNIQUE');
    }

    function down()
    {
        \DBUtil::drop_index('news', 'link');
    }
}
