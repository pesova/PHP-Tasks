<html>
<body>

Thanks <?php echo $_POST["name"]; ?> for submitting <br>
Your email address is: <?php echo $_POST["emailAddress"]; ?>


<?php
    if(isset($_POST['Submit'])){
    $FirstName =$_POST["name"];
    $Comments =$_POST["comments"];
    $Email = $_POST["emailAddress"];
    $Contents= "$FirstName";

    //open the file and choose the mode

    $OpenFile = file_put_contents("$FirstName.txt", 
    "Name: $FirstName, 
    Email: $Email,
    Your Request is: $Comments");
      
    }
?>
</body>
</html>

