<?php

namespace Src;

use Exception;

class View
{
    private $view = '';
    private $data = [];
    private $root = '';
    private $layout = '/layouts/main.php';

    public function __construct(string $view = '', array $data = [])
    {
        $this->root = $this->getRoot();
        $this->view = $view;
        $this->data = $data;
    }

    //Полный путь до директории с представлениями
    private function getRoot()
    {
        global $app;
        $root = $app->settings->getRootPath();
        $path = $app->settings->getViewsPath();

        return $_SERVER['DOCUMENT_ROOT'] . $root . $path;
    }

    //Путь до основного файла с шаблоном сайта
    private function getPathToMain()
    {
        return $this->root . $this->layout;
    }

    //Путь до текущего шаблона
    private function getPathToView( $view = '')
    {

        $view = str_replace('.', '/', $view);
        return $this->getRoot() . "/$view.php";
    }

    public function render( $view = '', $data = [])
    {
        $path = $this->getPathToView($view);
        var_dump($view);
        if (file_exists($this->getPathToMain()) && file_exists($path)) {

            //Импортирует переменные из массива в текущую таблицу символов
            extract($data, EXTR_PREFIX_SAME, '');

            //Включение буферизации вывода
            ob_start();
            require $path;
            //Помещаем буфер в переменную и очищаем его
            $content = ob_get_clean();

            //Возвращаем собранную страницу
            return require($this->getPathToMain());
        }
        throw new Exception('Error render');
    }

    public function __toString()
    {
        return $this->render($this->view, $this->data);
    }
    //Преобразование массива в json и отдача клиенту
    public function toJSON(array $data = [], int $code = 200): void
    {
        header_remove();
        header("Content-Type: application/json; charset=utf-8");
        http_response_code($code);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit();
    }


}

