<?php

class NewsLetter
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
    }
    public function add_email($email)
    {
        $sql = "INSERT INTO newsletter (email) VALUE (:email)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $email, PDO::PARAM_INT);
        $stmt->execute();

        $lastInsertId = $this->conn->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }
}
