<?php

class UploadController extends Controller
{
    public function index()
    {
        $this->renderTemplate('index', "Everything is working!");
    }

    public function renderTemplate($template, $data = [])
    {
        $view = $this->view('upload/' . $template, ['data' => $data]);
        $view->render();
    }
}
