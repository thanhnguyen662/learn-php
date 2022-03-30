<div class="ex2-container">
   <div class="ex2-wrap">
      <h1>Circle</h1>
      <form method="post" class='ex2-form'>
         <div class="ex2-input-wrap">
            <label class='calculator-form--label'> Superficies: </label>
            <input type="number" value="0" name="superficies" class='ex2-input'>
         </div>
         <div class="ex2-input-wrap">
            <label class='calculator-form--label'> Radius: </label>
            <input type="number" value="0" name="radius" class='ex2-input'>
         </div>
         <div class="ex2-button-wrap">
            <button type="submit" class="ex2-input" name="submitCircle">Submit</button>
         </div>
      </form>
      <div class="result-wrap">
         <?php
         include 'circle.php';
         echo "<h3>Result: $result</h3>"
         ?>

      </div>
   </div>
</div>