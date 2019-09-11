<?php

class ImageController extends Controller
{
    public function index()
    {
        $template = 'index';
        $data = '';
        if (isset($_GET['id'])) {
            $template = 'image';
        } else {
            $template = 'index';
            $this->model('ImageModel');
            $data = $this->model->getAllImages();
        }

        $this->renderTemplate($template, $data);
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

        if ($_POST['upload-type'] === 'online-file') {
            $this->model->setPath($file);
        } else {
            $dir = '/uploads/' . $userId . '/';
            $this->model->setPath($dir . $file['name']);
            $this->uploadImage($file, PUBLIC_DIR . $dir, $userId);
        }

        $this->model->saveImage();
    }

    private function uploadImage($file, $dir, $userId)
    {
        $name = $file['name'];

        // Check if directory exists
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        // Check if file already exists
        if (file_exists("$dir/$name")) {

            // below 3 lines added by me
            echo "<p>File aready exists</p>";
            echo "<a href='/upload/'>Go Back</a>";
            die();
        }

        // Upload the file
        move_uploaded_file($file['tmp_name'], "$dir/$name");
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
}
