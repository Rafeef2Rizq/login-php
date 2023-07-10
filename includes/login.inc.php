<?php 

class Login extends DB{
    protected function getUser($username, $password) {
        $statement = $this->connect()->prepare('SELECT password FROM users WHERE username = :username');
        $statement->bindValue(':username', $username);
        $statement_run = $statement->execute();
    
        if (!$statement_run) {
            $statement = null;
            header("Location: ../login.php?error=statementError");
            exit();
        }
    
        $loginData = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        if (count($loginData) == 0) {
            $statement = null;
            header("Location: ../login.php?error=userNotFound");
            exit();
        }
    
        $hashedPassword = $loginData[0]['password'];
        $checkPassword = password_verify($password, $hashedPassword);
    
        if ($checkPassword == false) {
            $statement = null;
            header("Location: ../login.php?error=wrongpassword");
            exit();
        } elseif ($checkPassword == true) {
            $statement = $this->connect()->prepare('SELECT username FROM users WHERE username = :username AND password=:password');
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $hashedPassword);
            $statement_run = $statement->execute();
    
            if (!$statement_run) {
                $statement = null;
                header("Location: ../login.php?error=statementError");
                exit();
            }
    
            $user = $statement->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['username'] = $user[0]['username'];
        }
    
        $statement = null;
    }
    


}    