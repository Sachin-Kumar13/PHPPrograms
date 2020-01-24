<?php
extract($_POST);    // This command is used to collect the data
                    // sent by the form
if(isset($sub))     // This function is used to check weather 
                    // form submit button is pressed or not
{
    $a = $text1;
    $b = $text2;
    $c = $a * $b;
    echo "<p align='center'>The Result is: ".$c."</p>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
 
<div class="container">
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter no.-1</label>
    <input type="text" name="text1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number in Numeric form">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter no.-2</label>
    <input type="text" name="text2"class="form-control" id="exampleInputPassword1" placeholder="Enter number in Numeric form">
  </div>
   
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>