<?php

use \Application\Models\News;

class NewsController
{
    //public $cont = 'News';

    public function actionAll()
    {
        $article = new News();

        $items = $article->findAll();
        if (empty($items)){
            throw new HTTP404Exception('Отсутсвуют записи в БД');
        }

        $controller = Address::part(1);

        $ctrl = !empty($controller) ? ucfirst($controller) : 'News';
        $className = $ctrl.'View';

        $view = new $className;
        $view->items = $items;

        $view->display('all.php');
    }

    public function actionOne()
    {
        $controller = Address::part(1);
        $ctrl = !empty($controller) ? ucfirst($controller) : 'News';
        $className = $ctrl.'View';

        $id = Address::part(3);
        //$id = !empty($record) ? $record : 0;// throw new HTTP404Exception('Отсутсвует id заданой новости');
        if (empty($id)){
            throw new HTTP404Exception('Отсутсвует id заданой новости');
        }

        $article = new News();
        if (!$article){
            throw new HTTP404Exception('Выбранной новости нет в БД');
        }

        $view = new $className;
        $view->item = $article->findOneByPk($id);

        $view->display('one.php');
    }

    public function actionErrors()
    {
        echo ModelException::getExceptions();
    }
}
