<?php

/**
 *
 * Отображает одну новость
 *
 * @package  app
 * @extends  Controller_News_Base
 */
class Controller_News_Item extends Controller_News_Base
{
    /**
     * Отображает одну новость
     */
    public function action_view($id)
    {
        $new = Model_New::find( (int) $id );

        if (empty($new->id)) {
            $data['title'] = 'Такой новости в системе нет';
            return Response::forge(View::forge('welcome/404', $data), 404);
        }

        $data = array(
            'new' => $new
        );
        $this->template->title = $new->title;
        $this->template->content = View::forge('news/item', $data, false);
    }


}
