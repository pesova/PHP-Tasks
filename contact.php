
Thanks<?php echo $_POST["name"]; ?> for submitting <br>
Your email address is: <?php echo $_GET["email"]; ?>


<?php
    if(isset($_POST['Submit'])){
    $FirstName =$_POST["firstname"];
    $Comment =$_POST["comments"];

    //open the file and choose the mode

    $OpenFile = fopen($FirstName.txt, "a");
    fwrite($OpenFile, $Comment);

    //close the file

    fclose($fh);
    }
?>
</body>
</html>
