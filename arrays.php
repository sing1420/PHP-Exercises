<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Maggi", "Oats", "Prantha", "Pizza"];

/*
Print every array element in a new line.
*/
echo $food[0]."<br>".$food[1]."<br>".$food[2]."<br>".$food[3];



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul><li>".$food[0]."</li><li>".$food[1]."</li><li>".$food[2]."</li><li>".$food[3]."</li></ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc[$food[0]] = "Snacks";
$food_assoc[$food[1]] = "Breakfast";
$food_assoc[$food[2]] = "Main Course";
$food_assoc[$food[3]] = "Italian Cuisine";
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo $food[0]." | ".$food_assoc[$food[0]]."<br>".$food[1]." | ".$food_assoc[$food[1]]."<br>".$food[2]." | ".$food_assoc[$food[2]]."<br>".$food[3]." | ".$food_assoc[$food[3]];





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc[$food[0]] = ["type"=>"Snacks", "origin"=>"Indian"];
$food_assoc[$food[1]] = ["type"=>"Breakfast", "origin"=>"Europian"];
$food_assoc[$food[2]] = ["type"=>"Main Course", "origin"=>"Indian"];
$food_assoc[$food[3]] = ["type"=>"Italian Cuisine", "origin"=>"Italian"];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0]." | ".$food_assoc[$food[0]]['type']." | ".$food_assoc[$food[0]]['origin']."<br>".$food[1]." | ".$food_assoc[$food[1]]['type']." | ".$food_assoc[$food[1]]['origin']."<br>".$food[2]." | ".$food_assoc[$food[2]]['type']." | ".$food_assoc[$food[2]]['origin']."<br>".$food[3]." | ".$food_assoc[$food[3]]['type']." | ".$food_assoc[$food[3]]['origin'];





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
        <tr>
          <th>Food</th>
          <th>Type</th>
          <th>Origin</th>
        </tr>
        <tr>
          <td>".$food[0]."</td>
          <td>".$food_assoc[$food[0]]['type']."</td>
          <td>".$food_assoc[$food[0]]['origin']."</td>
        </tr>
        <tr>
          <td>".$food[1]."</td>
          <td>".$food_assoc[$food[1]]['type']."</td>
          <td>".$food_assoc[$food[1]]['origin']."</td>
        </tr>
        <tr>
          <td>".$food[2]."</td>
          <td>".$food_assoc[$food[2]]['type']."</td>
          <td>".$food_assoc[$food[2]]['origin']."</td>
        </tr>
        <tr>
          <td>".$food[3]."</td>
          <td>".$food_assoc[$food[3]]['type']."</td>
          <td>".$food_assoc[$food[3]]['origin']."</td>
        </tr>
      </table>";
 ?>