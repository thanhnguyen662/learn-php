<?php
class Circle
{
   public $superficies;
   public $radius;
   public $result;
   function __construct(float $superficies = 0, float $radius = 0)
   {
      $this->superficies = $superficies;
      $this->radius = $radius;
   }

   function calculateRadius()
   {

      return (sqrt($this->superficies / pi()));
   }

   function calculateSuperficies()
   {
      return (pi() * $this->radius * $this->radius);
   }
}

$result = 0;
$error = false;
function handelOnSubmit()
{
   global $result;
   global $error;
   $superficies = $_POST["superficies"] ? $_POST["superficies"] : 0;
   $radius = $_POST["radius"] ? $_POST["radius"] : 0;
   $circle = new Circle($superficies, $radius);
   if ($superficies === 0 xor $radius === 0) {
      $error = false;
      return $result = $superficies === 0 ?  $circle->calculateSuperficies() : $circle->calculateRadius();
   }
   return $error = true;
}


if (isset($_POST["submitCircle"])) {
   handelOnSubmit();
}
