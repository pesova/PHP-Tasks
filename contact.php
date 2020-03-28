<html>
<body>

Thanks <?php echo $_POST["name"]; ?> for submitting <br>

Your email address is: <?php echo $_POST["emailAddress"]; ?>


<?php
    if(isset($_POST["Submit"])){
    $FirstName =$_POST["name"];
    $Comment =$_POST["comments"];

    //open the file and choose the mode

    $OpenFile = fopen($FirstName, "w");
    fwrite($OpenFile, $Comment);

    }
?>
</body>
</html>

