<?php 

    require_once 'connection.php';

    class userModel extends dbh{
        private $user;
        private $pass;

        public function __construct($username="", $password="")
        {
            $this->user = $username;
            $this->pass = $password;
        }


        public function login(){
            
    
            $users = $this->user;
            $pass = $this->pass;
            $sql = "SELECT * FROM user_tbl WHERE username='$users'";
    
            $result = mysqli_query($this->connect(),$sql);
    
            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                $users = $rows["username"];
                $password = $rows["password"];
            }
    
            $pv = password_verify($pass,$password);
            return $pv;
        }

    public function passValid($username, $password){
        $sql = "SELECT * FROM user_tbl WHERE username='$username'";
        $p = $password;
        $res = mysqli_query($this->connect(), $sql);
        
        if(mysqli_num_rows($res) > 0){
            while($rows = mysqli_fetch_assoc($res)){
                $username = $rows["username"];
                $pass = $rows["password"];
                $id = $rows["user_id"];
                $type = $rows["user_type"];
            }
                
            } 
            return $pass;

    
}

        public function checkUser(){
            session_start(); 
            $_SESSION["errl"] = "Username is empty";
            header("location:view/login.php");
        }
        public function checkPass(){
            session_start(); 
            $_SESSION["errl"] = "Password is empty";
            header("location:view/login.php");
        }

        
        public function user($username, $password){
            $sql = "SELECT * FROM user_tbl WHERE username='$username'";

            $res = mysqli_query($this->connect(), $sql);
            
            if(mysqli_num_rows($res) > 0){
                while($rows = mysqli_fetch_assoc($res)){
                    $username = $rows["username"];
                    $pass = $rows["password"];
                    $id = $rows["user_id"];
                }      
        }
    }



    }