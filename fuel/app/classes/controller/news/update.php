<?php

/**
 * Обновляет таблицу news
 *
 * @package  app
 * @extends  Controller
 */
class Controller_News_Update extends Controller
{
    /**
     * Обновляет таблицу новостей
     */
    public function action_index()
    {
        // Получаем RSS-ленту новостей
        $xml = simplexml_load_file('http://www.gazeta.ru/export/rss/auto.xml');
        $arNews = [];
        if ($xml !== false){
            foreach($xml->channel->item as $item) {
                $arNews[] = array(
                    'title' => (string) $item->title,
                    'body' => strip_tags($item->description),
                    'link' => (string) $item->link,
                    'img' => (string) $item->enclosure['url'],
                    'date' => date('Y-m-d H:i:s',strtotime($item->pubDate)),
                );
            }
        }

        // Сохраняем новости, которых у нас нет
        if (count($arNews)) {
            foreach ($arNews as $arNew) {
                $new = Model_New::find('first', array(
                    'where' => array(
                        array('link', $arNew['link']),
                    )
                ));
                if (empty($new->id)) {
                    $new = Model_New::forge($arNew);
                    $new->save();
                }
                unset($new);
            }
        }

        // Возвращаемся на предыдущую страницу
        Response::redirect('/');
    }

}
