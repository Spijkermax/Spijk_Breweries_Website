<?php

	$conn = mysqli_connect("localhost", "maxs", "Anthony07", "mydb");

  /* email a table booking to the admin(my) email and the customers email, each with different messages and subjects */

if(isset($_POST['submitbooking'])){

  $stmt1 = $conn->prepare("INSERT INTO spijkbookings (firstname, lastname, timeslot, dateslot, email, cellphone) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt1->bind_param("ssssss", $firstname, $lastname, $timeslot, $dateslot, $email, $cellphone);
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $timeslot = $_POST['time'];
  $dateslot = $_POST['date'];
  $email = $_POST['cellphone'];
  $cellphone = $_POST['email'];
  $stmt1->execute();
  $stmt1->close();

   $to = "spijkerbosch.max@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $subjectadmin = "Customer Booking";
    $subjectcustomer = "Spijk Beers- Your booking information";
    $messageadmin = $first_name . " " . $last_name . " " . $_POST['cellphone'] . $_POST['email'] . " wants the following date and time:" . "\n\n" . $_POST['date'] . $_POST['time'];
    $messagecustomer = "Here is a copy of your booking " . $first_name . "\n\n" . $_POST['date'] . $_POST['time'];
    $headeradmin = "From:" . $from;
    $headercustomer = "From:" . $to;
    mail($to,$subjectadmin,$messageadmin,$headeradmin);
    mail($from,$subjectcustomer,$messagecustomer,$headercustomer);
    echo "Mail Sent. Thank you for your booking " . $first_name . ", we will confirm your booking soon.";

    }

/* Inserts the entered fields in the make an order form into the database */

if(isset($_POST['submitorder'])) {

$stmt2 = $conn->prepare("INSERT INTO spijkorders (firstname, lastname, product, quantity, cellphone, email) VALUES (?, ?, ?, ?, ?, ?)");
$stmt2->bind_param("ssssss", $firstname, $lastname, $product, $quantity, $cellphone, $email);
$firstname = $_POST['fnameorder'];
$lastname = $_POST['lnameorder'];
$product = $_POST['productorder'];
$quantity = $_POST['quantityorder'];
$cellphone = $_POST['cellphoneorder'];
$email = $_POST['emailorder'];
$stmt2->execute();
$stmt2->close();
}
?>
