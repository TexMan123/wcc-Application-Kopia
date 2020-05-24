<?php
    class demande{
        private $id;
        private $nombres;
        private $createdAt;
        private $reponse;
        private $user;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }

        public function getNombres(){
            return $this->nombres;
        }
        public function setNombres($nombres){
            $this->nombres= $nombres;
        }

        public function getCreatedAt(){
            return $this->createdAt;
        }
        public function setCreatedAt($createdAt){
            $this->createdAt= $createdAt;
        }

        public function getReponse(){
            return $this->reponse;
        }
        public function setReponse($reponse){
            $this->reponse=$reponse;
        }

        public function getUser(){
            return $this->user;
        }
        public function setUser($user){
            $this->user=$user;
        }


    }