<?php

class ImageController extends Controller
{
    public function index()
    {
        $template = 'index';
        if (isset($_GET['id'])) {
            $template = 'image';
        }
        $this->renderTemplate($template, "Everything is working!");
    }

    public function renderTemplate($template, $data = [])
    {
        $view = $this->view('image/' . $template, ['data' => $data]);
        $view->render();
    }
}
