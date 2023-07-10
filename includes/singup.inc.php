<?php 

class Signup extends DB{
    protected function setUser($username, $email, $password) {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $statement = $this->connect()->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hashPassword);
        $statement_run = $statement->execute();
    
        if (!$statement_run) {
            $statement = null;
            header("Location: ../sign-up.php?error=statementError");
            exit();
        }
    
        $statement = null;
    }
    
    
   protected function checkUser($username, $email) {
    $statement = $this->connect()->prepare('SELECT username FROM users WHERE username = :username OR email = :email');
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement_run = $statement->execute();
    $loginData = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (!$statement_run) {
        $statement = null;
        header("Location: ../sign-up.php?error=statementError");
        exit();
    }


    if (!empty($loginData)) {
        $statement = null;
        header("Location: ../sign-up.php?error=userNotFound");
        exit();
    }

    $statement = null;

    return $loginData;
}

}    