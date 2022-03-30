<?php

class StudentTable
{
   public $students;
   public $findResultArray = array();

   function __construct(array $students = array())
   {
      $this->students = $students;
   }

   function findName()
   {
      foreach ($this->students as $item) {
         $splitName = str_split($item["name"], 1);
         $isFind = array_search("a", $splitName);

         if ($isFind) {
            array_push($this->findResultArray, $item);
         }
      }

      return $this->findResultArray;
   }
}

$findResult = array("name" => "");
$students = array(
   array("id" => "23", "name" => "Thanh", "score" => "123"),
   array("id" => "567", "name" => "Then", "score" => "23345"),
   array("id" => "34", "name" => "Than", "score" => "45453"),
);

function onClickFindResult()
{
   global $findResult;
   global $students;

   $studentTable = new StudentTable($students);
   $findResult = $studentTable->findName();
}

if (isset($_GET["findButton"])) {
   onClickFindResult();
}
