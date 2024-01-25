<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];  
    $email = $_POST["email"];
    $phone = $_POST["phone"];

   $sql = "INSERT INTO data (name, email, phone) VALUES ('$name', '$email', '$phone')";

   if (mysqli_query($arr, $sql)) {
       echo "Data inserted successfully";
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($arr);
   }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>jQuery Form Example</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   

</head>

<body>
    <div class="col-sm-6 col-sm-offset-3">
        <h1>Processing an AJAX Form</h1>

        <form action="index.php" method="POST">

            <div id="name-group" class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />
            </div>

            <div id="email-group" class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" />
            </div>

            <div id="phone-group" class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    placeholder="1234567890 " />
            </div>

            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </form>
    </div>
     <script src="form.js"></script>    
</body>

</html>