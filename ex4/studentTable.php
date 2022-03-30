<?php
include 'student.php';
?>

<div class="ex4-container">
   <table>
      <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Score</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($students as $item) : ?>
            <tr>
               <td><?= $item["id"] ?></td>
               <td><?= $item["name"] ?></td>
               <td><?= $item["score"] ?></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <a href='index.php?findButton=true'>Find A</a>

   <?php foreach ($findResult as $item) : ?>
      <div>
         <h1><?= $item["name"] ?></h1>
      </div>
   <?php endforeach; ?>


</div>