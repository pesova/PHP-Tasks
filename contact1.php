<html>
<body>


<?php
    if(isset($_POST['Submit'])){
    $FirstName =$_POST["firstname"];
    $Comment =$_POST["comments"];
    $Email = $_POST["email"];
    $Contents= echo "Name: $FirstName, Email: $Email"

    //open the file and choose the mode

    $OpenFile = file_put_contents($FirstName.txt,$Contents, "w", $Comments);
    
    }
?>
</body>
</html>

