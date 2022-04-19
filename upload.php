<?php

echo '<h1> Succesful upload </h1> <hr>';

if($_SERVER['REQUEST_METHOD'] === "POST"){ 
    
    $uploadDir = 'D:/Formation_developpeur_web/Formulaires_PHP/phpform_files/upload/';
    $uploadFile = $uploadDir . basename($_FILES['avatar']['name']);
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $authorizedExtensions = ['jpg','jpeg','png','gif','webp'];
    $maxFileSize = 1000000;

    if( (!in_array($extension, $authorizedExtensions))){
        $errors[] = 'Veuillez sélectionner une image de type Jpg, Jpeg, Png, Gif ou Webp !';
    }
    elseif ( file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize)
    {
    $errors[] = "Votre fichier doit faire moins de 1M !";
    }
    else { $uploadFile = $uploadDir . basename($_FILES['avatar']['name']);
        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile)){
            printf("Référence unique : %s <br>", uniqid());
            echo '<p>Votre fichier a bien été uploadé ! </p> <br>';
            echo $_POST['firstname'] . ' ' . $_POST['lastname'] . ' ' . $_POST['age'].' ans <br/>';
        
        }
        else {
            echo '<p>Une erreur est survenue lors de l\'upload de votre fichier !</p>';
        }
    }
}

$files1= scandir('upload');
foreach ($files1 as $file){
if(!in_array($file, ['.','..'])){
        echo '<img src="upload/'.$file.'" alt="'.$file.'">';
    }
}
echo '<br/><a href="form.php">Revenir au formulaire</a> <br/>';

