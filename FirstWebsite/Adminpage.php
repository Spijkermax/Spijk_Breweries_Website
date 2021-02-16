<!DOCTYPE html>
<head>
<meta charset="utf-8" content="width=device-width, initial-scale=1" />
<title>Spijk Beers - Admin Page</title>
<link rel="stylesheet" type="text/css" href="styling.css" />
</head>

<body>
	<h1>Hello, Admin. Here are our current orders:</h1>
	<table class = "ordertable">
		<tr>
			<th>firstname</th>
			<th>lastname</th>
			<th>product</th>
				<th>quantity</th>
				<th>cellphone</th>
				<th>email</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "maxs", "Anthony07", "mydb");

	/* show order tables on the page by default until I can get login working */

		$result = $conn->query("SELECT firstname, lastname, product, quantity, cellphone, email FROM spijkorders"); /* select all columns from my ordet table */
		if (mysqli_num_rows($result) > 0) { /* table should have at least one result to be populated */
			while ($row = $result-> fetch_assoc()) { /* while a row populates a result insert it into the table rowns in my html */
				echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["product"]  . "</td><td>" . $row["quantity"]  . "</td><td>" . $row["cellphone"]  . "</td><td>" . $row["email"] . "</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 results";
		}
		?>
	</table>

  <h1>Here are our current bookings:</h1>
  <table class = "bookingtable">
    <tr>
      <th>firstname</th>
      <th>lastname</th>
      <th>time</th>
        <th>date</th>
        <th>email</th>
        <th>cellphone</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "maxs", "Anthony07", "mydb");

  /* show order tables on the page by default until I can get login working */

    $result = $conn->query("SELECT firstname, lastname, timeslot, dateslot, cellphone, email FROM spijkbookings"); /* select all columns from my ordet table */
    if (mysqli_num_rows($result) > 0) { /* table should have at least one result to be populated */
      while ($row = $result-> fetch_assoc()) { /* while a row populates a result insert it into the table rowns in my html */
        echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["timeslot"]  . "</td><td>" . $row["dateslot"]  . "</td><td>" . $row["cellphone"]  . "</td><td>" . $row["email"] . "</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "0 results";
    }
    ?>
  </table>
