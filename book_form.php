<?php

   $connection = mysqli_connect('localhost','root','','book_db'); 
   /*local machine, the username,' the password, 
   and the database name*/

   if(isset($_POST['send'])){  
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); /*
      After inserting the data, the code uses the header function to redirect the user to the 'book.php' page*/

   }
   else{
      echo 'something went wrong please try again!';  
      /*If the form submission fails, the code executes the else block*/
   }

?>

/*In summary, this code establishes a connection to a MySQL database, handles form submissions, 
retrieves form data, inserts the data into a database table, and redirects the user to another page after 
successful form submission. It also provides an error message if the form submission fails.*/