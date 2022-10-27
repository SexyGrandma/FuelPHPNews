<?php

/**
 * Удаляет все новости из таблицы news
 *
 * @package  app
 * @extends  Controller
 */
class Controller_News_Truncate extends Controller
{
    /**
     * Удаляет все новости
     */
    public function action_index() {
        // Очищаем таблицу news
        Model_New::truncate();

        // Возвращаемся на предыдущую страницу
        Response::redirect('/');
    }

}
