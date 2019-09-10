<?php

class ImageModel extends BaseModel
{
    private $id;
    private $title;
    private $description;
    private $createdAt;
    private $deleted;
    private $views;
    private $user;
    private $category;
    private $path;

    public function saveImage()
    {
        $sql = "INSERT INTO image (title, description, user, path) VALUES (:title, :description, :user, :path)";
        $db = $this->connect();
        $query = $db->prepare($sql);
        $query->bindParam('title', $this->title);
        $query->bindParam('description', $this->description);
        $query->bindParam('user', $this->user);
        $query->bindParam('path', $this->path);
        $query->execute();
    }

    // Setters
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }
}
