<?php

//echo 'This is PHP!</p>;


if (isset($_GET["FirstName"])) { // show feedback
  // echo $_GET["FirstName"];
  
  echo '<pre>';
  var_dump($_Get);
    echo '<pre>';
} else { // show form
  echo  '
  <form action="">
  First Name: <input type="text" name="FirstName" /><br />
  <input type="submit" />  
  </form> 
  ';  
}

?>


