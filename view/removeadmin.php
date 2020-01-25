<?php
include_once('../controller/Mycontroller.php');
$var2=new Mycontroller();
$result=$var2->adminview();

while($row=mysqli_fetch_assoc($result))
{
    $var=$row['name'];
    echo $var;
    
}
