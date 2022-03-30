<div class='calculator'>
   <h1>The Calculation</h1>
   <form method="post" class='calculator-form'>
      <label class='calculator-form--label'> Number 1: </label>
      <input type="number" value="0" name="number1" class='calculator-form--item'>

      <label class='calculator-form--label'> Number 2: </label>
      <input type="number" value="0" name="number2" class='calculator-form--item'>

      <label class='calculator-form--label'> Operation: </label>
      <select name="operation" class='calculator-form--item'>
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>

      <button type="submit" class="calculator-form--button" name="onClickCalculator">Submit</button>
   </form>

   <?php
   include 'calculator.php';
   echo "<b class='calculator-form--result ''>$number1 $operation $number2 = $result</b>"
   ?>
</div>