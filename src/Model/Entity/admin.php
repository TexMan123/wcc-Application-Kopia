<?php
    class admin {
        private $id;
        private $nom;
        private $password;
        private $role;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom){
            $this->nom=$nom;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        public function getRole(){
            return $this->role;
        }
        public function setRole($role){
            $this->role=$role;
        }



    }
