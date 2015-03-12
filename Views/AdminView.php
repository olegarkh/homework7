<?php


class AdminView
    extends \View
{
    public $ctrl = 'admin';

    public function __construct()
    {
        $content = file_get_contents(__DIR__.'../Admin/menu.json');
        $this->menu = json_decode($content);
    }
}
