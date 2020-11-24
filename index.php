<?php

//echo 'This is PHP!</p>;


if (isset($_GET["FirstName"])) { // show feedback
  // echo $_GET["FirstName"];
  
  echo '<pre>';
  var_dump($_GET);
    echo '<pre>';
  
} else { // show form
  echo  '
  <form action="">
  <p> First Name: <input type="text" name="FirstName" /></p>
    <p> Last Name: <input type="text" name="LastName" /></p>
    <p>Favorite Color: </p>
        <p>< input type="radio" FavoriteColor" value="red"/>Red</p>
        <p>< input type="radio" FavoriteColor" value="blue"/>Blue</p>
        <p>< input type="radio" FavoriteColor" value="yellow"/>Yellow</p>
        
         <p>Sundae Topping: </p>
        <p>< input type="radio" Toppings[]" value="oreos"/>Oreos</p>
        <p>< input type="radio" Toppings[]" value="whipped cream"/>Whipped cream</p>
        <p>< input type="radio" Toppings[]" value="nuts"/>nuts</p>
        
        
  <input type="submit" />  
  </form> 
  ';  
}

?>


