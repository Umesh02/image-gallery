<?php

class  UserModel extends BaseModel  // named as User in the course
{
    private $id;
    private $email;
    private $password;
    private $createdAt;
    private $deleted;

    function __construct($data)
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }

        if (isset($data['email'])) {
            $this->email = $data['email'];
        }

        if (isset($data['password'])) {
            $this->password = $data['password'];
        }

        if (isset($data['created_at'])) {
            $this->createdAt = $data['created_at'];
        }

        if (isset($data['deleted'])) {
            $this->deleted = $data['deleted'];
        }
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = :email";  // named as ':userEmail' in the course
        $db = $this->connect();
        $db = $db->prepare($sql);
        $db->bindParam('email', $email);  // named as ':userEmail' in the course
        $db->execute();
        $result = $db->fetch(PDO::FETCH_ASSOC);
        return $result ? new UserModel($result) : $result;
    }

    public function saveUser()
    {
        $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
        $db = $this->connect();
        $db = $db->prepare($sql);
        $db->bindParam('email', $this->email);
        $db->bindParam('password', $this->password);
        return $db->execute();
    }

    // Setters
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function isDeleted()
    {
        return $this->deleted;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
