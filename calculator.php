<?php
    // calculator

    class Calculator{
        public $num1;
        public $num2;
        public $operator;
        public $result;

        public function __construct($n1, $n2, $op){
            $this->num1 = $n1;
            $this->num2 = $n2;
            $this->operator = $op;
        }

        function calculate_result(){
            $this->result();
            echo "result is " . $this->result;
        }

        public function result(){
            switch($this->operator){
                case "+":
                    $this->result = $this->num1 + $this->num2;
                    break;
                case "-":
                    $this->result = $this->num1 - $this->num2;
                    break;
                case "*":
                    $this->result = $this->num1 * $this->num2;
                    break;
                case "/":
                    $this->result = ($this->num2 == 0)? -1 : $this->num1 / $this->num2;
                    break;
                default:
                    $this->result = 0;
                    break;
            }
        }
    }

    $obj = new Calculator(5, 0, "/");
    $obj->calculate_result();
?>