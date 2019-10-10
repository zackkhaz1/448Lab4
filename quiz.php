<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo '<link rel="stylesheet" type="text/css" href="quiz.css"></head>';
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$score = 0;
function check1()
  {
    global $score;
    global $q1;
    echo "Question 1: Who is the chancellor of KU? <br>";
    echo "You answered: " . $q1 . "<br>";
    echo "Correct answer: Doug Girod <br>";
    if($q1 == "Doug Girod")
      {
        $score+=20;
      }
  }
function check2()
  {
    global $score;
    global $q2;
    echo "Question 2: When was LEEP2 opened? <br>";
    echo "You answered: " . $q2 . "<br>";
    echo "Correct answer: 2015 <br>";
    if($q2 == "2015")
      {
        $score+=20;
      }
  }

  function check3()
    {
      global $score;
      global $q3;
      echo " Question 3: Who won the Civil War?<br>";
      echo "You answered: " . $q3 . "<br>";
      echo "Correct answer: The North <br>";
      if($q3 == "North")
        {
          $score+=20;
        }
    }

    function check4()
      {
        global $score;
        global $q4;
        echo "Question 4: Who founded Microsoft? <br>";
        echo "You answered: " . $q4 . "<br>";
        echo "Correct answer: Bill Gates <br>";
        if($q4 == "Bill Gates")
          {
            $score+=20;
          }
      }

      function check5()
        {
          global $score;
          global $q5;
          echo "Question 5: Who am I? <br>";
          echo "You answered: " . $q5 . "<br>";
          echo "Correct answer: Zack Khazraeinazmpour <br>";
          if($q5 == "Zack Khazraeinazmpour")
            {
              $score+=20;
            }
        }

check1();
echo "<br>";
check2();
echo "<br>";
check3();
echo "<br>";
check4();
echo "<br>";
check5();
echo "<br>";
echo "You answered " . $score/20 . " questions correctly with a score of " . $score . "%";
?>
