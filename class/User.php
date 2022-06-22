<?php
    final class User extends Database{
        public function __construct(){
            parent::__construct();
            $this->table('user_info');
        }

        public function getAllUser(){ // fetch alluser 
                  return $this->select();
        }

        public function getUserByUserName($email){ //fetch user by email
            // SELECT * FROM users WHERE email = $email
            // SELECT * FROM users WHERE remeber_token = $token
            // SELECT * FROM users WHERE id = $id
            // SELECT * FROM users
            $args = array(
                // 'fields' => 'id, name, status, password, email'
                // 'fields' => ['id', 'name', 'status', 'password', 'email']
                'where' => array(
                    'email' => $email
                )
            );

            return $this->select($args);
        }

          public function addUser($data){ //insert user by // $data
            return $this->insert($data);
        }


        public function getUserById($id) //fetch user by PhoneNumber
        {
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->select($args);
        }

        public function updateUser($data, $user_id){ // update by userID
            $args = array(
                'where' => array(
                    'id' => $user_id
                )
            );
            $success = $this->update($data, $args);
            if($success){
                return $user_id;
            } else {
                return false;
            }
        }
        public function updateUserbyUsername($data, $email){// update by userEmail
            $args = array(
                'where' => array(
                    'email' => $email
                )
            );
            $success = $this->update($data, $args);
            if($success){
                return $user_id;
            } else {
                return false;
            }
        }

        public function getUserByToken($token){ //getUserBy Token
            $args = array(
                'where' => array(
                    'remember_token' => $token
                )
            );
            return $this->select($args);
        }

    }
