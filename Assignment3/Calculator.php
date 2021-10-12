<?php 
declare(strict_types = 1);
class Calculator {
    private $_answer;

    public function calc($operator = null, $numOne = null, $numTwo = null) {

        if($operator == "/" && $numTwo == 0) {
            return nl2br("Cannot divide by zero.\n");
        }
        if($numTwo == null) {
            return nl2br("You must enter an operator and two strings.\n");
        }
        switch($operator) {
            case "*":
                $_answer = ($numOne * $numTwo);
                return nl2br("The product of these numbers is $_answer.\n");
                break;
            case "/": 
                $_answer = ($numOne / $numTwo);
                return nl2br("The quotient of these numbers is $_answer.\n");
                break;
            case "+":
                $_answer = ($numOne + $numTwo);
                return nl2br("The sum of these numbers is $_answer.\n");
                break;
            case "-":
                $_answer = ($numOne - $numTwo);
                return nl2br("The difference of these numbers is $_answer.\n");
                break;
            default:
                return "Failed to calculate";
        }
        }
       
    
   
    
}
?>