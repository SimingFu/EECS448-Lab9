<?php
 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
//access the global array called $_POST to get the values from the text fields
  $appleprice = 7.00;
  $milkprice = 15.00;
  $cakeprice = 35.00;
  $username = $_POST["username"];
  echo "WELCOME USER " . $username . "<br>"; 
  $password = $_POST["password"];
  echo "Your password is " . $password . "<br>";
  echo "Your receipt<br>";
  $itemlist = array("Apple", "Milk", "Cake");
  $receiptlist = array("Quantity", "Cost Per Item", "Sub Total");
  echo "<table>";
  for ($row = 0; $row <4; $row++){
    echo "<tr>";
    for ($col = 0; $col <4; $col++){
            if ($row == 0 && $col > 0){
              echo "<td><b>" . $receiptlist[$col-1] . "</b></td>";
            }
            else if ($col == 0 && $row > 0){
              echo "<td><b>" . $itemlist[$row-1] . "</b></td>";
	    }
	    else if ($row == 0 && $col == 0){
	      echo "<td> </td>";
	    }
	    else{
		if ($row == 1){
		  if ($col == 1){
	      	    echo "<td style='background-color: #CCCCFF'>" .$_POST["apple"]. "</td>";
		  }
		  else if ($col == 2){
		    echo "<td style='background-color: #CCCCFF'>$7.00</td>";
		  }
		  else{
		    echo "<td style='background-color: #CCCCFF'>$" .$_POST["apple"] * $appleprice. ".00</td>";
		  }
		}
		else if ($row == 2){
		  if ($col == 1){
                    echo "<td style='background-color: #CCCCFF'>" .$_POST["milk"]. "</td>";
                  }
                  else if ($col == 2){
                    echo "<td style='background-color: #CCCCFF'>$15.00</td>";
                  }
                  else{
                    echo "<td style='background-color: #CCCCFF'>$" .$_POST["milk"] * $milkprice. ".00</td>";
                  }
		}
		else{
		    if ($col == 1){
                    echo "<td style='background-color: #CCCCFF'>" .$_POST["cake"]. "</td>";
                  }
                  else if ($col == 2){
                    echo "<td style='background-color: #CCCCFF'>$35.00</td>";
                  }
		  else{
                    echo "<td style='background-color: #CCCCFF'>$" .$_POST["cake"] * $cakeprice. ".00</td>";
                  }
		}
	    }
    }
    echo "</tr>";
  }
  echo "<tr>";
  echo "<td><b>Shipping</b></td>";
  $shipcost = 0;
  echo "<td colspan = '2' style='background-color: #CCCCFF'>".$_POST["shipping"]."</td>";
  if ($_POST["shipping"] == "Seven-day shipping"){
    echo "<td style='background-color: #CCCCFF'>$0.00</td>";
  }
  else if ($_POST["shipping"] == "Three-day shipping"){
    $shipcost = 5.00;
    echo "<td style='background-color: #CCCCFF'>$5.00</td>";
  }
  else{
    $shipcost = 50.00;
    echo "<td style='background-color: #CCCCFF'>$50.00</td>";
  }
  echo "</tr>";
  echo "<tr>";
  echo "<td colspan = '3' style='text-align: center'><b>Total Cos</b>t</td>";
  $total = $_POST["apple"] * $appleprice + $_POST["milk"] * $milkprice + $_POST["cake"] * $cakeprice + $shipcost;
  echo "<td style='text-align: center'><b>$" .$total. ".00</b></td>";
  echo "</tr>";
  echo "</table>";
?>
