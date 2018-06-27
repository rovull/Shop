<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()
	{

        $offset=1;

		$allProd=News::getAllProduct();
        $pagination=array();
        $pagination['perPage']=3;
        $pagination['currP']=isset($_GET['page'])?$_GET['page']:1;
        $pagination['offset']=($pagination['currP']*$pagination['perPage'])-$pagination['perPage'];
        $offset= $pagination['offset'];
        $pagination['link']='/index?page=';
        $pagination['pageCnt']=ceil($allProd/$pagination['perPage']);

        $newsList = News::getNewsList($offset);

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

