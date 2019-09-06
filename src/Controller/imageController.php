<?php

class ImageController extends Controller
{
    public function index()
    {
        $this->renderTemplate('index', "Everything is working");
    }

    public function renderTemplate($template, $data = [])
    {
        $view = $this->view('image/' . $template, ['data' => $data]);
        $view->render();
    }

}
