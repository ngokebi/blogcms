<?php

class Category
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
    }


    public function all_category()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($data);
    }

    public function create_category($category_name)
    {
        $sql = "INSERT INTO category (category_name, created_at) VALUES (:category_name, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':category_name', $category_name, PDO::PARAM_STR);
        $stmt->execute();
        $lastInsertId = $this->conn->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_category( $id)
    {
        $status = "Deleted";
        $sql = "UPDATE category SET status = :status WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":status", $status, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function update_category($category_name, $id)
    {

            $sql = "UPDATE category SET category_name = :category_name WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->bindValue(':category_name', $category_name, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->rowCount();
        }
    
        public function search_category($searchText, $start = 0, $limit = 4)
        {
            $sql = "SELECT * FROM category WHERE category_name LIKE %:search% ORDER BY id DESC LIMIT {$start},{$limit}";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':search', $searchText, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $results = [];
            }
    
            return $results;
        }
}
