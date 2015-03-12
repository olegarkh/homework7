<?php

use Application\Models\News;

class AdminController
              extends NewsController
{

    public function actionEdit()
    {
        $id =Address::part(3);

        $view = new View;
        $news = new News;
        $view->item = $news->findOneByPk($id);

        $view->display('/../admin/editor.php');
    }
    public function actionSave()
    {
        $news = new News;
       /*
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $pathParts = explode('/', $path);
        */
        $news->id = Address::part(3);
        /*if (!empty($id)) {
             $news->id = $id;
        }*/

        $news->title = $_POST['title'];
        $news->text = $_POST['text'];

        $news->save();

        header('Location: /admin/edit/'.$news->id);
        //header('Location: index.php?ctrl=Admin&act=Edit&id='.$news->id);
    }

    public function actionDel()
    {
        //echo 'actionDel';die;
        //$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //$pathParts = explode('/', $path);

        $news = new News;
        $news->id = Address::part(3);//$pathParts[3];
        $news->delete();

        header('Location: /admin/all/' );
        //header('Location: index.php?ctrl=Admin&act=All' );
    }
}
