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

    function __construct($data)
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }

        if (isset($data['title'])) {
            $this->title = $data['title'];
        }

        if (isset($data['description'])) {
            $this->description = $data['description'];
        }

        if (isset($data['created_at'])) {
            $this->createdAt = $data['created_at'];
        }

        if (isset($data['deleted'])) {
            $this->deleted = $data['deleted'];
        }

        if (isset($data['views'])) {
            $this->views = $data['views'];
        }

        if (isset($data['user'])) {
            $this->user = $data['user'];
        }

        if (isset($data['category'])) {
            $this->category = $data['category'];
        }

        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
    }
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

    public function getAllImages()
    {
        $sql = "SELECT * FROM image WHERE deleted = false";
        $db = $this->connect();
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $date = [];
        foreach ($result as $image) {
            $data[] = new ImageModel($image);
        }
        return $data;
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

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function isDeleted()
    {
        return $this->deleted;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPath()
    {
        return $this->path;
    }
}
