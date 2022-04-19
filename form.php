<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

echo '<h1> Upload your new profile image </h1> <hr>';

echo '<br/> <form method="post" enctype="multipart/form-data" action="upload.php">
        <label for="imageUpload">Upload an profile image :</label>    
        <input type="file" name="avatar" id="imageUpload" required/> <br>
        <input type="text" name="firstname" placeholder="Firstname" required/> <br>
        <input type="text" name="lastname" placeholder="Lastname" required/> <br>
        <input type="text" name="age" placeholder="Age" required/> <br>
        <button name="send">Send</button>
</form>';

?>

</body>
</html>