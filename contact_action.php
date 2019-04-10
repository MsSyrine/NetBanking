<?php
/**
 * Created by PhpStorm.
 * User: syrin
 * Date: 4/8/2019
 * Time: 4:35 PM
 */
include "connect.php";

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>
<?php


$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$msg = mysqli_real_escape_string($conn, $_POST["message"]);
$number = mysqli_real_escape_string($conn, $_POST["number"]);



$sql=  "INSERT INTO feedback VALUES(
            '$name',
           '$email',
             '$msg',
           '$number'
                            
        )";


?>
<body>
<div class="flex-container">
    <div class="flex-item">
        <?php
        if (($conn->query($sql) === TRUE)) { ?>
        <p id="info"><?php echo "Form Submitted successfully !\n"; ?></p>
    </div>
    <?php
    } else { ?>
        <p id="info"><?php
            echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
    <?php } ?>
</div>

<?php $conn->close(); ?>

<div class="flex-item">
    <a href="contact.php" class="button"> previous page</a>
</div>


</body>
</html>
