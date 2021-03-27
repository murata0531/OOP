<?php
    class Calculator{
        private $num1;
        private $num2;
        private $op;

        

        public function set_values($n1, $n2, $op){
            $this->num1 = $n1;
            $this->num2 = $n2;
            $this->op = $op;
        }

        public function calculate(){

            if($this->op == "addition"){
                return $this->num1 + $this->num2;
            }else if($this->op == "subtraction"){
                return $this->num1 - $this->num2;
            }else if($this->op == "multiplication"){
                return $this->num1 * $this->num2;
            }else if($this->op == "division"){
                return $this->num1 / $this->num2;
            }

        }
    }
?>