<?php
echo"Hello h r u?";
print "this is first";

if(isset($_POST['s']))
{
    $a=$_POST['t1'];
    if($a>0)
    {
        echo "No is positive";
    }
    else{
        echo "Negative number";
    }
}
?>