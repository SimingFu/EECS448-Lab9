<?php
//access the global array called $_POST to get the values from the text fields
  $score = 0;
  if ($_POST["capca"] == "Ottawa"){
    $score +=20;
    echo "Question 1: What was the capital of Canada?<br>";
    echo "You answered: " .$_POST["capca"]. "<br>";
    echo "Correct answer: Ottawa<br>";
  }
  else if ($_POST["capca"] == "Toronto"){
    echo "Question 1: What was the capital of Canada?<br>";
    echo "You answered: " .$_POST["capca"]. "<br>";
    echo "Correct answer: Ottawa<br>";
  }
  else if ($_POST["capca"] == "Vancouver"){
    echo "Question 1: What was the capital of Canada?<br>";
    echo "You answered: " .$_POST["capca"]. "<br>";
    echo "Correct answer: Ottawa<br>";
  }
  else if ($_POST["capca"] == "Montreal"){
    echo "Question 1: What was the capital of Canada?<br>";
    echo "You answered: " .$_POST["capca"]. "<br>";
    echo "Correct answer: Ottawa<br>";
  }
  else {
    echo "Question 1: What was the capital of Canada?<br>";
    echo "You answered: <br>";
    echo "Correct answer: Ottawa<br>";
  }
  echo "<br>";
  if ($_POST["capau"] == "Canberra"){
    $score +=20;
    echo "Question 2: What was the capital of Australia?<br>";
    echo "You answered: " .$_POST["capau"]. "<br>";
    echo "Correct answer: Canberra<br>";
  }
  else if ($_POST["capau"] == "Sydney"){
    echo "Question 2: What was the capital of Australia?<br>";
    echo "You answered: " .$_POST["capau"]. "<br>";
    echo "Correct answer: Canberra<br>";
  }
  else if ($_POST["capau"] == "Melbourne"){
    echo "Question 2: What was the capital of Australia?<br>";
    echo "You answered: " .$_POST["capau"]. "<br>";
    echo "Correct answer: Canberra<br>";
  }
  else if ($_POST["capau"] == "Adelaide"){
    echo "Question 2: What was the capital of Australia?<br>";
    echo "You answered: " .$_POST["capau"]. "<br>";
    echo "Correct answer: Canberra<br>";
  }
  else {
    echo "Question 2: What was the capital of Australia?<br>";
    echo "You answered: <br>";
    echo "Correct answer: Ottawa<br>";
  }
  echo "<br>";
  if ($_POST["capua"] == "DC"){
    $score +=20;
    echo "Question 3: What was the capital of UAS?<br>";
    echo "You answered: Washington, D.C.<br>";
    echo "Correct answer: Washington, D.C.<br>";
  }
  else if ($_POST["capua"] == "NYC"){
    echo "Question 3: What was the capital of UAS?<br>";
    echo "You answered: New York City<br>";
    echo "Correct answer: Washington, D.C.<br>";
  }
  else if ($_POST["capua"] == "LA"){
    echo "Question 3: What was the capital of UAS?<br>";
    echo "You answered: Los Angeles<br>";
    echo "Correct answer: Washington, D.C.<br>";
  }
  else if ($_POST["capua"] == "Chicago"){
    echo "Question 3: What was the capital of UAS?<br>";
    echo "You answered: " .$_POST["capua"]. "<br>";
    echo "Correct answer: Washington, D.C.<br>";
  }
  else {
    echo "Question 3: What was the capital of UAS?<br>";
    echo "You answered: <br>";
    echo "Correct answer: Ottawa<br>";
  }
  echo "<br>";
  if ($_POST["capch"] == "Beijing"){
    $score +=20;
    echo "Question 4: What was the capital of China?<br>";
    echo "You answered: " .$_POST["capch"]. "<br>";
    echo "Correct answer: Beijing<br>";
  }
  else if ($_POST["capch"] == "Shanghai"){
    echo "Question 4: What was the capital of China?<br>";
    echo "You answered: " .$_POST["capch"]. "<br>";
    echo "Correct answer: Beijing<br>";
  }
  else if ($_POST["capch"] == "Guangzhou"){
    echo "Question 4: What was the capital of China?<br>";
    echo "You answered: " .$_POST["capch"]. "<br>";
    echo "Correct answer: Beijing<br>";
  }
  else if ($_POST["capch"] == "Hangzhou"){
    echo "Question 4: What was the capital of China?<br>";
    echo "You answered: " .$_POST["capch"]. "<br>";
    echo "Correct answer: Beijing<br>";
  }
  else {
    echo "Question 4: What was the capital of China?<br>";
    echo "You answered: <br>";
    echo "Correct answer: Ottawa<br>";
  }
  echo "<br>";
  if ($_POST["capsa"] == "Madrid"){
    $score +=20;
    echo "Question 5: What was the capital of Spain?<br>";
    echo "You answered: " .$_POST["capsa"]. "<br>";
    echo "Correct answer: Madrid<br>";
  }
  else if ($_POST["capsa"] == "Barcelona"){
    echo "Question 5: What was the capital of Spain?<br>";
    echo "You answered: " .$_POST["capsa"]. "<br>";
    echo "Correct answer: Madrid<br>";
  }
  else if ($_POST["capsa"] == "Sevilla"){
    echo "Question 5: What was the capital of Spain?<br>";
    echo "You answered: " .$_POST["capsa"]. "<br>";
    echo "Correct answer: Madrid<br>";
  }
  else if ($_POST["capsa"] == "Lisbon"){
    echo "Question 5: What was the capital of Spain?<br>";
    echo "You answered: " .$_POST["capsa"]. "<br>";
    echo "Correct answer: Madrid<br>";
  }
  else {
    echo "Question 5: What was the capital of Spain?<br>";
    echo "You answered: <br>";
    echo "Correct answer: Ottawa<br>";
  }
  echo "<br>";
  echo "Total Score: " . $score  . "%<br>";
?>
