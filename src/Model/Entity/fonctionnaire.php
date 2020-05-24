<?php
     class fonctionnaire {
        private $id;
        private $nom;
        private $password;
        private $commune;
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

        public function getCommune(){
            return $this->commune;
        }
        public function setCommune($commune){
            $this->commune=$commune;
        }

        public function getRole(){
            return $this->role;
        }
        public function setRole($role){
            $this->role=$role;
        }



    }