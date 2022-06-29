<?php

include_once "Database.php";

class User
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
    }

    public function generatePassword($password)
    {
        return md5(md5(substr(strrev($password), 0, 3)) . md5(substr(strrev($password), 4)));
    }

    public function validatePassword($password)
    {
        if (strlen($password) > 7 && strlen($password) < 21 && preg_match('`[A-Z]`', $password) && preg_match('`[a-z]`', $password) && preg_match('`[0-9]`', $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function register($username, $name, $email, $password)
    {
        if (self::validatePassword($password)) {
            $g_password = self::generatePassword($password);
            $sql = "INSERT INTO Users (username, name, email, password, DateCreated) VALUES (:username, :name, :email, :password, now())";
            $query = $this->conn->prepare($sql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':password', $g_password, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $this->conn->lastInsertId();
            if ($lastInsertId) {
                return $lastInsertId;
            } else {
                return false;
            }
        } else {
            return false;
            // echo "Password is not Strong";

        }
    }

    public function usernameAvailable($username)
    {
        $sql = "SELECT * FROM Users where username = :username ";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        if ($user) {
            echo " Username already Taken";
            return false;
        } else {
            return $user;
        }
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM Users WHERE username = :username";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                $dbPassword = $result->password;
                if (self::generatePassword($password) == $dbPassword) {
                    $session_token = self::getToken(20);
                    $sql = "UPDATE Users SET LastAuthenticatedToken = :token ,LastLoginDate = now() WHERE username = :username";
                    $query = $this->conn->prepare($sql);
                    $query->bindParam(':username', $username, PDO::PARAM_STR);
                    $query->bindParam(':token', $session_token, PDO::PARAM_STR);
                    $query->execute();
                    $_SESSION['token'] = $session_token;
                    $_SESSION['id'] = $result->id;
                    $_SESSION['email'] = $result->email;
                    $_SESSION['name'] = $result->name;
                    $_SESSION['username'] = $result->username;
                    $_SESSION['last_acted_on'] = time();

                    return true;
                } else {
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }

    function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[rand(0, $max - 1)];
        }
        return $token;
    }

    function validateTokenID($username, $tokenID)
    {
        $sql = "SELECT * FROM Users WHERE username = :username";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                if ($result->LastAuthenticatedToken == $tokenID) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
    // function changePassword($username,$password,$oldpassword) {
    // 	if (self::authenticateUsers($username, $oldpassword))  {
    // 		if (self::validatePassword($password)) {
    // 			$sql = sprintf("update Users set Password=%s,LPasswordCDate=Now() where UserID=%s",self::makeSQLStrings(self::generatePassword($password)),self::makeSQLStrings($username));
    // 			$rs = self::insert_data($sql);
    // 			return 'Password has been changed successfully';
    // 		}else {
    // 			return 'Invalid Password Format';
    // 		}
    // 	}else {
    // 		return 'Invalid Password';
    // 	}

    // }
}
