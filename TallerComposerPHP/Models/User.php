<?php

    namespace App\Models;

    class User {
        private $email;
        private $name;
        private $height;
        private $weight;

        function __construct($email, $name, $height, $weight) {
            $this->email = $email;
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        function getEmail() {
            return $this->email;
        }
        function getName() {
            return $this->name;
        }
        function getHeight() {
            return $this->height;
        }
        function getWeight() {
            return $this->weight;
        }
        
        function calculateBMI($height, $weight) {
            return $weight / ($height * $height);
        }
    }
?>