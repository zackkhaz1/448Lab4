<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo '<link rel="stylesheet" type="text/css" href="storeStyle.css"></head>';
$username = $_POST['username'];
$password = $_POST['password'];
$quantA = $_POST['268quantityA'];
$quantC = $_POST['268quantityC'];
$quantF = $_POST['268quantityF'];
$shipping = $_POST['shipping'];
echo "Hello " . $username . ", how are you today? <br>";
echo "Your password is " . $password ."";

echo "<center>";
echo "<table style='width:50%'>";
echo "<tr>";
for($i = 0; $i < 4; $i++)
  {
    if($i == 0)
    echo "<th> </th>";
    if($i == 1)
    echo "<th> Quantity </th>";
    if($i == 2)
    echo "<th> Cost per item </th>";
    if($i == 3)
    echo "<th> Subtotal </th>";
  }
echo "</tr>";

echo "<tr>";
for($i = 0; $i < 4; $i++)
  {
    if($i == 0)
    echo "<th> A+ 268 lab </th>";
    if($i == 1)
    echo "<td>". $quantA . "</td>";
    if($i == 2)
    echo "<td> $259.99 </td>";
    if($i == 3)
    echo "<td>" . $quantA*259.99 . "</td>";
  }
echo "</tr>";

echo "<tr>";
for($i = 0; $i < 4; $i++)
  {
    if($i == 0)
    echo "<th> C 268 lab </th>";
    if($i == 1)
    echo "<td>". $quantC . "</td>";
    if($i == 2)
    echo "<td> $150.99 </td>";
    if($i == 3)
    echo "<td>" . $quantC*150.99 . "</td>";
  }
echo "</tr>";

echo "<tr>";
for($i = 0; $i < 4; $i++)
  {
    if($i == 0)
    echo "<th> F 268 lab </th>";
    if($i == 1)
    echo "<td>". $quantF . "</td>";
    if($i == 2)
    echo "<td> $99.99 </td>";
    if($i == 3)
    echo "<td>" . $quantF*99.99 . "</td>";
  }
echo "</tr>";

echo "<tr>";
for($i = 0; $i < 4; $i++)
  {
    if($i == 0)
    echo "<th> Shipping </th>";
    if($i == 1)
    echo "<td>". $shipping . "</td>";
    break;
  }
$total = $quantA*259.99 + $quantF*99.99 + $quantC*150.99;
if($shipping == "Three day")
  {
    echo "<td> $5 </td>";
    $total+= 5;
  }
if($shipping == "Overnight")
  {
    echo "<td> $50 </td>";
    $total += 50;
  }

echo "<th> Total cost </th>";
echo "<th>" . $total . "</th>";


 ?>
