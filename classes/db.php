<?php 
class DB{
  public function connect(){
    try {
      $dbname='loginDB';
        $username='root';
        $password="";
        $pdo = new PDO('mysql:host=localhost;dbname=' . $dbname, $username, $password);
    
      return $pdo;
    } catch (PDOException $e) {
        print 'Error:'.$e->getMessage().'<br>';
        die();
    }
    }
}