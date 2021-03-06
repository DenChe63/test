<?php

include_once ROOT. '/models/News.php';

class NewsController {

    public function actionIndex()
    {
        $news = new News();
        $newsList = $news->getNewsList();

        require_once(ROOT . '/views/news/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemByID($id);

            require_once(ROOT . '/views/news/view.php');
        }

        return true;

    }

}
