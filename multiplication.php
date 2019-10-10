<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo '<link rel="stylesheet" type="text/css" href="PHPstyle.css"></head>';

$header = "PHP multiplication table";
echo "<center>";
echo "<h1>" . $header . "</h1>";
echo "</center>";
echo "<table style='width:100%'>";
echo "<tr>";
for($k = 1; $k <= 100; $k++)
  {
    echo "<th>" . $k . "</th>";
  }

echo "</tr>";
for($i = 1; $i <= 100; $i++)
  {
    echo "<tr>";
      for($j = 1; $j <= 100; $j++)
        {
          echo "<td>" . $i*$j . "</td>";

        }
  }

echo "</table>";

?>
