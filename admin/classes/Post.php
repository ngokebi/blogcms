<?php

class Post
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
    }


    public function all_posts()
    {
        $sql = "SELECT * FROM posts";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($data);
    }

    public function create_posts($title, $short_desc, $long_desc, $author, $cat_id, $user_id)
    {
        $sql = "INSERT INTO posts (title, short_desc, long_desc, author, cat_id, uploaded_by, created_at) 
        VALUES (:title, :short_desc, :long_desc, :author, :cat_id, :uploaded_by, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':short_desc', $short_desc, PDO::PARAM_STR);
        $stmt->bindValue(':long_desc', $long_desc, PDO::PARAM_STR);
        $stmt->bindValue(':author', $author, PDO::PARAM_STR);
        $stmt->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
        $stmt->bindValue(':uploaded_by', $user_id, PDO::PARAM_STR);
        $stmt->execute();
        $lastInsertId = $this->conn->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_posts($id)
    {
        $status = "Deleted";
        $sql = "UPDATE posts SET status = :status WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":status", $status, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function update_posts($title, $short_desc, $long_desc, $author, $cat_id, $user_id, $id)
    {

            $sql = "UPDATE posts SET title = :title, short_desc = :short_desc, long_desc = :long_desc, author = :author, cat_id = :cat_id, uploaded_by = :uploaded_by WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':short_desc', $short_desc, PDO::PARAM_STR);
            $stmt->bindValue(':long_desc', $long_desc, PDO::PARAM_STR);
            $stmt->bindValue(':author', $author, PDO::PARAM_STR);
            $stmt->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmt->bindValue(':uploaded_by', $user_id, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->rowCount();
        }
    
}
