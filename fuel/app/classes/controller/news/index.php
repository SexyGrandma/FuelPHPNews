<?php

/**
 *
 * Отображает список новостей
 *
 * @package  app
 * @extends  Controller_News_Base
 */
class Controller_News_Index extends Controller_News_Base
{
    /**
     * Отображает список новостей
     */
    public function action_index()
    {
        $pagination_config = array(
            'pagination_url' => '/news/index/',
            'total_items'    => Model_New::count(),
            'per_page'       => 6,
            'uri_segment'    => 3,
        );
        $pagination = Pagination::forge('news_pagination', $pagination_config);

        $news = Model_New::query()
            ->order_by('date', 'desc')
            ->rows_offset($pagination->offset)
            ->rows_limit($pagination->per_page)
            ->get();

        $data = array(
            'news' => $news,
            'pagination' => $pagination
        );

        $this->template->title = 'Новости';
        $this->template->content = View::forge('news/index', $data, false);
    }

}
