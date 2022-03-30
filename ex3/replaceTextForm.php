<?php
include 'replaceText.php';
?>

<div class="ex3-container">
   <form method='post' class="changeTextForm ">
      <label class="changeTextForm--label">Input</label>
      <input type="text" name="inputText" class="changeTextForm--item">

      <label class="changeTextForm--label">Find</label>
      <input type="text" name="findText" class="changeTextForm--item">

      <label class="changeTextForm--label">Replace</label>
      <input type="text" name="replaceText" class="changeTextForm--item">

      <button type="submit" name="submitReplaceText" class="changeTextForm--button">
         Change
      </button>
   </form>

   <?php
   echo "<h3 class='changeTextForm--result'>Result: $textResult</h3>"
   ?>
</div>