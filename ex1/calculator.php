<?php

class Calculator
{
   public $number1;
   public $number2;

   function __construct(int $number1 = 0, int $number2 = 0)
   {
      $this->number1 = $number1;
      $this->number2 = $number2;
   }

   function plus()
   {
      return $this->number1 + $this->number2;
   }

   function minus()
   {
      return $this->number1 - $this->number2;
   }

   function multiply()
   {
      return $this->number1 * $this->number2;
   }

   function divide()
   {
      if ($this->number2 === 0) return "Syntax Error";
      return $this->number1 / $this->number2;
   }
}

$result = 0;
$operation = "+";
$number1 = 0;
$number2 = 0;

function handleOnClickCalculator()
{
   global $result;
   global $operation;
   global $number1;
   global $number2;

   $operation = $_POST["operation"];
   $number1 = $_POST["number1"] ? $_POST["number1"] : 0;
   $number2 = $_POST["number2"] ? $_POST["number2"] : 0;

   $calculator = new Calculator($number1, $number2);

   if ($operation === "+") {
      $result = $calculator->plus();
   };

   if ($operation === "-") {
      $result = $calculator->minus();
   }

   if ($operation === "*") {
      $result = $calculator->multiply();
   }

   if ($operation === "/") {
      $result = $calculator->divide();
   }
}

if (isset($_POST["onClickCalculator"])) {
   handleOnClickCalculator();
}
