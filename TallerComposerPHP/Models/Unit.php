<?php

    namespace App\Models;

    class Unit {
        private $type;
        private $value;

        function __construct($type, $value) {
            $this->type = $type;
            $this->value = $value;
        }

        function getType() {
            return $this->type;
        }
        function getValue() {
            return $this->value;
        }
        
        function convertUnit($type, $value){
            switch ($type) {
                case 'Centimeter':
                    return $value / 100;
                    break;
                case 'Kilometer':
                    return $value * 1000;
                    break;
                case 'Mile':
                    return $value / 1609;
                    break;
                case 'Meter':
                    return $value;
                    break;
                case '':
                    return $value;
                    break;
            }
        }
    }
?>