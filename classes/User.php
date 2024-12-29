<?php

class User extends QueryBuilder {

    public $register_result = NULL;
    public $login_result = NULL;
    public $loggedUser = NULL;


    public function registerUser(){

       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       $hashed_password = password_hash($password, PASSWORD_DEFAULT);

       $sql = "INSERT INTO users VALUES (NULL, ?, ?, ?)";
       $query = $this->db->prepare($sql);
       $query->execute([$name, $email, $hashed_password]);

       if($query){
        $this->register_result = true;
       }
    }

    public function logginUser() {
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];

        $sql = "SELECT * FROM users WHERE email = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$email]);
        $loggedUser = $query->fetch(PDO::FETCH_OBJ);
    
        if ($loggedUser && password_verify($password, $loggedUser->password)) {
            $_SESSION['loggedUser'] = $loggedUser;
            $this->loggedUser = $loggedUser;
            $this->login_result = true;
        } else {
            $this->login_result = false;
        }
    }

     public function getUserWithId($id){
            $sql = "SELECT * FROM users WHERE id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);

            $postOwner = $query->fetch(PDO::FETCH_OBJ);

            return $postOwner;
     }
}