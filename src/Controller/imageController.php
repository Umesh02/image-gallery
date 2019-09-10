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

    public function upload()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $userId = $_SESSION['userId'];
        $file = $_POST['upload-type'] === 'online-file' ? $_POST['image-url'] : $_FILES['file'];

        $this->model('imageModel');
        $this->model->setTitle($title);
        $this->model->setDescription($description);
        $this->model->setUser($userId);
        $this->model->setPath($file);
        $this->model->saveImage();
    }
}
