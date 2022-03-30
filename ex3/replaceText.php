<?php
class ChangeText
{
   public $inputText;
   public $findText;
   public $replaceText;

   function __construct(string $inputText = "", string $findText = "", string $replaceText = "")
   {
      $this->inputText = $inputText;
      $this->findText = $findText;
      $this->replaceText = $replaceText;
   }

   function handleReplaceText()
   {
      return str_ireplace($this->findText, $this->replaceText, $this->inputText);
   }
}

$inputText = "";
$findText = "";
$replaceText = "";
$textResult = "";

function onClickReplaceText()
{
   global $inputText;
   global $findText;
   global $replaceText;
   global $textResult;

   $inputText = $_POST["inputText"] ? $_POST["inputText"] : "";
   $findText = $_POST["findText"] ? $_POST["findText"] : "";
   $replaceText = $_POST["replaceText"] ? $_POST["replaceText"] : "";

   $changeText = new ChangeText($inputText, $findText, $replaceText);

   $textResult = $changeText->handleReplaceText();
}

if (isset($_POST["submitReplaceText"])) {
   onClickReplaceText();
}
