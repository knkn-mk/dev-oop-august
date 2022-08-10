<?php
    require "Database.php";

    class User extends Database{

        public function createUser($first_name, $last_name, $username, $password){
            # CREATE THE SQL QUERY
            $sql = "INSERT INTO users (first_name, last_name, username, password)
                    VALUES('$first_name', '$last_name', '$username', '$password')";

            # EXCUTE THE QUERY
            if($this->conn->query($sql)){
                header("location: ../");
                exit;
            }else{
                die("Error in CREATING USER: " . $this->conn->error);
            }
        }

        public function login($username, $password){
            $sql = "SELECT id, username, password FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $user_details = $result->fetch_assoc(); 
                //fetch_assoc()~~retrieve the database record and convert it into an associative array

                if(password_verify($password, $user_details['password'])){
                    # SEESION VARIABLES

                    session_start();

                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];

                    #REDIRECT
                    header("location: ../views/dashboard.php");
                    exit;
                }else{
                    die("Password is incorrect");
                }

            }else{
                die("Username not found");
            }
        }

        public function getAllProducts(){
            $products = [];
            $sql = "SELECT id, product_name, price, quantity FROM Products";

            if($result = $this->conn->query($sql)){
                while($row = $result->fetch_assoc()){
                    $products[] = $row;
                }
                return $products;
            }else{
                die("ERROR in retrieving user list: " . $this->conn->error);
            }
        }

        public function getUserDetails($user_id){
            $sql = "SELECT * FROM users WHERE id = '$user_id'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                die("ERROR in retrieving user details: " . $this->conn->error);
            }
        }

        public function updateUser($user_id, $first_name, $last_name, $username, $password){
            $sql = "UPDATE users 
                    SET first_name = '$first_name', 
                        last_name = '$last_name',
                        username = '$username', 
                        password = '$password' 
                    WHERE id = '$user_id'";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die("ERROR in updating user details: " . $this->conn->error);
            }
        }

        public function deleteUser($user_id){
            $sql = "DELETE FROM users WHERE id = '$user_id'";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die("ERROR in deleting user ". $user_id. ":" . $this->conn->error);
            }
        }
    }
   