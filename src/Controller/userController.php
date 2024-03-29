<?php

class userController extends Controller
{
    public function index()
    {
        echo "User Model works";
        // $template = 'index';
        // if (isset($_GET['id'])) {
        //     $template = 'image';
        // }
        // $this->renderTemplate($template, "Everything is working!");
    }

    public function register()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        // Check if passwords match
        if ($password != $repeatPassword) {
            echo "Passwords don't match!";
            die();
        }

        // Check if email already registered
        $this->model('userModel');  // named as 'user' in the course
        $user = $this->model->getUserByEmail($email);
        if ($user) {
            echo "User with this email already exists.  Use another email!";
            die();
        }

        // Encrypt password
        $password = $this->encryptPassword($password);

        // Save user 
        $this->model->setEmail($email);
        $this->model->setPassword($password);
        $this->model->saveUser();

        // Log in user
        $this->login($email, $password);
    }

    public function login($email = '', $password = '')
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        // Load the user from DB
        $this->model('userModel'); // named as 'user' in the course
        $user = $this->model->getUserByEmail($email);

        if (!$user) {
            echo "Incorrect Email-Password combination!";
            die();
        }

        if ($user->getEmail() === $email && $this->passwordsMatch($password, $user->getPassword())) {
            $_SESSION['user'] = $user->getEmail();
            $_SESSION['userId'] = $user->getId();

            header('Location:' . $_SERVER['HTTP_REFERER']);
        } else {                                                // extra code added to address incorrect password
            echo "Incorrect Email-Password combination!";       // extra code added to address incorrect password
            die();                                              // extra code added to address incorrect password
        }                                                       // extra code added to address incorrect password
    }

    public function renderTemplate($template, $data = [])
    {
        $view = $this->view('image/' . $template, ['data' => $data]);
        $view->render();
    }

    private function encryptPassword($password)
    {
        return crypt($password, '$2y$14$wHhBmAgOMZEld9iJtV./aq');
    }

    private function passwordsMatch($password, $hashedPassword)
    {
        return crypt($password, '$2y$14$wHhBmAgOMZEld9iJtV./aq') === $hashedPassword;
    }

    public function logout()
    {
        session_destroy();
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
}
